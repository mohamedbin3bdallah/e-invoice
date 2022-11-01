<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentLine extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'document_line';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
		'reference_id',
		'document_line_no',
		'description',
		'item_type',
		'item_code',
		'unit_type',
		'quantity',
		'unit_value_currency_sold',
		'unit_value_amount_egp',
		'unit_value_amount_sold',
		'unit_value_exchange_rate',
		'sales_total',
		'total',
		'value_difference',
		'total_taxable_fees',
		'net_total',
		'items_discount',
		'discount_rate',
		'discount_amount',
		'internal_code'
    ];
}
