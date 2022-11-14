<?php

namespace App\Http\Controllers\InvoiceSDK;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommonController extends MainController
{
	protected $subFunctions = [
		'02' => 'documenttypes',
		'03' => 'documenttype',
		'04' => 'documenttype_version',
		'05' => 'notifications_taxpayer',
		'06' => 'codetype_request_codes',
		'07' => 'codetype_request_my_search',
		'08' => 'codetype_request_codeusages',
		'09' => 'codetype_code_published_search',
		'10' => 'codetype_code',
		'11' => 'codetype_request_code',
		'12' => 'codetype_code_update'
	];
	
	/**
     * Main Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param $name
     * @return \Illuminate\Http\Response
     */
	public function main_function_common(Request $request, $name)
	{
		return $this->main_function($request, 'common', $name);
	}
	
	/**
     * 02- Documenttypes Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $inputs
     * @return array of data
     */
	public function documenttypes_prepare(Request $request, $inputs)
    {
		$inputs['method'] = 'get';
		$inputs['url'] = $this->apiBaseUrl.'/documenttypes';
		
		return $inputs;
    }
	
	/**
     * 02- Documenttypes Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function documenttypes_valids(Request $request)
    {
		$input_valids = [
		];
		$validator = Validator::make($request->all(), $input_valids);
		
		return $validator;
    }
	
	/**
     * 02- Documenttypes Handle Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function documenttypes_returns($return)
    {
		if($return == '' or strpos($return, '401') !== false) return $this->response_json(0, __('trans.accessToken_not_authorized'), ['errors'=>[__('trans.accessToken_not_authorized')]]);
		else return $this->response_json(1, __('trans.success'), json_decode($return));
    }
	
	/**
     * 03- Documenttype Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $inputs
     * @return array of data
     */
	public function documenttype_prepare(Request $request, $inputs)
    {
		$inputs['method'] = 'get';
		$inputs['url'] = $this->apiBaseUrl.'/documenttypes/'.$request->documenttype_id;
		
		return $inputs;
    }
	
    /**
     * 03- Documenttype Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function documenttype_valids(Request $request)
    {
		$input_valids = [
			'documenttype_id' => 'required|integer|gt:0',
		];
		$validator = Validator::make(['documenttype_id'=>$request->documenttype_id], $input_valids);
		
		return $validator;
    }
	
	/**
     * 03- Documenttype Handle Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function documenttype_returns($return)
    {
		if($return == '' or strpos($return, '401') !== false) return $this->response_json(0, __('trans.accessToken_not_authorized'), ['errors'=>[__('trans.accessToken_not_authorized')]]);
		else return $this->response_json(1, __('trans.success'), json_decode($return));
    }
	
	/**
     * 04- Documenttype Version Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $inputs
     * @return array of data
     */
	public function documenttype_version_prepare(Request $request, $inputs)
    {
		$inputs['method'] = 'get';
		$inputs['url'] = $this->apiBaseUrl.'/documenttypes/'.$request->documenttype_id.'/versions/'.$request->version_id;
		
		return $inputs;
    }
	
	/**
     * 04- Documenttype Version Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function documenttype_version_valids(Request $request)
    {
		$input_valids = [
			'documenttype_id' => 'required|integer|gt:0',
			'version_id' => 'required|integer|gt:0',
		];
		$validator = Validator::make(['documenttype_id'=>$request->documenttype_id, 'version_id'=>$request->version_id], $input_valids);
		
		return $validator;
    }
	
	/**
     * 04- Documenttype Version Handle Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function documenttype_version_returns($return)
    {
		if($return == '' or strpos($return, '401') !== false) return $this->response_json(0, __('trans.accessToken_not_authorized'), ['errors'=>[__('trans.accessToken_not_authorized')]]);
		else return $this->response_json(1, __('trans.success'), json_decode($return));
    }
	
	/**
     * 05- Notifications Taxpayer Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $inputs
     * @return array of data
     */
	public function notifications_taxpayer_prepare(Request $request, $inputs)
    {
		$paramsArray = ['pageSize', 'pageNo', 'dateFrom', 'dateTo', 'type', 'language', 'status', 'channel'];
		$paramsString = $this->get_url_query_prepare($request, $paramsArray);
		
		$inputs['method'] = 'get';
		$inputs['url'] = $this->apiBaseUrl.'/notifications/taxpayer'.$paramsString;
		
		return $inputs;
    }
	
