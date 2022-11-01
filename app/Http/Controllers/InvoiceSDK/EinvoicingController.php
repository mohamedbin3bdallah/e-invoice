<?php

namespace App\Http\Controllers\InvoiceSDK;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EinvoicingController extends MainController
{
	protected $subFunctions = [
		'01'=>'documents_submit',
		'02,03'=>'document_status',
		'04'=>'documents_recent',
		'05'=>'request_document_package',
		'06'=>'document_package_requests',
		'07'=>'document_packages',
		'08'=>'document',
		'09'=>'document_submissions',
		'10'=>'document_printout',
		'11'=>'document_details',
		'12,13'=>'document_decline_status'
	];
	
	/**
     * Main Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param $name
     * @return \Illuminate\Http\Response
     */
	public function main_function_einvoicing(Request $request, $name)
	{
		return $this->main_function($request, 'einvoicing', $name);
	}
	
	/**
     * 01- Documents Submit Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $inputs
     * @return array of data
     */
	public function documents_submit_prepare(Request $request, $inputs)
    {
		$inputs['method'] = 'post';
		$inputs['url'] = $this->apiBaseUrl.'/documentsubmissions';
		$inputs['params'] = json_encode($request->all());
		
		return $inputs;
    }
	
	/**
     * 01- Documents Submit Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function documents_submit_valids(Request $request)
    {
		$input_valids = [
			'documents' => 'required|array|distinct',
			'documents.*' => 'required|array|distinct',
			'documents.*.documentType' => 'required|string|in:i,c,d',
			'documents.*.documentTypeVersion' => 'required|string|in:'.$this->sdk_invoice_verssion,
			'documents.*.dateTimeIssued' => 'required|date_format:Y-m-d\TH:i:s\Z',
			
			'documents.*.taxpayerActivityCode' => 'required|string',
			'documents.*.internalId' => 'required|string',
			'documents.*.purchaseOrderReference' => 'nullable|string',
			'documents.*.purchaseOrderDescription' => 'nullable|string',
			'documents.*.salesOrderReference' => 'nullable|string',
			'documents.*.salesOrderDescription' => 'nullable|string',
			'documents.*.proformaInvoiceNumber' => 'nullable|string|max:50',
			
			'documents.*.totalSalesAmount' => 'required|numeric|between:0,'.$this->max_decimal,
			'documents.*.totalDiscountAmount' => 'required|numeric|between:0,'.$this->max_decimal,
			'documents.*.netAmount' => 'required|numeric|between:0,'.$this->max_decimal,
			'documents.*.extraDiscountAmount' => 'required|numeric|between:0,'.$this->max_decimal,
			'documents.*.totalItemsDiscountAmount' => 'required|numeric|between:0,'.$this->max_decimal,
			'documents.*.totalAmount' => 'required|numeric|between:0,'.$this->max_decimal,
			
			'documents.*.issuer' => 'required|array|distinct',
			'documents.*.issuer.type' => 'required|string|in:B,P,F',
			'documents.*.issuer.id' => 'required|string',
			'documents.*.issuer.name' => 'required|string',
			'documents.*.issuer.address' => 'required|array|distinct',
			'documents.*.issuer.address.branchId' => 'required_if:documents.*.issuer.type,B|string',
			'documents.*.issuer.address.country' => 'required|string|min:2|max:2',
			'documents.*.issuer.address.governate' => 'required|string',
			'documents.*.issuer.address.regionCity' => 'required|string',
			'documents.*.issuer.address.street' => 'required|string',
			'documents.*.issuer.address.buildingNumber' => 'required|string',
			'documents.*.issuer.address.postalCode' => 'nullable|string',
			'documents.*.issuer.address.floor' => 'nullable|string',
			'documents.*.issuer.address.room' => 'nullable|string',
			'documents.*.issuer.address.landmark' => 'nullable|string',
			'documents.*.issuer.address.additionalInformation' => 'nullable|string',
			
			'documents.*.receiver' => 'required|array|distinct',
			'documents.*.receiver.type' => 'required|string|in:B,P,F',
			'documents.*.receiver.id' => 'required|string',
			'documents.*.receiver.name' => 'required|string',
			'documents.*.receiver.address' => 'required|array|distinct',
			'documents.*.receiver.address.country' => 'required|string|min:2|max:2',
			'documents.*.receiver.address.governate' => 'required|string',
			'documents.*.receiver.address.regionCity' => 'required|string',
			'documents.*.receiver.address.street' => 'required|string',
			'documents.*.receiver.address.buildingNumber' => 'required|string',
			'documents.*.receiver.address.postalCode' => 'nullable|string',
			'documents.*.receiver.address.floor' => 'nullable|string',
			'documents.*.receiver.address.room' => 'nullable|string',
			'documents.*.receiver.address.landmark' => 'nullable|string',
			'documents.*.receiver.address.additionalInformation' => 'nullable|string',
			
			'documents.*.payment' => 'nullable|array|distinct',
			'documents.*.payment.bankName' => 'nullable|string',
			'documents.*.payment.bankAddress' => 'nullable|string',
			'documents.*.payment.bankAccountNo' => 'nullable|string',
			'documents.*.payment.bankAccountIBAN' => 'nullable|string',
			'documents.*.payment.swiftCode' => 'nullable|string',
			'documents.*.payment.terms' => 'nullable|string',
			
			'documents.*.delivery' => 'nullable|array|distinct',
			'documents.*.delivery.approach' => 'nullable|string',
			'documents.*.delivery.packaging' => 'nullable|string',
			'documents.*.delivery.dateValidity' => 'nullable|date_format:Y-m-d\TH:i:s\Z',
			'documents.*.delivery.exportPort' => 'nullable|string',
			'documents.*.delivery.countryOfOrigin' => 'nullable|string|max:2',
			'documents.*.delivery.grossWeight' => 'nullable|numeric|between:0,'.$this->max_decimal,
			'documents.*.delivery.netWeight' => 'nullable|numeric|between:0,'.$this->max_decimal,
			'documents.*.delivery.terms' => 'nullable|string',
			
			'documents.*.invoiceLines' => 'required|array|distinct',
			'documents.*.invoiceLines.*' => 'required|array|distinct',
			'documents.*.invoiceLines.*.description' => 'required|string',
			'documents.*.invoiceLines.*.itemType' => 'required|string|in:GS1,EGS',
			'documents.*.invoiceLines.*.itemCode' => 'required|string',
			'documents.*.invoiceLines.*.unitType' => 'required|string',
			'documents.*.invoiceLines.*.quantity' => 'required|numeric|between:0,'.$this->max_decimal,
			'documents.*.invoiceLines.*.unitValue' => 'required|array|distinct',
			'documents.*.invoiceLines.*.unitValue.currencySold' => 'required|string',
			'documents.*.invoiceLines.*.unitValue.amountEGP' => 'required|numeric|between:0,'.$this->max_decimal,
			'documents.*.invoiceLines.*.unitValue.amountSold' => 'required|numeric|between:0,'.$this->max_decimal,
			'documents.*.invoiceLines.*.unitValue.currencyExchangeRate' => 'required|numeric|between:0,'.$this->max_decimal,
			'documents.*.invoiceLines.*.salesTotal' => 'required|numeric|between:0,'.$this->max_decimal,
			'documents.*.invoiceLines.*.total' => 'required|numeric|between:0,'.$this->max_decimal,
			'documents.*.invoiceLines.*.valueDifference' => 'required|numeric|between:-'.$this->max_decimal.','.$this->max_decimal,
			'documents.*.invoiceLines.*.totalTaxableFees' => 'required|numeric|between:0,'.$this->max_decimal,
			'documents.*.invoiceLines.*.netTotal' => 'required|numeric|between:0,'.$this->max_decimal,
			'documents.*.invoiceLines.*.itemsDiscount' => 'required|numeric|between:0,'.$this->max_decimal,
			'documents.*.invoiceLines.*.discount' => 'nullable|array|distinct',
			'documents.*.invoiceLines.*.discount.rate' => 'nullable|numeric|between:0,100.00',
			'documents.*.invoiceLines.*.discount.amount' => 'nullable|numeric|between:0,'.$this->max_decimal,
			'documents.*.invoiceLines.*.taxableItems' => 'nullable|array|distinct',
			'documents.*.invoiceLines.*.taxableItems.*' => 'nullable|array|distinct',
			'documents.*.invoiceLines.*.taxableItems.*.taxType' => 'nullable|string',
			'documents.*.invoiceLines.*.taxableItems.*.amount' => 'nullable|numeric|between:0,'.$this->max_decimal,
			'documents.*.invoiceLines.*.taxableItems.*.subType' => 'nullable|string',
			'documents.*.invoiceLines.*.taxableItems.*.rate' => 'nullable|numeric|between:0,100.00',
			'documents.*.invoiceLines.*.internalCode' => 'nullable|string',
			
			'documents.*.taxTotals' => 'required|array|distinct',
			'documents.*.taxTotals.*' => 'required|array|distinct',
			'documents.*.taxTotals.*.taxType' => 'required|string',
			'documents.*.taxTotals.*.amount' => 'required|numeric|between:0,'.$this->max_decimal,
			
			'documents.*.signatures' => 'required|array|distinct',
			'documents.*.signatures.*' => 'required|array|distinct',
			'documents.*.signatures.*.type' => 'required|string|in:I,S',
			'documents.*.signatures.*.value' => 'required_if:documents.*.signatures.*.type,I'
		];
		$validator = Validator::make($request->all(), $input_valids);
		
		return $validator;
    }
	
	/**
     * 01- Documents Submit Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function documents_submit_returns($return)
    {
		if(strpos($return, '401') !== false) return $this->response_json(0, __('trans.accessToken_not_authorized'), ['errors'=>[__('trans.accessToken_not_authorized')]]);
		elseif(strpos($return, 'administrator') !== false) return $this->response_json(1, __('trans.the_requested_url_was_rejected'), ['errors'=>[strip_tags($return)]]);
		else
		{
			$rejects = [];
			$accepts = [];
			$submission_uuid = '';
			$code = 1;
			$returns = json_decode($return);
			
			if(!empty($returns->rejectedDocuments))
			{
				$code = 0;
				foreach($returns->rejectedDocuments as $doc_reject)
				{
					foreach($doc_reject->error->details as $reject)
					{
						$rejects[] = $reject->propertyPath.': '.$reject->message;
					}
				}
			}
			
			if(!empty($returns->acceptedDocuments))
			{
				$submission_uuid = $returns->submissionId;
				foreach($returns->acceptedDocuments as $key => $doc_accept)
				{
					$accepts[$key]['uuid'] = $doc_accept->uuid;
					$accepts[$key]['longId'] = $doc_accept->longId;
				}
			}
			
			return $this->response_json($code, __('trans.success'), ['submission_uuid'=>$submission_uuid, 'accepts'=>$accepts, 'errors'=>$rejects]);
		}
    }
	
	/**
     * 02, 03- Document Status Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $inputs
     * @return array of data
     */
	public function document_status_prepare(Request $request, $inputs)
    {
		$paramsArray = ['status', 'reason'];
		$paramsArrayPre = $this->url_query_prepare($request, $paramsArray);
		
		$inputs['method'] = 'put';
		$inputs['url'] = $this->apiBaseUrl.'/documents/state/'.$request->uuid.'/state';
		$inputs['params'] = json_encode($paramsArrayPre);
		
		return $inputs;
    }
	
