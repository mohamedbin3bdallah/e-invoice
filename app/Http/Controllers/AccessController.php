<?php

namespace App\Http\Controllers;

use App\Http\Controllers\InvoiceSDK\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use ZipArchive;
use File;
use Auth;

class AccessController extends Controller
{
	public $activity_codes_file = 'codes/ActivityCodes.json';
	public $tax_types_file = 'codes/TaxTypes.json';
	public $tax_sub_types_file = 'codes/TaxSubtypes.json';
	public $activity_codes = [];
	public $tax_types = [];
	public $tax_sub_types = [];
	
	public function __construct()
    {
		parent::__construct();
		
        $activity_codes_data = (File::exists(public_path($this->activity_codes_file)))? json_decode(file_get_contents(public_path($this->activity_codes_file)), true):[];
		foreach($activity_codes_data as $activity_code_data)
		{
			$this->activity_codes[$activity_code_data['code']] = $activity_code_data['Desc_'.$this->cur_lang];
		}
		
		$tax_types_data = (File::exists(public_path($this->tax_types_file)))? json_decode(file_get_contents(public_path($this->tax_types_file)), true):[];
		foreach($tax_types_data as $tax_type_data)
		{
			$this->tax_types[$tax_type_data['Code']] = $tax_type_data['Desc_'.$this->cur_lang];
		}
		
		$tax_sub_types_data = (File::exists(public_path($this->tax_sub_types_file)))? json_decode(file_get_contents(public_path($this->tax_sub_types_file)), true):[];
		foreach($tax_sub_types_data as $tax_sub_type_data)
		{
			$this->tax_sub_types[$tax_sub_type_data['TaxtypeReference']][$tax_sub_type_data['Code']] = $tax_sub_type_data['Desc_'.$this->cur_lang];
		}
    }
	
	/**
     * Check Auth.
     *
	 * @param  $object
     * @return array
	 */
	public function check_auth($object)
	{
		$check = [];
		if(isset($object['message']) and ($object['message'] == 'Unauthenticated.'))
		{
			$check = ['code'=>0, 'message'=>__('trans.unauthenticated'), 'data'=>['errors'=>[__('trans.unauthenticated')]]];
		}
		else $check = (array) $object;
		return $check;
	}
	
	/**
     * Create Access Token.
     *
     * @return token
	 */
	public function create_access_token()
    {
		Auth::user()->tokens()->delete();
		$token = Auth::user()->createToken('invoice-sdk');
		return $token->plainTextToken;
    }
	
	/**
     * Create Invoice SDK Token.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $access_token
     * @return response
	 */
	public function create_invoice_sdk_token(Request $request, $access_token)
    {
		$user = User::find(Auth::user()->id);
		if($user and $user->company)
		{
			$erp_client_secret = ($user->company->erp_client_secret_1)? $user->company->erp_client_secret_1:$user->company->erp_client_secret_2;
			
			$main_controller = new MainController($request);
 			$get = json_decode($main_controller->postCurl(['grant_type'=>$main_controller->grant_type, 'scope'=>$main_controller->scope, 'client_id'=>$user->company->erp_client_id, 'client_secret'=>$erp_client_secret], $main_controller->einvoice_api_base_url.'/access/connect_token', ['Authorization: Bearer '.$access_token]), TRUE);
			
			$return = $this->check_auth($get);
		}
		else
		{
			$return = ['code'=>0, 'message'=>__('trans.user_not_found'), 'data'=>[__('trans.user_not_found')]];
		}
		return $return;
    }
	
	/**
     * Create Tokens.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return token
	 */
	public function create_tokens(Request $request)
    {
		$tokens['access_token'] = $this->create_access_token();
		$tokens['invoice_sdk_token'] = $this->create_invoice_sdk_token($request, $tokens['access_token']);
		
		return $tokens;
    }
	
	/**
     * Unzip File.
     *
	 * @param  $file
     * @return boolean
	 */
	public function extract_zip_file($file, $redirection_folder)
	{
		$return = 0;
		$zip = new ZipArchive();
        $status = $zip->open($file);
        if($status === true)
		{
            $destination_path = public_path($redirection_folder.basename($file, '.zip'));
       
            if(!\File::exists( $destination_path)) \File::makeDirectory($destination_path, 0755, true);
            $zip->extractTo($destination_path);
            $zip->close();
			$return = 1;
        }
		
		return $return;
    }
	
	/**
     * Get Directory Json Files.
     *
	 * @param  $directory
     * @return array $files
	 */
	public function get_json_files($directory)
	{
		$files = [];
		$dir = new \RecursiveDirectoryIterator(public_path($directory));
		foreach(new \RecursiveIteratorIterator($dir) as $filename => $file)
		{
			if($file->isDir() or strpos($filename, 'metadata') !== false) continue;
			$files[] = $filename;
		}
		
		return $files;
	}
	
	/**
     * Get Directory Json Files Data.
     *
	 * @param  $directory
     * @return array $data
	 */
	public function get_json_files_data($directory)
	{
		$data = [];
		$files = $this->get_json_files($directory);
		if(!empty($files))
		{
			foreach($files as $key => $file)
			{
				$data[$key] = json_decode(file_get_contents($file), true);
				$data[$key]['uuid'] = basename($file, '.json');
			}
		}
		
		return $data;
	}
}