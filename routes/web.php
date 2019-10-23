<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('index','MyController@home');
Route::get('alldonorlist','MyController@alldonorlist');
Route::get('bank','MyController@bank');
Route::get('tips','MyController@tips');
Route::get('signin','MyController@signin');