	/**
     * 02, 03- Document Status Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function document_status_valids(Request $request)
    {
		$input_valids = [
			'uuid' => 'required|string',
			'status' => 'required|string|in:cancelled,rejected',
			'reason' => 'required|string'
		];
		$validator = Validator::make($request->all(), $input_valids);
		
		return $validator;
    }
	
	/**
     * 02, 03- Document Status Handle Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function document_status_returns($return)
    {
		if(strpos($return, '401') !== false) return $this->response_json(0, __('trans.accessToken_not_authorized'), ['errors'=>[__('trans.accessToken_not_authorized')]]);
		else
		{
			$errors = [];
			$code = 1;
			$return = json_decode($return);
			
			if(isset($return->error))
			{
				$code = 0;
				foreach($return->error->details as $error)
				{
					$errors[] = $error->target.': '.$error->message;
				}
			}
			else {}
			
			return $this->response_json($code, __('trans.success'), ['errors'=>$errors]);
		}
    }
	
	/**
     * 04- Documents Recent Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $inputs
     * @return array of data
     */
	public function documents_recent_prepare(Request $request, $inputs)
    {
		$inputs['method'] = 'get';
		//$inputs['header'][] = 'pageSize: '.$request->pageSize;
		//$inputs['header'][] = 'pageNo: '.$request->pageNo;
		$inputs['url'] = $this->apiBaseUrl.'/documents/recent?pageSize'.$request->pageSize.'&pageNo='.$request->pageNo;
		
		return $inputs;
    }
	
