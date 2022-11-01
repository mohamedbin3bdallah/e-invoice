<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'cities';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
		'name',
		'name_ar',
		'state_id',
		'pincode'
    ];
	
	/**
     * Get the state that owns the city.
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }
	
	/**
     * Get the user address for the city.
     */
	public function user_address()
    {
        return $this->hasMany(UserAddress::class);
    }
}
