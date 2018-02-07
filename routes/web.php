<?php
Route::get('/', 'MainController@home');

Route::get('/other/about', 'MainController@about');
Route::get('/other/contact', 'MainController@contact');
Route::resource('point', 'PointController');
Route::resource('user', 'UserController');
Route::post('rating/store', 'RatingController@store');
Route::resource('rating', 'RatingController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/greet', 'MainController@greet');
