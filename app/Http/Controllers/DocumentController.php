<?php

namespace App\Http\Controllers;

use App\Http\Controllers\InvoiceSDK\MainController;
use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;
use App\Imports\ItemsImport;
use App\Models\Item;
use App\Models\User;
use App\Spatie\Permission\Models\Role;
use App\Models\Document;
use App\Models\DocumentLine;
use App\Models\DocumentLineTaxes;
use App\Models\DocumentReference;
use App\Models\DocumentStatus;
use App\Models\DocumentsPackageIds;
use Session;
use Excel;
use Auth;
use File;

class DocumentController extends AccessController
{
	protected $view_folder = 'document';
	protected $main_redirection = 'documents';
	protected $zip_folder = 'documents/zips/';
	
	protected $package_ids = [];
	
	public function __construct()
    {
		parent::__construct();
		
        $this->package_ids = DocumentsPackageIds::select('id', 'documents_package_id', 'search')->get()
							->map(function ($package_id) {
								$package_id->search = json_decode($package_id->search);
								return $package_id;
							});
    }
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return view('dashboard.'.$this->view_folder.'.index')->with(['activity_codes'=>$this->activity_codes, 'package_ids'=>$this->package_ids, 'resources'=>[]]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
		$item_object = new ItemController();
		$items = $item_object->get($request);
		if(!empty($items['errors']))
		{
			Session::flash('danger', implode(', ', $items['errors']));
			return redirect()->route($this->main_redirection);
		}
		else
		{
			$resources = [];
			$customer_role = Role::where(['name'=>'Customer'])->first();
			if($customer_role) $resources = User::where(['active'=>1, 'group_id'=>$customer_role->id])->get();
			
			return view('dashboard.'.$this->view_folder.'.add')->with(['resources'=>$resources, 'tax_types'=>$this->tax_types, 'tax_sub_types'=>$this->tax_sub_types, 'items'=>$items['data']]);
		}
		
		/*$resources = User::where(['active'=>1])->get();
			return view('dashboard.'.$this->view_folder.'.add')->with(['resources'=>$resources]);*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$validated = $request->validate([
			'receiver' => 'required|integer|gt:0',
			'items' => 'required|array',
			'items.*' => 'required|integer|gt:0',
			'prices' => 'required|array',
			'prices.*' => 'required|numeric|between:0,999999999999999999999999.99999',
			'quantities' => 'required|array',
			'quantities.*' => 'required|integer|gt:0',
			'tax_sub_types' => 'required|array',
			'tax_sub_types.*' => 'required|string|distinct',
			'amounts' => 'required|array',
			'amounts.*' => 'required|numeric|between:0,999999999999999999999999.99999'
		]);
		
		$errors = [];
		$items_json = json_decode(file_get_contents(public_path('items/jsons/items.json'), true));
		$sender = User::find(Auth::user()->id);
		$Receiver = User::find($request->receiver);
		$receiver_address = $Receiver->user_address->where('status', 1)->first();
		
		if($sender and $Receiver and !empty($items_json) and isset($sender->company) and isset($receiver_address))
		{
			$documents = ['documents'=>[]];
			
			$document = [];
			$document_table = [];
			
			$document['documentType'] = $document_table['document_type'] = 'i';
			$document['documentTypeVersion'] = $document_table['document_type_version'] = '1.0';
			$document['dateTimeIssued'] = $document_table['date_time_issued'] = date('Y-m-d\TH:i:s\Z');
			$document['taxpayerActivityCode'] =  $document_table['tax_payer_activity_code_string'] ='4620';
			$document['internalId'] = $document_table['internal_id'] = 'IID1';
			$document['totalSalesAmount'] = $document_table['total_sales_amount'] = array_sum($request->prices);
			$document['totalDiscountAmount'] = $document_table['total_discount_amount'] = 0;
			$document['netAmount'] = $document_table['net_amount'] = $document['totalSalesAmount'];
			$document['extraDiscountAmount'] = $document_table['extra_discount_amount'] = 0;
			$document['totalItemsDiscountAmount'] = $document_table['total_items_discount_amount'] = 0;
			$document['totalAmount'] = $document_table['total_invoice_amount'] = $document['netAmount'] + array_sum($request->amounts);
			
			foreach($request->tax_sub_types as $key => $tax_sub_type)
			{
				$document['taxTotals'][$key]['taxType'] = $tax_sub_type;
				$document['taxTotals'][$key]['amount'] = $request->amounts[$key];
			}
			
			$document['signatures'][0]['type'] = $sender->company->sign_type;
			$document['signatures'][0]['value'] = $sender->company->sign_value;
			
			$issuer = [];
			$issuer['type'] = $document_table['issuer_type'] = ($sender->einvoice_role)? $sender->einvoice_role->type:'';
			$issuer['id'] = $document_table['submitter_id'] = $sender->company->identity;
			$issuer['name'] = $document_table['submitter_name'] = $sender->fname.' '.$sender->lname;
			$issuer['address']['branchId'] = $document_table['submitter_address_branch_id'] = "$sender->branch_id";
			$issuer['address']['country'] = $document_table['submitter_address_country'] = $sender->company->country->iso;
			$issuer['address']['governate'] = $document_table['submitter_address_governate'] = $sender->company->state->name;
			$issuer['address']['regionCity'] = $document_table['submitter_address_city_region'] = $sender->company->city->name;
			$issuer['address']['street'] = $document_table['submitter_address_street1'] = $sender->company->street;
			$issuer['address']['buildingNumber'] = $document_table['submitter_address_building_number'] = $sender->company->building_number;
			$issuer['address']['postalCode'] = $document_table['submitter_address_postal_code'] = $sender->company->postal_code;
			$issuer['address']['floor'] = $document_table['submitter_address_floor'] = $sender->company->floor;
			$issuer['address']['room'] = $document_table['submitter_address_room'] = $sender->company->room;
			$issuer['address']['landmark'] = $document_table['submitter_address_landmark'] = $sender->company->landmark;
			$issuer['address']['additionalInformation'] = $document_table['submitter_address_additional_information'] = $sender->company->additional_information;
			
			$document['issuer'] = $issuer;
			
			$receiver = [];
			$receiver['type'] = $document_table['recipient_type'] = ($Receiver->einvoice_role)? $Receiver->einvoice_role->type:'';
			$receiver['id'] = $document_table['recipient_id'] = ($Receiver->user_detail)? $Receiver->user_detail->where('status', 1)->first()->identity:'';
			$receiver['name'] = $document_table['recipient_name'] = $Receiver->fname.' '.$Receiver->lname;
			$receiver['address']['country'] = $document_table['recipient_address_country'] = $receiver_address->city->state->country->iso;
			$receiver['address']['governate'] = $document_table['recipient_address_governate'] = $receiver_address->city->state->name;
			$receiver['address']['regionCity'] = $document_table['recipient_address_city_region'] = $receiver_address->city->name;
			$receiver['address']['street'] = $document_table['recipient_address_street1'] = $receiver_address->street;
			$receiver['address']['buildingNumber'] = $document_table['recipient_address_building_number'] = $receiver_address->building_number;
			$receiver['address']['postalCode'] = $document_table['recipient_address_postal_code'] = $receiver_address->postal_code;
			$receiver['address']['floor'] = $document_table['recipient_address_floor'] = $receiver_address->floor;
			$receiver['address']['room'] = $document_table['recipient_address_room'] = $receiver_address->room;
			$receiver['address']['landmark'] = $document_table['recipient_address_landmark'] = $receiver_address->landmark;
			$receiver['address']['additionalInformation'] = $document_table['recipient_address_additional_information'] = $receiver_address->additional_information;
			
			$document['receiver'] = $receiver;
			
			$items = [];
			$items_table = [];
			foreach($request->items as $key => $item)
			{
				$index = array_search($item, array_column($items_json, 'codeID'));
				if ($index !== false)
				{
					$items_table[$key]['document_line_no'] = $key+1;
					$items[$key]['description'] = $items_table[$key]['description'] = $items_json[$index]->descriptionSecondaryLang;
					$items[$key]['itemType'] = $items_table[$key]['item_type'] = $items_json[$index]->codeTypeName;
					$items[$key]['itemCode'] = $items_table[$key]['item_code'] = (string) $items_json[$index]->codeID;
					$items[$key]['unitType'] = $items_table[$key]['unit_type'] = 'kg';
					$items[$key]['quantity'] = $items_table[$key]['quantity'] = $request->quantities[$key];
					$items[$key]['unitValue']['currencySold'] = $items_table[$key]['unit_value_currency_sold'] = 'EGP';
					$items[$key]['unitValue']['amountEGP'] = $items_table[$key]['unit_value_amount_egp'] = $request->prices[$key];
					$items[$key]['unitValue']['amountSold'] = $items_table[$key]['unit_value_amount_sold'] = $request->prices[$key];
					$items[$key]['unitValue']['currencyExchangeRate'] = $items_table[$key]['unit_value_exchange_rate'] = 0;
					$items[$key]['salesTotal'] = $items_table[$key]['sales_total'] = $request->prices[$key];
					$items[$key]['total'] = $items_table[$key]['total'] = $request->prices[$key];
					$items[$key]['valueDifference'] = $items_table[$key]['value_difference'] = $request->prices[$key];
					$items[$key]['totalTaxableFees'] = $items_table[$key]['total_taxable_fees'] = 0;
					$items[$key]['netTotal'] = $items_table[$key]['net_total'] = $request->prices[$key];
					$items[$key]['itemsDiscount'] = $items_table[$key]['items_discount'] = 0;
				}
			}
			$document['invoiceLines'] = $items;
			$documents['documents'][] = $document;
		}
		else $errors[] = __('trans.record_not_found');
		
		
		if(!empty($errors)) return redirect()->back()->withErrors(['document' => implode(', ', $errors)]);
		else
		{
			$success = [];
			$tokens = $this->create_tokens($request);
			if($tokens['invoice_sdk_token']['code'] == 0) $errors = $tokens['invoice_sdk_token']['data'];
			else
			{
				$main_controller = new MainController($request);
				$get = json_decode($main_controller->postCurl(json_encode($documents), $main_controller->einvoice_api_base_url.'/einvoicing/name/documents_submit', ['Content-Type: application/json', 'Authorization: Bearer '.$tokens['access_token'], 'invoice-sdk-token: '.$tokens['invoice_sdk_token']['data'][0]]), TRUE);
				
				$return = $this->check_auth($get);
				
				if(isset($return['data']['errors']) and !empty($return['data']['errors'])) $errors = $return['data']['errors'];
				elseif(isset($return['data']['accepts']) and !empty($return['data']['accepts']))
				{
					$success = $return['data']['accepts'];
					
					foreach($return['data']['accepts'] as $accept)
					{
						DocumentReference::create(['reference_id'=>$accept['longId'], 'referenced_document_uuid'=>$accept['uuid']]);
						DocumentStatus::create(['reference_id'=>$accept['longId'], 'document_uuid'=>$accept['uuid'], 'submission_id'=>$return['data']['submission_uuid'], 'processing_result'=>'success', 'document_status'=>'submitted']);
						
						$document_table['reference_id'] = $accept['longId'];
						Document::create($document_table);
						
						foreach($items_table as $key => $item_table)
						{
							$item_table['reference_id'] = $accept['longId'];
							DocumentLine::create($item_table);
						}
					}
				}
				else $errors[] = __('trans.no_response');
			}
			
			if(!empty($errors)) return redirect()->back()->withErrors(['document' => implode(', ', $errors)]);
			else
			{
				Session::flash('success', implode(', ', $success));
				return redirect()->route($this->main_redirection);
			}
		}
    }
	
	/**
     * Search for resources.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
		$errors = [];
		$query_parameters = [
			'type' => 'Full',
			'format' => 'JSON',
			'queryParameters' => [
				'dateFrom' => (isset($request->dateFrom))? $request->dateFrom:'',
				'dateTo' => (isset($request->dateTo))? $request->dateTo:'',
				'documentTypeNames' => (isset($request->documentTypeNames))? $request->documentTypeNames:[],
				'statuses' => (isset($request->statuses))? $request->statuses:[],
				'receiverSenderType' => (isset($request->receiverSenderType))? $request->receiverSenderType:0
			]
		];
		
		$tokens = $this->create_tokens($request);
		if($tokens['invoice_sdk_token']['code'] == 0) $errors = $tokens['invoice_sdk_token']['data'];
		else
		{
			$main_controller = new MainController($request);
			$get = json_decode($main_controller->postCurl(json_encode($query_parameters), $main_controller->einvoice_api_base_url.'/einvoicing/name/request_document_package', ['Content-Type: application/json', 'Authorization: Bearer '.$tokens['access_token'], 'invoice-sdk-token: '.$tokens['invoice_sdk_token']['data'][0]]), TRUE);
			
			$return = $this->check_auth($get);
			
			if(isset($return['data']['errors']) and !empty($return['data']['errors'])) $errors = $return['data']['errors'];
			elseif(isset($return['data']['rid']) and $return['data']['rid'] != '')
			{
				DocumentsPackageIds::create(['documents_package_id'=>$return['data']['rid'], 'search'=>json_encode($query_parameters)]);
			}
		}
		
		if(!empty($errors)) return redirect()->back()->withErrors(['documents' => implode(', ', $errors)]);
		else
		{
			
			Session::flash('success', __('trans.document').' '.__('trans.package').' '.__('trans.is').': '.$return['data']['rid']);
			return redirect()->route($this->main_redirection);
		}
	}
	
	/**
     * Get a listing of the resource.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function package(Request $request)
    {
		$validated = $request->validate([
			'package_id' => 'required|integer|gt:0',
			'length' => 'required|integer|gte:0'
		]);
		
		$return = '';
		$folder = $this->zip_folder.$request->package_id;
		$file_path = public_path($folder.'.zip');
		
		$result = File::exists($file_path);
		if(!$result) $return = $this->get_documents_package_zip_file($request, $request->package_id);
		
		if($return == '')
		{
			if($this->extract_zip_file($file_path, $this->zip_folder))
			{
				return redirect()->route('documents-package-data', ['package_id'=>$request->package_id, 'length'=>$request->length]);
			}
			else return redirect()->back()->withErrors(['documents' => __('trans.unzip_error')]);
		}
		else return redirect()->back()->withErrors(['documents' => $return]);
    }
	
	/**
     * Documents Package Data.
     *
	 * @param  $package_id
	 * @param  $length
     * @return \Illuminate\Http\Response
     */
	public function package_data($package_id, $length)
	{
		$resources = $this->get_json_files_data($this->zip_folder.$package_id);
		
		return view('dashboard.'.$this->view_folder.'.index')->with(['activity_codes'=>$this->activity_codes, 'package_ids'=>$this->package_ids, 'resources'=>$resources]);
	}
	
	/**
     * Get Documents Package Zip File.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $package_id
     * @return \Illuminate\Http\Response
     */
	public function get_documents_package_zip_file(Request $request, $package_id)
	{
		$errors = '';
		$tokens = $this->create_tokens($request);
		if($tokens['invoice_sdk_token']['code'] == 0) $errors = implode(', ', $tokens['invoice_sdk_token']['data']);
		else
		{
			$main_controller = new MainController($request);
			$get = $main_controller->postCurl(['rid'=>$package_id], $main_controller->einvoice_api_base_url.'/einvoicing/name/document_packages', ['Authorization: Bearer '.$tokens['access_token'], 'invoice-sdk-token: '.$tokens['invoice_sdk_token']['data'][0]]);
			
			$get_json = json_decode($get, TRUE);
			$return = $this->check_auth($get_json);
			
			if(isset($return['data']['errors']) and !empty($return['data']['errors'])) $errors = implode(', ', $return['data']['errors']);
			elseif(empty($get_json) and isset($get))
			{
				File::put(public_path($this->zip_folder.$package_id.'.zip'),$get);
			}
		}
		
		return $errors;
	}
	
	/**
     * Change status for resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function status_change(Request $request)
    {
		$errors = [];

		$tokens = $this->create_tokens($request);
		if($tokens['invoice_sdk_token']['code'] == 0) $errors = $tokens['invoice_sdk_token']['data'];
		else
		{
			$main_controller = new MainController($request);
			$get = json_decode($main_controller->postCurl($request->all(), $main_controller->einvoice_api_base_url.'/einvoicing/name/document_status', ['Authorization: Bearer '.$tokens['access_token'], 'invoice-sdk-token: '.$tokens['invoice_sdk_token']['data'][0]]), TRUE);
			
			$return = $this->check_auth($get);
			echo '<pre>'; print_r($return); echo '</pre>';
			if(isset($return['data']['errors']) and !empty($return['data']['errors'])) $errors = $return['data']['errors'];
			else
			{
				DocumentStatus::where(['document_uuid'=>$request->uuid])->update(['document_status'=>$request->status]);
			}
		}
		
		if(!empty($errors)) return redirect()->back()->withErrors(['documents' => implode(', ', $errors)]);
		else
		{
			
			Session::flash('success', __('trans.updated_successfully'));
			return redirect()->back();
		}
	}
}