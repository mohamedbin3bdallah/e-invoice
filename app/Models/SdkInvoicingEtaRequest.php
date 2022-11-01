<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SdkInvoicingEtaRequest extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'sdk_invoicing_eta_requests';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'user_id',
		'invoice_api_name',
		'function_name',
		'method',
		'header',
		'url',
		'params',
		'send'
    ];
	
	/**
     * Get the user that owns the record.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
