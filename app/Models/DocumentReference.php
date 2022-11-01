<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentReference extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'document_references';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
		'reference_id',
		'referenced_document_uuid'
    ];
}
