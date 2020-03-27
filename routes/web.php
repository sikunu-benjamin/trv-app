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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('about', 'WelcomeController@about')->name('about');
Route::get('contact', 'WelcomeController@contact')->name('contact');
Route::get('visa', 'WelcomeController@visa')->name('visa');

Route::put('demande-visa', 'Visa\VisaController@store')->name('visa-demande');
Route::get('visa-show/{visa}', 'Visa\VisaController@show')->name('visa.show');
