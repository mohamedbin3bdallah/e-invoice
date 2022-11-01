<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentLineTaxes extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'document_line_taxes';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
		'reference_id',
		'document_line_no',
		'amount',
		'tax_type',
		'document_status',
		'rate'
    ];
}
