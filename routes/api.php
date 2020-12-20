<?php

use App\Http\Controllers\Api\Settings\RoleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::group(['as' => 'api.', 'namespace' => 'Api'], function() {

    // advertisements
    Route::group(['as' => 'setting.', 'prefix' => 'setting'], function() {
        Route::post('/roles', [RoleController::class, 'index']);
        Route::post('/roles/create', [RoleController::class, 'create']);
    });

});