    /**
     * 04- Documents Recent Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function documents_recent_valids(Request $request)
    {
		$input_valids = [
			'pageSize' => 'required|integer|gt:0',
			'pageNo' => 'required|integer|gt:0'
		];
		$validator = Validator::make($request->all(), $input_valids);
		
		return $validator;
    }
	
	/**
     * 04- Documents Recent Handle Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function documents_recent_returns($return)
    {
		if(strpos($return, '401') !== false) return $this->response_json(0, __('trans.accessToken_not_authorized'), ['errors'=>[__('trans.accessToken_not_authorized')]]);
		else return $this->response_json(1, __('trans.success'), json_decode($return));
    }
	
	/**
     * 05- Request Document Package Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $inputs
     * @return array of data
     */
	public function request_document_package_prepare(Request $request, $inputs)
    {
		$inputs['method'] = 'post';
		$inputs['url'] = $this->apiBaseUrl.'/documentPackages/requests';
		$inputs['params'] = json_encode($request->all());
		
		return $inputs;
    }
	
	/**
     * 05- Request Document Package Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function request_document_package_valids(Request $request)
    {
		$input_valids = [
			'type' => 'required|string|in:Full,Summary',
			'format' => 'required|string|in:JSON',
			'queryParameters' => 'required|array',
			'queryParameters.dateFrom' => 'required|before:queryParameters.dateTo|date_format:Y-m-d\TH:i',
			'queryParameters.dateTo' => 'required|after:queryParameters.dateFrom|date_format:Y-m-d\TH:i',
			'queryParameters.documentTypeNames' => 'nullable|array',
			'queryParameters.documentTypeNames.*' => 'nullable|string|distinct|in:i,c,d',
			'queryParameters.statuses' => 'nullable|array',
			//'queryParameters.statuses.*' => 'nullable|string|distinct|in:Submitted,Valid,Invalid,Rejected,Cancelled',
			'queryParameters.statuses.*' => 'nullable|string|distinct|in:Valid,Invalid,Rejected,Cancelled',
			'queryParameters.productsInternalCodes' => 'nullable|array',
			'queryParameters.productsInternalCodes.*' => 'nullable|string|distinct',
			'queryParameters.receiverSenderType' => 'required|string|in:0,1,2',
			'queryParameters.receiverSenderId' => 'nullable|string',
			'queryParameters.branchNumber' => 'nullable|string',
			'queryParameters.itemCodes' => 'nullable|array|distinct',
			'queryParameters.itemCodes.*' => 'nullable|array|distinct',
			'queryParameters.itemCodes.*.codeValue' => 'nullable|string',
			'queryParameters.itemCodes.*.codeType' => 'nullable|string|in:EGS,GS1'
		];
		$validator = Validator::make($request->all(), $input_valids);
		
		return $validator;
    }
	
	/**
     * 05- Request Document Package Handle Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function request_document_package_returns($return)
    {
		if(strpos($return, '401') !== false) return $this->response_json(0, __('trans.accessToken_not_authorized'), ['errors'=>[__('trans.accessToken_not_authorized')]]);
		else
		{
			$errors = [];
			$rid = '';
			$code = 1;
			$return = json_decode($return);
			
			if(isset($return->error))
			{
				$code = 0;
				foreach($return->error->details as $error)
				{
					$errors[] = $error->target.': '.$error->message;
				}
			}
			else $rid = $return->requestId;
			
			return $this->response_json($code, __('trans.success'), ['rid'=>$rid, 'errors'=>$errors]);
		}
    }
	
	/**
     * 06- Document Package Requests Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $inputs
     * @return array of data
     */
	public function document_package_requests_prepare(Request $request, $inputs)
    {
		$inputs['method'] = 'get';
		$inputs['url'] = $this->apiBaseUrl.'/documentPackages/requests?pageSize='.$request->pageSize.'&pageNo='.$request->pageNo;
		
		return $inputs;
    }
	
