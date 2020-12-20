<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Role;

class StockController extends Controller
{
    public function index() {
        $owner = Role::create([
            'name' => 'admin',
            'display_name' => 'Admin', // optional
            'description' => 'User is the owner of a given project', // optional
        ]);
        return view('stock.index');
    }

}
