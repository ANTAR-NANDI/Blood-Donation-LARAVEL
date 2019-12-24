<?php
//Logout For Everyone
Route::get('logout','MyController@logout');
//Login Route
Route::post('login', 'StoreController@login');


//User Panel Route
Route::post('contactstore','StoreController@contactstore');
Route::post('register','StoreController@store');

//User Panel Middleware
Route::group(['middleware'=>'isloggedin'], function(){
	Route::get('User/request','MyController@request');
	
});
Route::group(['middleware'=>'IsSignedUp'], function(){
	Route::get('/','UserController@home');
	Route::get('User/about','UserController@about');
Route::get('User/register','UserController@register');
Route::get('User/tips','UserController@tips');
Route::get('User/contact','UserController@contact');
Route::get('User/privacy','UserController@privacy');
Route::get('User/search-blood', 'UserController@search');
Route::post('User/search_blood', 'UserController@search_blood');
	
});


//Admin Panel Route
Route::group(['middleware'=>'IsAdmin'], function(){
Route::get('Admin/home','AdminController@admin_index');
Route::get('Admin/alldonorlist','AdminController@alldonor');
Route::get('Admin/message','AdminController@message');

});







//Requestor Route
Route::group(['middleware'=>'IsRequestor'], function(){
Route::get('Requestor/home','RequestorController@requestor_index');
Route::get('Requestor/about','RequestorController@requestor_about');
Route::get('Requestor/request','RequestorController@requestor_request');
Route::get('Requestor/tips','RequestorController@requestor_tips');
Route::get('Requestor/contact','RequestorController@requestor_contact');
Route::get('Requestor/privacy','RequestorController@requestor_privacy');
Route::post('Requestor/request_blood_store', 'RequestorController@request_blood_store');
Route::get('Requestor/search-blood', 'RequestorController@search');
Route::post('Requestor/search_blood', 'RequestorController@search_blood');
Route::get('Requestor/yourrequest', 'RequestorController@your_request');
Route::get('Requestor/editrequest/{id}','RequestorController@update');
Route::post('Requestor/updaterequest/{id}','RequestorController@update_data');
Route::get('Requestor/delete/{id}','RequestorController@delete');
});



















//Donor Route
Route::group(['middleware'=>'IsDonor'], function(){
Route::get('Donor/home','DonorController@donor_index');
Route::get('Donor/about','DonorController@donor_about');
Route::get('Donor/adddonation','DonorController@adddonation');
Route::post('Donor/donation_store','DonorController@donation_store');
Route::get('Donor/request','DonorController@donor_request');
Route::get('Donor/donation','DonorController@donor_donation');
Route::get('Donor/contact','DonorController@donor_contact');
Route::get('Donor/tips','DonorController@donor_tips');
Route::get('Donor/search-blood', 'DonorController@search');
Route::post('Donor/search_blood', 'DonorController@search_blood');
Route::post('Donor/request_blood_store', 'DonorController@request_blood_store');
Route::get('Donor/yourrequest', 'DonorController@your_request');
Route::get('Donor/editrequest/{id}','DonorController@update');
Route::post('Donor/updaterequest/{id}','DonorController@update_data');
Route::get('Donor/delete/{id}','DonorController@delete');



});

