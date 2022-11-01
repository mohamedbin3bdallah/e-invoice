<?php
 
namespace App\Spatie\Permission\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Permission extends Model
{
    protected $table = 'permissions';
	
	protected $fillable = [
        'name_ar',
		'name_en',
		'slug',
		'active'
    ];
	
	/**
     * Get the roles for the permission.
     */
	public function rolePermissions()
    {
        return $this->hasMany(RolePermission::class);
    }
}