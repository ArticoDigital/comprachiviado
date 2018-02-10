<?php
route::get('/','HomeController@dashboard')->name('dashboard');

Route::resource('banner', 'BannerController');
Route::resource('category', 'CategoryController');
Route::resource('subcategory', 'SubcategoryController');
Route::resource('company', 'CompanyController');
Route::resource('coupon', 'CouponController');
Route::resource('product', 'FalseProductController');
Route::resource('promo', 'PromoController');
Route::resource('special', 'SpecialController');