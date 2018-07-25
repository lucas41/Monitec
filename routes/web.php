<?php

Route::get('/', 'MonitecController@index');
Route::get('/login', 'login@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

