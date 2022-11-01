<?php

namespace App\Http\Controllers;

use App\Http\Controllers\InvoiceSDK\MainController;
use Illuminate\Http\Request;
use App\Imports\ItemsImport;
use App\Models\Item;
use Session;
use Excel;
use Auth;
use File;

class ItemController extends AccessController
{
	protected $view_folder = 'item';
	protected $main_redirection = 'items';
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.'.$this->view_folder.'.index');
    }
	
	/**
     * Get a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get(Request $request)
    {
		$items = ['errors'=>[], 'data'=>[]];
		$tokens = $this->create_tokens($request);
		if($tokens['invoice_sdk_token']['code'] == 0) $items['errors'] = $tokens['invoice_sdk_token']['data'];
		else
		{
			$main_controller = new MainController($request);
			$get = json_decode($main_controller->postCurl(['PageNumber'=>1, 'pageSize'=>1000000], $main_controller->einvoice_api_base_url.'/common/name/codetype_request_my_search', ['Content-Type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$tokens['access_token'], 'invoice-sdk-token: '.$tokens['invoice_sdk_token']['data'][0]]), TRUE);
			
			$return = $this->check_auth($get);
			
			if($return['code'] == 0) $items['errors'] = $return['data']['errors'];
			else
			{
				File::put(public_path($this->main_redirection.'/jsons/'.$this->main_redirection.'.json'), json_encode($get['data']));
				$items['data'] = $get['data'];
			}
		}
		
		//$items['data'] = json_decode(file_get_contents(public_path($this->main_redirection.'/jsons/'.$this->main_redirection.'.json')), true);
		
		return $items;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_excel()
    {
        return view('dashboard.'.$this->view_folder.'.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_excel(Request $request)
    {
		$validated = $request->validate([
			'file' => 'required|mimes:xlsx,xls|max:50000'
		]);
		
		$errors = [];
		$import = new ItemsImport();
		$import->import(request()->file('file'));
		foreach ($import->failures() as $failure)
		{
			//$failure->row(); // row that went wrong
			//$failure->attribute(); // either heading key (if using heading row concern) or column index
			//$failure->errors(); // Actual error messages from Laravel validator
			//$failure->values(); // The values of the row that has failed.
			$errors = array_merge($errors, $failure->errors());
		}
		
		if(!empty($errors)) return redirect()->back()->withErrors(['file' => implode(', ', $errors)]);
		else
		{
			$items['items'] = Item::select('codeType','parentCode','itemCode','codeName','codeNameAr','activeFrom','activeTo','description','descriptionAr','requestReason','linkedCode')->where(['done'=>0])->get()
							/*->map(function ($item) {
								$item['activeFrom'] = date('Y-m-d\TH:i:s\Z');
								return $item;
							})*/
							->toArray();
			if(!empty($items['items']))
			{
				$tokens = $this->create_tokens($request);
				if($tokens['invoice_sdk_token']['code'] == 0) $errors = $tokens['invoice_sdk_token']['data'];
				else
				{
					$main_controller = new MainController($request);
					$get = json_decode($main_controller->postCurl(json_encode($items), $main_controller->einvoice_api_base_url.'/common/name/codetype_request_codes', ['Content-Type: application/json', 'Authorization: Bearer '.$tokens['access_token'], 'invoice-sdk-token: '.$tokens['invoice_sdk_token']['data'][0]]), TRUE);
					
					$return = $this->check_auth($get);
					
					if(isset($return['data']['errors']) and !empty($return['data']['errors'])) $errors = $return['data']['errors'];
					if(isset($return['data']['accepts']) and !empty($return['data']['accepts'])) Item::whereIn('itemCode', $return['data']['accepts'])->update(['done'=>1]);
					Item::where('done', 0)->delete();
				}
				
				if(!empty($errors)) return redirect()->back()->withErrors(['file' => implode(', ', $errors)]);
				else
				{
					Session::flash('success', __('trans.added_successfully'));
					return redirect()->route($this->main_redirection);
				}
			}
			else
			{
				Session::flash('danger', __('trans.record_not_found'));
				return redirect()->route($this->main_redirection);
			}
			
		}
    }
}
