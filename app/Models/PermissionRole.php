<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
	protected $table = 'permission_role';
	protected $fillable = [
        'role_id',
        'permission_id',
    ];
}