	/**
     * 06- Document Package Requests Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function document_package_requests_valids(Request $request)
    {
		$input_valids = [
			'pageSize' => 'required|integer|gt:0',
			'pageNo' => 'required|integer|gt:0'
		];
		$validator = Validator::make($request->all(), $input_valids);
		
		return $validator;
    }
	
	/**
     * 06- Document Package Requests Handle Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function document_package_requests_returns($return)
    {
		if(strpos($return, '401') !== false) return $this->response_json(0, __('trans.accessToken_not_authorized'), ['errors'=>[__('trans.accessToken_not_authorized')]]);
		else return $this->response_json(1, __('trans.success'), json_decode($return));
    }
	
	/**
     * 07- Document Packages Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $inputs
     * @return array of data
     */
	public function document_packages_prepare(Request $request, $inputs)
    {
		$inputs['method'] = 'get';
		$inputs['url'] = $this->apiBaseUrl.'/documentPackages/'.$request->rid;
		
		return $inputs;
    }
	
	/**
     * 07- Document Packages Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function document_packages_valids(Request $request)
    {
		$input_valids = [
			'rid' => 'required|string'
		];
		$validator = Validator::make($request->all(), $input_valids);
		
		return $validator;
    }
	
	/**
     * 07- Document Packages Handle Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function document_packages_returns($return)
    {
		if(strpos($return, '401') !== false) return $this->response_json(0, __('trans.accessToken_not_authorized'), ['errors'=>[__('trans.accessToken_not_authorized')]]);
		else
		{
			$errors = [];
			$zip = '';
			$code = 1;
			$returns = json_decode($return);
			
			if(isset($returns->error))
			{
				$code = 0;
				foreach($returns->error->details as $error)
				{
					$errors[] = $error->target.': '.$error->message;
				}
				return $this->response_json($code, __('trans.success'), ['errors'=>$errors]);
			}
			else return $return;
		}
    }
	
	/**
     * 08- Document Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $inputs
     * @return array of data
     */
	public function document_prepare(Request $request, $inputs)
    {
		$inputs['method'] = 'get';
		$inputs['url'] = $this->apiBaseUrl.'/documents/'.$request->documentUUID.'/raw';
		
		return $inputs;
    }
	
