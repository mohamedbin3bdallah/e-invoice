<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'user_addresses';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
		'user_id',
		'city_id',
		'street',
		'building_number',
		'postal_code',
		'floor',
		'room',
		'landmark',
		'additional_information',
		'status'
    ];
	
	/**
     * Get the user that owns the address.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
	
	/**
     * Get the city that owns the address.
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
