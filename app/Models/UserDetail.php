<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'user_details';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
		'user_id',
		'identity',
		'status'
    ];
	
	/**
     * Get the user that owns the detail.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
