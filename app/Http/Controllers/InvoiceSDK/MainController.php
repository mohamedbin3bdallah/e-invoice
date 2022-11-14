<?php

namespace App\Http\Controllers\InvoiceSDK;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\SdkInvoicingEtaRequest;
use Auth;
use Session;

class MainController extends Controller
{
	protected $sdk_invoice_verssion = '1.0';
	protected $idSrvBaseUrl = 'https://id.preprod.eta.gov.eg';
	protected $apiBaseUrl = 'https://api.preprod.invoicing.eta.gov.eg/api/v1';
	
	//public $einvoice_api_base_url = config('app.url').'/api/sdk-einvoice';
	public $einvoice_api_base_url = 'http://localhost/e-invoice/public/api/sdk-einvoice';
	
	public $grant_type = 'client_credentials';
	public $scope = 'InvoicingAPI';
	
	protected $header_array = ['Accept: application/json', 'Content-type: application/json', 'Accept-Language: ar'];
	
	protected $db_insert = 1;
	protected $request_send = 1;
	protected $max_decimal = 9999999999999999999.99999;
	
	public $access_token;
	public $invoice_sdk_token;
	
	public function __construct(Request $request)
    {
        $request->headers->set('Accept', 'application/json');
        //$request->headers->set('Content-Type', 'application/json');
		
		if(Session::has('access_token') and Session::has('invoice_sdk_token'))
		{
			$this->access_token = session('access_token');
			$this->invoice_sdk_token = session('invoice_sdk_token');
		}
    }
	
	/**
     * Response Json.
     *
	 * @param  $code, $message, $data
     * @return \Illuminate\Http\Response Json
	 */
	public function response_json($code=0, $message='', $data=[])
	{
		return response()->json([
			'code' => $code,
			'message' => $message,
			'data' => $data
		]);
	}
	
	/**
     * Main Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param $name
	 * @param $apiName
     * @return \Illuminate\Http\Response
     */
	public function main_function(Request $request, $apiName, $name)
	{
		if($request->header('invoice-sdk-token'))
		{
			$this->header_array[] = 'Authorization: Bearer '.$request->header('invoice-sdk-token');
			if(in_array($name, $this->subFunctions))
			{
				$validator = $this->main_valids_function($request, $name);
				if($validator->fails())
				{
					return $this->response_json(0, __('trans.validation_error'), ['errors'=>$validator->messages()->all()]);
				}
				else
				{
					$prepare = $this->main_data_prepare_function($request, $apiName, $name, $this->header_array);
					if($this->db_insert)
					{
						$this->db_insert_request($prepare);
					}
					
					if($this->request_send)
					{
						$return = $this->main_curl_function($prepare);
						return $this->main_returns_function($return, $name);
					}
					else return $this->response_json(2, __('trans.request_not_available'), []);
				}
			}
			else return $this->response_json(0, __('trans.bad_request'), []);
		}
		else return $this->response_json(0, __('trans.accessToken_not_found'), []);
	}
	
	/**
     * Main Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param $name
     * @return \Illuminate\Support\Facades\Validator
     */
	public function main_valids_function(Request $request, $name)
	{
		$valids_function_name = $name.'_valids';
		return $this->$valids_function_name($request);
	}
	
	/**
     * Main Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param $apiName
	 * @param $name
	 * @param $header
     * @return array of data
     */
	public function main_data_prepare_function(Request $request, $apiName, $name, $header)
	{
		$inputs = ['user_id'=>Auth::user()->id, 'invoice_api_name'=>$apiName, 'function_name'=>$name, 'header'=>$header, 'send'=>$this->request_send];
		
		$data_prepare_function_name = $name.'_prepare';
		return $this->$data_prepare_function_name($request, $inputs);
	}
	
	/**
     * Main Returns Function.
     *
	 * @param $return
	 * @param $name
     * @return \Illuminate\Support\Facades\Validator
     */
	public function main_returns_function($return, $name)
	{
		$returns_function_name = $name.'_returns';
		return $this->$returns_function_name($return);
	}
	
	/**
     * Get Url Query Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param $paramsArray
     * @return string of data
     */
	public function get_url_query_prepare(Request $request, $paramsArray)
	{
		$paramsString = '';
		foreach($paramsArray as $param)
		{
			$paramsString .= (isset($request->$param))? '&'.$param.'='.$request->$param:'';
		}
		if(!empty($paramsString)) $paramsString = substr_replace($paramsString, '?', 0, 1);
		
		return $paramsString;
	}
	
	/**
     * Url Query Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param $paramsArray
     * @return array of data
     */
	public function url_query_prepare(Request $request, $paramsArray)
	{
		$paramsArrayPre = [];
		foreach($paramsArray as $param)
		{
			if(isset($request->$param)) $paramsArrayPre[$param]= $request->$param;
		}
		
		return $paramsArrayPre;
	}
	
	/**
     * DB Insert Request Function.
     *
	 * @param $inputs
     */
	public function db_insert_request($inputs)
	{
		$inputs['header'] = json_encode($inputs['header']);
		if(isset($inputs['params'])) $inputs['params'] = (is_array($inputs['params']))? json_encode($inputs['params']):$inputs['params'];
		
		SdkInvoicingEtaRequest::create($inputs);
	}
	
	/**
     * Main Culr HTTP Request Function.
     *
	 * @param $inputs
     * @return HTTP Response
     */
	public function main_curl_function($inputs)
	{
		switch ($inputs['method'])
		{
			case 'get':
				return $this->getCurl($inputs['url'], $inputs['header']);
				break;
				
			case 'post':
				return $this->postCurl($inputs['params'], $inputs['url'], $inputs['header']);
				break;
			
			case 'put':
				return $this->putCurl($inputs['params'], $inputs['url'], $inputs['header']);
				break;
			
			default:
				return '401';
		}
	}
	
	/**
     * Get Curl.
     *
     * @array $headers
     * @param $url
     *
     * @return output
     */
    public function getCurl($url, $headers)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPGET, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // Allow cUrl functions 20 seconds to execute
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        // Wait 10 seconds while trying to connect
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $output = array();
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
	
	/**
     * Post Curl.
     *
     * @array  $post_body, $headers
     * @param $url
     *
     * @return output
     */
    public function postCurl($post_body, $url, $headers)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
        // Allow cUrl functions 20 seconds to execute
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        // Wait 10 seconds while trying to connect
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $output = array();
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
	
	/**
     * Put Curl.
     *
     * @array  $post_body, $headers
     * @param $url
     *
     * @return output
     */
    public function putCurl($post_body, $url, $headers)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
        // Allow cUrl functions 20 seconds to execute
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        // Wait 10 seconds while trying to connect
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $output = array();
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
}