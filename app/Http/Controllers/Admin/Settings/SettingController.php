<?php


namespace App\Http\Controllers\Admin\Settings;


use App\Http\Controllers\Controller;
use App\Models\Role;

class SettingController extends Controller
{
    public function index() {
        return view('setting.index');
    }

}