	/**
     * 08- Document Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function document_valids(Request $request)
    {
		$input_valids = [
			'documentUUID' => 'required|string'
		];
		$validator = Validator::make($request->all(), $input_valids);
		
		return $validator;
    }
	
	/**
     * 08- Document Handle Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function document_returns($return)
    {
		if(strpos($return, '401') !== false) return $this->response_json(0, __('trans.accessToken_not_authorized'), ['errors'=>[__('trans.accessToken_not_authorized')]]);
		else return $this->response_json(1, __('trans.success'), json_decode($return));
    }
	
	/**
     * 09- Document Submissions Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $inputs
     * @return array of data
     */
	public function document_submissions_prepare(Request $request, $inputs)
    {
		$inputs['method'] = 'get';
		$inputs['url'] = $this->apiBaseUrl.'/documentSubmissions/'.$request->uuid.'?pageSize='.$request->pageSize.'&pageNo='.$request->pageNo;
		
		return $inputs;
    }
	
    /**
     * 09- Document Submissions Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function document_submissions_valids(Request $request)
    {
		$input_valids = [
			'uuid' => 'required|string',
			'pageSize' => 'required|integer|gt:0',
			'pageNo' => 'required|integer|gt:0'
		];
		$validator = Validator::make($request->all(), $input_valids);
		
		return $validator;
    }
	
	/**
     * 09- Document Submissions Handle Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function document_submissions_returns($return)
    {
		if(strpos($return, '401') !== false) return $this->response_json(0, __('trans.accessToken_not_authorized'), ['errors'=>[__('trans.accessToken_not_authorized')]]);
		else return $this->response_json(1, __('trans.success'), json_decode($return));
    }
	
	/**
     * 10- Document Printout Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $inputs
     * @return array of data
     */
	public function document_printout_prepare(Request $request, $inputs)
    {
		$inputs['method'] = 'get';
		$inputs['url'] = $this->apiBaseUrl.'/documents/'.$request->uuid.'/pdf';
		
		return $inputs;
    }
	
