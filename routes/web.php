<?php

Route::get('/', 'MonitecController@index');
Route::get('/login', 'login@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/primeiroano', 'MonitecController@primeiroano');
Route::get('/segundoano', 'MonitecController@segundoano');
Route::get('/terceiroano', 'MonitecController@terceiroano');