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

Route::get('/' , 'ServiceController@index')->name('service.index');

Route::get('service/create', 'ServiceController@create')->name('service.create');
Route::post('service/create', 'ServiceController@store');

Route::get('service/edit/{service_id}', 'ServiceController@edit')->name('service.edit');
Route::post('service/edit/{service_id}', 'ServiceController@update');
