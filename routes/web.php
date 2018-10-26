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
Route::get('/', 'PagesController@getHome');
Route::get('/timetable', 'PagesController@getTimeTable');
Route::get('/registration', 'PagesController@getRegistration');

Route::get('/admin', 'RegistrationController@getRegistrations');

Route::post('/registration/submit', 'RegistrationController@submit');
