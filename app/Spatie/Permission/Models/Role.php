<?php
 
namespace App\Spatie\Permission\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Role extends Model
{
    protected $table = 'groups';
	
	protected $fillable = [
        'name',
		'company_id',
		'active'
    ];
	
	/**
     * Get the permissions for the role.
     */
    public function rolePermissions()
    {
        return $this->hasMany(RolePermission::class);
    }
	
	/**
     * Get the company that owns the role.
     */
    public function company()
    {
        return $this->belongsTo(\App\Models\Company::class);
    }
}