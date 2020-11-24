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

Route::get('/cadastro','adminController\RegistroController@add')->name('cadastro.add');
Route::post('/cadastro','adminController\RegistroController@addAction');




Route::get('/', function () {
    return view('welcome');
});