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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'Admin\AdminController@index')->name('admin');
Route::resource('contact', 'ContactController');
//Route::resource('api', 'ApitripadvisorController');
Route::get('api/view/{location_id}', 'ApitripadvisorController@find')->name('hotel.view');

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('about', 'WelcomeController@about')->name('about');
Route::get('contact', 'WelcomeController@contact')->name('contact');
Route::get('visa', 'WelcomeController@visa')->name('visa');

Route::get('hebergement', 'HebergementController@index')->name('heberger.index');

Route::put('demande-visa', 'Visa\VisaController@store')->name('visa-demande');
Route::get('visa-show/{visa}', 'Visa\VisaController@show')->name('visa.show');
Route::delete('visa-delete/{visa}', 'Visa\VisaController@destroy')->name('visa.delete');
