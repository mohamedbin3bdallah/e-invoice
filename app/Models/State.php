<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'states';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
		'name',
		'name_ar',
		'counrty_id'
    ];
	
	/**
     * Get the country that owns the state.
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
	
	/**
     * Get the city for the state.
     */
	public function city()
    {
        return $this->hasMany(City::class);
    }
}