	/**
     * 05- Notifications Taxpayer Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function notifications_taxpayer_valids(Request $request)
    {
		$input_valids = [
			'pageSize' => 'nullable|integer|gt:0|lt:10000',
			'pageNo' => 'nullable|integer|gt:0|lt:10000',
			'dateFrom' => 'nullable|before:dateTo|date_format:Y-m-d\TH:i\Z',
			'dateTo' => 'nullable|after:dateFrom|date_format:Y-m-d\TH:i\Z',
			'type' => 'nullable|string|in:1,2,3,4,5,6,7,8,9',
			'language' => 'nullable|string|min:2|max:2|in:ar,en',
			'status' => 'nullable|string|in:pending,batched,delivered,error',
			'channel' => 'nullable|string|in:sms,email,push,system'
		];
		$validator = Validator::make($request->all(), $input_valids);
		
		return $validator;
    }
	
	/**
     * 05- Notifications Taxpayer Handle Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function notifications_taxpayer_returns($return)
    {
		if($return == '' or strpos($return, '401') !== false) return $this->response_json(0, __('trans.accessToken_not_authorized'), ['errors'=>[__('trans.accessToken_not_authorized')]]);
		else return $this->response_json(1, __('trans.success'), json_decode($return));
    }
	
	/**
     * 06- Codetype Request Codes Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $inputs
     * @return array of data
     */
	public function codetype_request_codes_prepare(Request $request, $inputs)
    {
		$inputs['method'] = 'post';
		$inputs['url'] = $this->apiBaseUrl.'/codetypes/requests/codes';
		$inputs['params'] = json_encode($request->all());
		
		return $inputs;
    }
	
	/**
     * 06- Codetype Request Codes Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function codetype_request_codes_valids(Request $request)
    {
		$input_valids = [
			'items' => 'required|array|distinct',
			'items.*' => 'required|array|distinct',
			'items.*.codeType' => 'required|string|in:GS1,EGS',
			'items.*.parentCode' => 'required|string',
			'items.*.itemCode' => 'required|string',
			'items.*.codeName' => 'required|string',
			'items.*.codeNameAr' => 'required|string',
			'items.*.activeFrom' => 'required|before:items.*.activeTo|date_format:Y-m-d\TH:i:s\Z',
			'items.*.activeTo' => 'nullable|after:items.*.activeFrom|date_format:Y-m-d\TH:i:s\Z',
			'items.*.description' => 'nullable|string',
			'items.*.descriptionAr' => 'nullable|string',
			'items.*.requestReason' => 'nullable|string',
			'items.*.linkedCode' => 'nullable|string',
		];
		$validator = Validator::make($request->all(), $input_valids);
		
		return $validator;
    }
	
	/**
     * 06- Codetype Request Codes Handle Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function codetype_request_codes_returns($return)
    {
		if($return == '' or strpos($return, '401') !== false) return $this->response_json(0, __('trans.accessToken_not_authorized'), ['errors'=>[__('trans.accessToken_not_authorized')]]);
		else
		{
			$errors = [];
			$accepts = [];
			$code = 1;
			$return = json_decode($return);
			
			if(!empty($return->failedItems))
			{
				$code = 0;
				foreach($return->failedItems as $error)
				{
					$errors[] = $error->errors[0];
				}
			}
			
			if(!empty($return->passedItems))
			{
				foreach($return->passedItems as $key => $accept)
				{
					//$accepts[$key]['itemCode'] = $accept->itemCode;
					//$accepts[$key]['codeUsageRequestId'] = $accept->codeUsageRequestId;
					if(!empty($errors)) $errors[] = 'Done: '.$accept->itemCode;
					$accepts[] = $accept->itemCode;
				}
			}
			
			return $this->response_json($code, __('trans.success'), ['accepts'=>$accepts, 'errors'=>$errors]);
		}
    }
	
	/**
     * 07- My Codetype Request Search Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $inputs
     * @return array of data
     */
	public function codetype_request_my_search_prepare(Request $request, $inputs)
    {
		$paramsArray = ['ItemCode', 'CodeName', 'CodeDescription', 'ParentLevelName', 'ParentItemCode', 'ActiveFrom', 'ActiveTo', 'Active', 'Status', 'RequestType', 'OrderDirections', 'PageNumber', 'pageSize'];
		$paramsString = $this->get_url_query_prepare($request, $paramsArray);
		
		$inputs['method'] = 'get';
		$inputs['url'] = $this->apiBaseUrl.'/codetypes/requests/my'.$paramsString;
		
		return $inputs;
    }
	