	/**
     * 10- Document Printout Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function document_printout_valids(Request $request)
    {
		$input_valids = [
			'uuid' => 'required|string'
		];
		$validator = Validator::make($request->all(), $input_valids);
		
		return $validator;
    }
	
	/**
     * 10- Document Printout Handle Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function document_printout_returns($return)
    {
		if(strpos($return, '401') !== false) return $this->response_json(0, __('trans.accessToken_not_authorized'), ['errors'=>[__('trans.accessToken_not_authorized')]]);
		else return $this->response_json(1, __('trans.success'), json_decode($return));
    }
	
	/**
     * 11- Document Details Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $inputs
     * @return array of data
     */
	public function document_details_prepare(Request $request, $inputs)
    {
		$inputs['method'] = 'get';
		$inputs['url'] = $this->apiBaseUrl.'/documents/'.$request->uuid.'/details';
		
		return $inputs;
    }
	
	/**
     * 11- Document Details Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function document_details_valids(Request $request)
    {
		$input_valids = [
			'uuid' => 'required|string'
		];
		$validator = Validator::make($request->all(), $input_valids);
		
		return $validator;
    }
	
	/**
     * 11- Document Details Handle Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function document_details_returns($return)
    {
		if(strpos($return, '401') !== false) return $this->response_json(0, __('trans.accessToken_not_authorized'), ['errors'=>[__('trans.accessToken_not_authorized')]]);
		else return $this->response_json(1, __('trans.success'), json_decode($return));
    }
	
	/**
     * 12, 13- Document Decline Status Data Prepare Function.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  $inputs
     * @return array of data
     */
	public function document_decline_status_prepare(Request $request, $inputs)
    {
		$inputs['method'] = 'put';
		$inputs['url'] = $this->apiBaseUrl.'/documents/state/'.$request->uuid.'/decline/'.$request->status;
		$inputs['params'] = json_encode([]);
		
		return $inputs;
    }
	
	/**
     * 12, 13- Document Decline Status Validation Function.
     *
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Validator
     */
	public function document_decline_status_valids(Request $request)
    {
		$input_valids = [
			'uuid' => 'required|string',
			'status' => 'required|string|in:cancelation,rejection'
		];
		$validator = Validator::make($request->all(), $input_valids);
		
		return $validator;
    }
	
	/**
     * 12, 13- Document Decline Status Handle Return Function.
     *
	 * @param  $return
     * @return response json
     */
	public function document_decline_status_returns($return)
    {
		if(strpos($return, '401') !== false) return $this->response_json(0, __('trans.accessToken_not_authorized'), ['errors'=>[__('trans.accessToken_not_authorized')]]);
		else return $this->response_json(1, __('trans.success'), json_decode($return));
    }
}