<?php

Route::get('/', function () {
    return view('User.pages.index');
});
Route::get('User/about','MyController@about');
Route::get('User/register','MyController@register');
Route::get('User/tips','MyController@tips');
Route::get('User/request','MyController@request');
Route::get('User/contact','MyController@contact');
Route::get('User/privacy','MyController@privacy');