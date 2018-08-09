<?php

Route::get('/', 'MonitecController@index');
Route::get('/login', 'login@index');
Route::get('/duvidas', 'MonitecController@duvidas');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/duvidas/ps', 'MonitecController@ps');

// anos

Route::get('/primeiroano', 'MonitecController@primeiroano');
Route::get('/segundoano', 'MonitecController@segundoano');
Route::get('/terceiroano', 'MonitecController@terceiroano');

// pre conteudo

Route::get('/primeiroano/matematica1ano', 'MonitecController@matematica1ano');
Route::get('/primeiroano/portugues1ano', 'MonitecController@portugues1ano');
Route::get('/segundoano/matematica2ano', 'MonitecController@matematica2ano');
Route::get('/segundoano/portugues2ano', 'MonitecController@portugues2ano');
Route::get('/terceiroano/matematica3ano', 'MonitecController@matematica3ano');
Route::get('/terceiroano/portugues3ano', 'MonitecController@portugues3ano');
Route::get('/terceiroano/portugues3ano', 'MonitecController@portugues3ano');

//conteudo matematica 1 ano
Route::get('/primeiroano/matematica1ano/capitulo', 'MonitecController@matematica1anocapitulo1');
Route::get('/primeiroano/matematica1ano/capitulo2', 'MonitecController@matematica1anocapitulo2');
Route::get('/primeiroano/matematica1ano/capitulo3', 'MonitecController@matematica1anocapitulo3');
Route::get('/primeiroano/matematica1ano/capitulo4', 'MonitecController@matematica1anocapitulo4');
Route::get('/primeiroano/matematica1ano/capitulo5', 'MonitecController@matematica1anocapitulo5');


//conteudo portugues 1 ano
Route::get('/primeiroano/portugues1ano/capitulo', 'MonitecController@portugues1anocapitulo1');
Route::get('/primeiroano/portugues1ano/capitulo2', 'MonitecController@portugues1anocapitulo2');
Route::get('/primeiroano/portugues1ano/capitulo3', 'MonitecController@portugues1anocapitulo3');
Route::get('/primeiroano/portugues1ano/capitulo4', 'MonitecController@portugues1anocapitulo4');
Route::get('/primeiroano/portugues1ano/capitulo5', 'MonitecController@portugues1anocapitulo5');