	/**
     * 07- My Codetype Request Search Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function codetype_request_my_search_valids(Request $request)
    {
		$input_valids = [
			'ItemCode' => 'nullable|string|min:10|max:20',
			'CodeName' => 'nullable|string|max:191',
			'CodeDescription' => 'nullable|string|max:191',
			'ParentLevelName' => 'nullable|string|max:191',
			'ParentItemCode' => 'nullable|string|max:191',
			//'ActiveFrom' => 'nullable|before:ActiveTo|date_format:Y-m-d\TH:i:sT',
			'ActiveFrom' => 'nullable|before:ActiveTo|date_format:Y-m-d\TH:i:s\Z',
			'ActiveTo' => 'nullable|after:ActiveFrom|date_format:Y-m-d\TH:i:s\Z',
			'Active' => 'nullable|boolean|in:false,true',
			'Status' => 'nullable|string|in:Submitted,Approved,Rejected',
			'RequestType' => 'nullable|string|in:New,Reusage',
			'OrderDirections' => 'nullable|string|in:Ascending,Descending',
			'PageNumber' => 'nullable|integer|gt:0|lt:10000',
			'pageSize' => 'nullable|integer|gt:0|lt:10000'
		];
		$validator = Validator::make($request->all(), $input_valids);
		
		return $validator;
    }
	
	/**
     * 07- My Codetype Request Search Handle Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function codetype_request_my_search_returns($return)
    {
		if($return == '' or strpos($return, '401') !== false) return $this->response_json(0, __('trans.accessToken_not_authorized'), ['errors'=>[__('trans.accessToken_not_authorized')]]);
		else
		{
			$result = json_decode($return);
			return $this->response_json(1, __('trans.success'), $result->result);
		}
    }
	
	/**
     * 08- Codetype Request Codeusages Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $inputs
     * @return array of data
     */
	public function codetype_request_codeusages_prepare(Request $request, $inputs)
    {
		$inputs['method'] = 'put';
		$inputs['url'] = $this->apiBaseUrl.'/codetypes/requests/codeusages';
		$inputs['params'] = json_encode($request->all());
		
		return $inputs;
    }
	
