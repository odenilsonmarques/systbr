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

Route::get('/cadastro','adminController\RegistroController@add')->name('cadastro.add')->middleware('auth');
Route::post('/cadastro','adminController\RegistroController@addAction');

Route::get('/lista','adminController\RegistroController@list')->name('lista.list')->middleware('auth');

Route::get('/minhaLista','adminController\RegistroController@myList')->name('minhaLista.myList')->middleware('auth');
Route::get('/deletaMinhaPublicacao/{id}','adminController\RegistroController@del')->name('deletaMinhaPublicacao.del')->middleware('auth');

Route::get('/editaMinhaLista/{id}','adminController\RegistroController@edit')->name('editaMinhaLista.edit')->middleware('auth');
Route::post('/editaMinhaLista/{id}','adminController\RegistroController@editAction');


//Route::get('/home','adminController\HomeController@index')->name('home.index');

Auth::routes();

//rota chmamada apos a autenticação
//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',function(){
    return view('adminViews.home');
});

