<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentStatus extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'document_status';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
		'reference_id',
		'document_uuid',
		'submission_id',
		'processing_result',
		'document_status'
    ];
}
