<?php


namespace App\Http\Controllers\Admin\Settings;


use App\Http\Controllers\Controller;
use App\Models\Role;

class RoleController extends Controller
{
    public function index() {
        $roles = Role::all();
        return view('setting.role',[
            'roles' => $roles,
        ]);


    }
}
