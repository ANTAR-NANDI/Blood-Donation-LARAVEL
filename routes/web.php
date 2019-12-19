<?php


//User Panel Route



//User Panel Store
Route::post('contactstore','StoreController@contactstore');
Route::post('register','StoreController@store');
//Admin Panel Route
Route::group(['middleware'=>'IsAdmin'], function(){
Route::get('Admin/home','MyController@admin_index');
});

//logout
Route::get('logout','MyController@logout');
//Login Route
Route::post('login', 'StoreController@login');

//MiddleWare

Route::group(['middleware'=>'isloggedin'], function(){
	Route::get('User/request','MyController@request');
	
});

Route::group(['middleware'=>'IsSignedUp'], function(){
	Route::get('/','MyController@home');
	Route::get('User/about','MyController@about');
Route::get('User/register','MyController@register');
Route::get('User/tips','MyController@tips');
Route::get('User/contact','MyController@contact');
Route::get('User/privacy','MyController@privacy');
	
});

//Requestor Route
Route::group(['middleware'=>'IsRequestor'], function(){
Route::get('Requestor/home','RequestorController@requestor_index');
Route::get('Requestor/about','RequestorController@requestor_about');
Route::get('Requestor/request','RequestorController@requestor_request');
Route::get('Requestor/tips','RequestorController@requestor_tips');
Route::get('Requestor/contact','RequestorController@requestor_contact');
Route::get('Requestor/privacy','RequestorController@requestor_privacy');
});

//Donor Route
Route::group(['middleware'=>'IsDonor'], function(){
Route::get('Donor/home','DonorController@donor_index');
Route::get('Donor/about','DonorController@donor_about');
Route::get('Donor/request','DonorController@donor_request');
Route::get('Donor/viewdonation','DonorController@donor_viewrequest');
Route::get('Donor/contact','DonorController@donor_contact');
Route::get('Donor/tips','DonorController@donor_tips');
});

