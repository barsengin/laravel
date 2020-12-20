<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laratrust\Models\LaratrustRole;

/**
 * App\Models\Role
 *
 * @property int $id
 * @property string  $name
 * @property string  $role_name
 * @property string  $role_description
 */
class Role extends LaratrustRole
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'role_name',
        'role_description',
    ];
}
