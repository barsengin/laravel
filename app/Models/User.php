<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Model
{
    use LaratrustUserTrait; // add this trait to your user model

}
