<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'documents';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
		'reference_id',
		'internal_id',
		'issuer_type',
		'submitter_id',
		'submitter_name',
		'submitter_address_branch_id',
		'submitter_address_country',
		'submitter_address_governate',
		'submitter_address_city_region',
		'submitter_address_street1',
		'submitter_address_building_number',
		'submitter_address_postal_code',
		'submitter_address_floor',
		'submitter_address_room',
		'submitter_address_landmark',
		'submitter_address_additional_information',
		'recipient_type',
		'recipient_id',
		'recipient_name',
		'recipient_address_country',
		'recipient_address_governate',
		'recipient_address_city_region',
		'recipient_address_street1',
		'recipient_address_building_number',
		'recipient_address_postal_code',
		'recipient_address_floor',
		'recipient_address_room',
		'recipient_address_landmark',
		'recipient_address_additional_information',
		'document_type',
		'document_type_version',
		'date_time_issued',
		'tax_payer_activity_code_string',
		'purchase_order_reference',
		'purchase_order_description',
		'sales_order_reference',
		'sales_order_description',
		'proforma_invoice_number',
		'payment_bank_name',
		'payment_bank_adderss',
		'payment_bank_account_number',
		'payment_bank_account_iban',
		'payment_swift_code',
		'payment_terms',
		'delivery_approach',
		'delivery_packaging',
		'delivery_date_validity',
		'delivery_export_port',
		'delivery_country_of_origin',
		'delivery_gross_weight',
		'delivery_net_weight',
		'delivery_terms',
		'total_sales_amount',
		'total_discount_amount',
		'net_amount',
		'extra_discount_amount',
		'total_items_discount_amount',
		'total_invoice_amount',
		'internal_last_updated_date'
    ];
}
