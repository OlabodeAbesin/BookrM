<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//Route::DELETE("/adminLogout/{id}",  "AdminController@destroy");
Route::DELETE("/bookings/{id}",  "MybookingsController@destroy");
Route::POST('/create_bookings', 'BookingsController@store');
//Route::POST('/create_booking', 'AdminController@store');
Route::get('/viewusers', 'AdminController@show');
//Route::get('/welcome', 'UserdashboardController@index');
//Route::get('/teambookings/{tname}', 'MybookingsController@show');
Route::get('/mybookings/{tname}', 'MybookingsController@index');
Route::get('/teambookings/{tname}', 'MybookingsController@index');
Route::get('/reschedule/{id}/edit', 'MybookingsController@edit');
Route::get('/teamleadreschedule/{id}/edit', 'MybookingsController@edit');
Route::put('/adminreschedule/{id}', 'MybookingsController@update');
// Route::put('/teamleadreschedule/{id}', 'MybookingsController@update');
Route::put('/reschedule/{id}', 'MybookingsController@update');
//Route::get('/adminlogin', 'AdminController@index');
// Route::get('/admindashboard', 'AdminController@dashboard');
//Route::get('/viewusers', 'AdminController@users');
//Route::get('/teamlead', 'TeamleadController@index');
Route::get('/teammembers/{tname}', 'MybookingsController@members');

Auth::routes();

Route::get('/', 'HomeController@index');
//Route::get('/welcome', 'HomeController@index');