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
Route::get('/', 'HomeController@index');

Route::post('/insert', 'Controller@insert');

Route::get('/update', 'Controller@update');

Route::get('/update_reset', 'Controller@update_reset');

Route::get('/delete', 'Controller@delete');