	/**
     * 08- Codetype Request Codeusages Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function codetype_request_codeusages_valids(Request $request)
    {
		$input_valids = [
			'items' => 'required|array|distinct',
			'items.*' => 'required|array|distinct',
			'items.*.codetype' => 'required|string|in:GS1,EGS',
			'items.*.itemCode' => 'required|string',
			'items.*.comment' => 'required|string'
		];
		$validator = Validator::make($request->all(), $input_valids);
		
		return $validator;
    }
	
	/**
     * 08- Codetype Request Codeusages Handle Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function codetype_request_codeusages_returns($return)
    {
		if($return == '' or strpos($return, '401') !== false) return $this->response_json(0, __('trans.accessToken_not_authorized'), ['errors'=>[__('trans.accessToken_not_authorized')]]);
		else return $this->response_json(1, __('trans.success'), json_decode($return));
    }
	
	/**
     * 09- My Codetype Code Published Search Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $inputs
     * @return array of data
     */
	public function codetype_code_published_search_prepare(Request $request, $inputs)
    {
		$paramsArray = ['CodeLookupValue', 'ParentCodeLookupValue', 'CodeID', 'CodeName', 'CodeDescription', 'TaxpayerRIN', 'ParentCodeID', 'ParentLevelName', 'OnlyActive', 'ActiveFrom', 'ActiveTo', 'Ps', 'Pn', 'CodeTypeLevelNumber'];		
		$paramsString = $this->get_url_query_prepare($request, $paramsArray);
		
		$inputs['method'] = 'get';
		$inputs['url'] = $this->apiBaseUrl.'/codetypes/'.$request->codetype_id.'/codes'.$paramsString;
		
		return $inputs;
    }
	
	/**
     * 09- My Codetype Code Published Search Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function codetype_code_published_search_valids(Request $request)
    {
		$input_valids = [
			'codetype_id' => 'required|string|min:3|max:3|in:GS1,EGS',
			'CodeLookupValue' => 'nullable|string|max:191',
			'ParentCodeLookupValue' => 'nullable|string|max:191',
			'CodeID' => 'nullable|string',
			'CodeName' => 'nullable|string|max:191',
			'CodeDescription' => 'nullable|string|max:191',
			'TaxpayerRIN' => 'nullable|string|max:191',
			'ParentCodeID' => 'nullable|integer|gt:0',
			'ParentLevelName' => 'nullable|string|max:191',
			'OnlyActive' => 'nullable|boolean|in:false,true',
			'ActiveFrom' => 'nullable|before:ActiveTo|date_format:Y-m-d\TH:i:s.v\Z',
			'ActiveTo' => 'nullable|after:ActiveFrom|date_format:Y-m-d\TH:i:s.v\Z',
			'Ps' => 'nullable|string|max:191',
			'Pn' => 'nullable|string|max:191',
			'CodeTypeLevelNumber' => 'nullable|integer|gt:0'
		];
		$validator = Validator::make($request->all(), $input_valids);
		
		return $validator;
    }
	
	/**
     * 09- My Codetype Code Published Search Handle Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function codetype_code_published_search_returns($return)
    {
		if($return == '' or strpos($return, '401') !== false) return $this->response_json(0, __('trans.accessToken_not_authorized'), ['errors'=>[__('trans.accessToken_not_authorized')]]);
		else return $this->response_json(1, __('trans.success'), json_decode($return));
    }
	
	/**
     * 10- Codetype Code Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $inputs
     * @return array of data
     */
	public function codetype_code_prepare(Request $request, $inputs)
    {
		$inputs['method'] = 'get';
		$inputs['url'] = $this->apiBaseUrl.'/codetypes/'.$request->codetype_id.'/codes/'.$request->code_id;
		
		return $inputs;
    }
	
