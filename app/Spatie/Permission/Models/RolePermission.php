<?php
 
namespace App\Spatie\Permission\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class RolePermission extends Model
{
    protected $table = 'group_permissions';
	
	protected $fillable = [
        'group_id',
		'permission_id'
    ];
	
	/**
     * Get the role that owns the permission.
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
	
	/**
     * Get the permission that owns the role.
     */
    public function permission()
    {
        return $this->belongsTo(Permission::class);
    }
}