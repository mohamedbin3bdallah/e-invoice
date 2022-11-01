<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSignature extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'user_signatures';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
		'user_id',
		'type',
		'value',
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
