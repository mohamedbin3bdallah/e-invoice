<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EinvoiceRole extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'einvoice_roles';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
		'type',
		'name_en',
		'name_ar',
		'status'
    ];
	
	/**
     * Get the user for the country.
     */
	public function user()
    {
        return $this->hasMany(User::class);
    }
}
