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

Route::get('/', function () {
    return view('welcome');
});


Route::get('ejercicio1/{cadena}', 'PruebaController@getEjercicio1')->name('ejercicio1');
Route::get('ejercicio1/', 'PruebaController@index')->name('index2');
Route::get('ejercicio1', 'PruebaController@index')->name('index');
