<?php

use App\Http\Controllers\Admin\Settings\RoleController;
use App\Http\Controllers\Admin\Settings\SettingController;
use App\Http\Controllers\Admin\StockController;
use App\Http\Controllers\DashboarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Admin', 'as' => 'admin.', 'middleware' => ['auth']], function() {
    Route::get('/', [DashboarController::class, 'index'])->name('index');

    // advertisements
    Route::group(['as' => 'stock.', 'prefix' => 'stock'], function() {
        Route::get('/', [StockController::class, 'index'])->name('index');
    });
    //test

    // advertisements
    Route::group(['as' => 'setting.', 'prefix' => 'setting'], function() {
        Route::get('/', [SettingController::class, 'index'])->name('index');
        Route::get('roles', [RoleController::class, 'index'])->name('roles');
    });
});
