<?php

namespace App\Http\Controllers\InvoiceSDK;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Auth;

class AccessController extends MainController
{
	/**
     * 01- Connect Token.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function connect_token(Request $request)
    {
        $validator = $this->main_valids_function($request, 'connect_token');
		if($validator->fails())
		{
			return $this->response_json(0, __('trans.validation_error'), $validator->messages()->all());
		}
		elseif($validator->passes())
		{
			$prepare = $this->connect_token_data_prepare($request);
			if($this->db_insert)
			{
				$this->db_insert_request($prepare);
			}
			
			$return = json_decode($this->main_curl_function($prepare));
			return $this->main_returns_function($return, 'connect_token');
		}
    }
	
	/**
     * 01- Connect Token Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param $name
	 * @param $header
     * @return HTTP Response
     */
	public function connect_token_data_prepare(Request $request)
	{
		$inputs = [
			'user_id' => Auth::user()->id,
			'invoice_api_name' => 'common',
			'function_name' => 'connect_token',
			'method' => 'post',
			'header' => ['Content-Type'=>'application/x-www-form-urlencoded'],
			'url' => $this->idSrvBaseUrl.'/connect/token',
			'params' => ['grant_type'=>$request->grant_type, 'scope'=>$request->scope, 'client_id'=>$request->client_id, 'client_secret'=>$request->client_secret],
			'send' => $this->request_send
		];
		
		return $inputs;
	}
	
	
	/**
     * 01- Connect Token Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function connect_token_valids(Request $request)
    {
		$user = Auth::user();
		
		$input_valids = [
			'grant_type' => 'required|in:'.$this->grant_type,
			'scope' => 'required|in:'.$this->scope,
			'client_id' => 'required|in:'.$user->company->erp_client_id,
			'client_secret' => 'required|in:'.$user->company->erp_client_secret_1.','.$user->company->erp_client_secret_1
		];
		$validator = Validator::make($request->all(), $input_valids);
		
		return $validator;
    }
	
	/**
     * 01- Connect Token Handle Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function connect_token_returns($return)
    {
		if(isset($return->error)) return $this->response_json(0, $return->error, [$return->error]);
		else
		{
			return $this->response_json(1, __('trans.token'), [$return->access_token]);
		}
    }
	
	/**
     * Login.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response Json
	 */
	public function login(Request $request)
    {
		$attempt = Auth::attempt(request(['email', 'password']));
		if($attempt) return $this->create_token();
		else return $this->response_json(0, __('trans.wrong_credentials'), []);
    }
	
	/**
     * Create Token.
     *
     * @return \Illuminate\Http\Response Json
	 */
	public function create_token()
    {
		//$accessToken = $request->bearerToken();
		//$token = PersonalAccessToken::findToken($accessToken);
		
		Auth::user()->tokens()->delete();
		$token = Auth::user()->createToken('invoice-sdk');
		return $this->response_json(1, __('trans.token'), ['token'=>$token->plainTextToken]);
    }
	
	/**
     * Logout.
     *
	 */
	public function logout()
	{
		Auth::user()->tokens()->delete();
		Auth::guard('web')->logout();
		return $this->response_json(1, __('trans.logout'), []);
	}
}