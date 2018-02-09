<?php

Route::get('/', function () {
    return view('front.home');
})->name('index');
Route::get('home', 'HomeController@index');

Auth::routes();


