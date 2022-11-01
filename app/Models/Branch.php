<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'branches';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
		'name',
		'company_id',
		'active'
    ];
	
	/**
     * Get the company that owns the branch.
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
