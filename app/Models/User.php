<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fname',
		'lname',
        'email',
        'password',
		'company_id',
		'branch_id',
		'group_id',
		'einvoice_role_id',
		'gender',
		'active',
		'image_url',
		'image_thumbnail'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
	
	/**
     * Get the company that owns the user.
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
	
	/**
     * Get the branch that owns the user.
     */
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
	
	/**
     * Get the role that owns the user.
     */
    public function group()
    {
        return $this->belongsTo(\App\Spatie\Permission\Models\Role::class);
    }
	
	/**
     * Get the einvoice role that owns the user.
     */
    public function einvoice_role()
    {
        return $this->belongsTo(EinvoiceRole::class);
    }
	
	/**
     * Get the user detail for the user.
     */
	public function user_detail()
    {
        return $this->hasMany(UserDetail::class);
    }
	
	/**
     * Get the user address for the user.
     */
	public function user_address()
    {
        return $this->hasMany(UserAddress::class);
    }
	
	/**
     * Get the user signature for the user.
     */
	public function user_signature()
    {
        return $this->hasMany(UserSignature::class);
    }
}
