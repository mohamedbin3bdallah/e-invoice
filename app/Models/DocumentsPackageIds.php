<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentsPackageIds extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'documents_package_ids';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
		'documents_package_id',
		'search'
    ];
}
