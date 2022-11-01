<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'companies';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
		'name',
		'address',
		'country_id',
		'state_id',
		'city_id',
		'mobile',
		'landline',
		'email',
		'website',
		'company_type_id',
		'active',
		'sign_type',
		'sign_value',
		'identity',
		'street',
		'building_number',
		'postal_code',
		'floor',
		'room',
		'landmark',
		'additional_information',
		'subscribtion_end_date',
		'email_notification',
		'mobile_notification',
		'user_notification',
		'logo',
		'erp_client_id',
		'erp_client_secret_1',
		'erp_client_secret_2'
    ];
	
	/**
     * Get the roles for the company.
     */
	public function roles()
    {
        return $this->hasMany(Role::class);
    }
	
	/**
     * Get the branches for the company.
     */
	public function branches()
    {
        return $this->hasMany(Branch::class);
    }
	
	/**
     * Get the country that owns the company.
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
	
	/**
     * Get the state that owns the company.
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }
	
	/**
     * Get the city that owns the company.
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }
	
	/**
     * Get the type that owns the company.
     */
    public function company_type()
    {
        return $this->belongsTo(CompanyType::class);
    }
}
