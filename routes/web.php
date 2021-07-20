<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("index", "ListController@index");
Route::resource("list", "ListController");
Route::resource("map", "MapController");
Route::get("map/all", "MapController@show");
Route::get("record", "RecordController@index");
Route::get("login", "LoginController@index");
Route::get("logout", "LoginController@logout");
Route::post("loginCheck", "LoginController@loginCheck");
Route::post("imgUpload", "RecordController@imgUpload");

Route::get('/', function () {
    return view('welcome');
});
