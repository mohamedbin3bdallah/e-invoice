<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyType extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'company_types';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
		'name_ar',
		'name_en',
		'active'
    ];
	
	/**
     * Get the companies for the company type.
     */
	public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
