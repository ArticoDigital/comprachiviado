<?php

Route::get('/', function () {
    return view('front.home');
})->name('index');
Route::get('/salir', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('home', 'HomeController@index');

Auth::routes();


