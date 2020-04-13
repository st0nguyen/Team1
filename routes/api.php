<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('admin/danhmuc/','CategoryController@index');
Route::get('admin/danhmuc/{id}','CategoryController@show');
Route::post('admin/danhmuc','CategoryController@store');
Route::put('admin/danhmuc/{id}','CategoryController@update');
Route::delete('admin/danhmuc/{id}','CategoryController@destroy');