	/**
     * 10- Codetype Code Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function codetype_code_valids(Request $request)
    {
		$input_valids = [
			'codetype_id' => 'required|string|min:3|max:3|in:GS1,EGS',
			'code_id' => 'required|string|min:10|max:20',
		];
		$validator = Validator::make(['codetype_id'=>$request->codetype_id, 'code_id'=>$request->code_id], $input_valids);
		
		return $validator;
    }
	
	/**
     * 10- odetype Code Handle Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function codetype_code_returns($return)
    {
		if($return == '' or strpos($return, '401') !== false) return $this->response_json(0, __('trans.accessToken_not_authorized'), ['errors'=>[__('trans.accessToken_not_authorized')]]);
		else return $this->response_json(1, __('trans.success'), json_decode($return));
    }
	
	/**
     * 11- Codetype Request Code Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $inputs
     * @return array of data
     */
	public function codetype_request_code_prepare(Request $request, $inputs)
    {
		$paramsArray = ['linkedCode', 'activeTo', 'description', 'descriptionAr', 'requestReason'];		
		$paramsArrayPre = $this->url_query_prepare($request, $paramsArray);
		
		$inputs['method'] = 'put';
		$inputs['url'] = $this->apiBaseUrl.'/codetypes/requests/codes/'.$request->codeusagerequest_id;
		$inputs['params'] = json_encode(array_merge($paramsArrayPre, ['itemCode'=>$request->itemCode, 'codeName'=>$request->codeName, 'codeNameAr'=>$request->codeNameAr, 'activeFrom'=>$request->activeFrom, 'parentCode'=>$request->parentCode]));
		
		return $inputs;
    }
	
	/**
     * 11- Codetype Request Code Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function codetype_request_code_valids(Request $request)
    {
		$input_valids = [
			'codeusagerequest_id' => 'required|integer|gt:0',
			'linkedCode' => 'nullable|string|min:10|max:20',
			'parentCode' => 'required|string|min:5|max:20',
			'itemCode' => 'required|string|min:10|max:20',
			'codeName' => 'required|string|max:191',
			'codeNameAr' => 'required|string|max:191',
			'activeFrom' => 'required|before:activeTo|date_format:Y-m-d\TH:i:s\Z',
			'activeTo' => 'nullable|after:activeFrom|date_format:Y-m-d\TH:i:s\Z',
			'description' => 'nullable|string|max:191',
			'descriptionAr' => 'nullable|string|max:191',
			'requestReason' => 'nullable|string|max:191',
		];
		$validator = Validator::make($request->all(), $input_valids);
		
		return $validator;
    }
	
	/**
     * 11- Codetype Request Code Handle Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function codetype_request_code_returns($return)
    {
		if($return == '' or strpos($return, '401') !== false) return $this->response_json(0, __('trans.accessToken_not_authorized'), ['errors'=>[__('trans.accessToken_not_authorized')]]);
		else return $this->response_json(1, __('trans.success'), json_decode($return));
    }
	
	/**
     * 12- Codetype Code Update Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $inputs
     * @return array of data
     */
	public function codetype_code_update_prepare(Request $request, $inputs)
    {
		$paramsArray = ['codeDescriptionPrimaryLang', 'codeDescriptionSecondaryLang', 'activeTo', 'linkedCode'];		
		$paramsArrayPre = $this->url_query_prepare($request, $paramsArray);
		
		$inputs['method'] = 'put';
		$inputs['url'] = $this->apiBaseUrl.'/codetypes/'.$request->codetype_id.'/codes/'.$request->code_id;
		$inputs['params'] = json_encode($paramsArrayPre);
		
		return $inputs;
    }
	
	/**
     * 12- Codetype Code Update Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function codetype_code_update_valids(Request $request)
    {
		$input_valids = [
			'codetype_id' => 'required|string|min:3|max:3|in:GS1,EGS',
			'code_id' => 'required|string|min:10|max:20',
			'codeDescriptionPrimaryLang' => 'nullable|string|max:191',
			'codeDescriptionSecondaryLang' => 'nullable|string|max:191',
			'activeTo' => 'nullable|date_format:Y-m-d\TH:i:s\Z',
			'linkedCode' => 'nullable|string|min:10|max:20'
		];
		$validator = Validator::make($request->all(), $input_valids);
		
		return $validator;
    }
	
	/**
     * 12- Codetype Code Update Handle Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function codetype_code_update_returns($return)
    {
		if($return == '' or strpos($return, '401') !== false) return $this->response_json(0, __('trans.accessToken_not_authorized'), ['errors'=>[__('trans.accessToken_not_authorized')]]);
		else return $this->response_json(1, __('trans.success'), json_decode($return));
    }
}