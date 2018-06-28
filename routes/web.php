<?php

Route::get('/', 'MonitecController@index');
Route::get('/login', 'login@index');
Auth::routes();





