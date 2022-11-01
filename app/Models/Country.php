<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'countries';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
		'name',
		'nicename',
		'iso',
		'iso3',
		'numcode',
		'phonecode'
    ];
	
	/**
     * Get the state for the country.
     */
	public function state()
    {
        return $this->hasMany(State::class);
    }
	
	/**
     * Get the companies for the country.
     */
	public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
