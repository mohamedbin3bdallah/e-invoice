<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'items';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
		'codeType',
		'parentCode',
		'itemCode',
		'codeName',
		'codeNameAr',
		'activeFrom',
		'activeTo',
		'description',
		'descriptionAr',
		'requestReason',
		'linkedCode'
    ];
}
