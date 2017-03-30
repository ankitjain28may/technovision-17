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

Route::get('/', 'HomeController@about');

Route::get('patient/login', 'HomeController@patientLogin');
Route::get('doctor/login', 'HomeController@doctorLogin');
Route::resource('patient', 'Patient\PatientController');
Route::resource('doctor', 'Doctor\DoctorController');
Route::resource('portal', 'Portal\PortalController');
Route::resource('messages', 'Portal\MessageController');
Route::get('/dashboard', 'Portal\PortalController@index');

// Auth::routes();

Route::get('/home', 'HomeController@index');
