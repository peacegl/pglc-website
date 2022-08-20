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

// Aire win shipping line  route section 
Route::get('/','ViewController@airewin_shipping_line')->name('airewin_shipping_line');

// service section for Airwin shipping llc
Route::get('airwin_service','AirwinServiceController@index');

// airwin shipping llc view controller
Route::get('airwin_contact_us','ViewController@airwin_contact_us');
Route::post('airwin_sendMessage','ViewController@airwin_sendMessage');
Route::get('airwin_service_detail/{id}','ViewController@airwin_serviceDetail');
Route::get('airwin_about_us','ViewController@airwin_about_us');


//cars
Route::get('cars','ViewController@cars');

