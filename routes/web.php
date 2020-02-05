<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('{anypath}','HomeController@index')->where( 'path', '([A-z\d-\/_.]+)? ');
