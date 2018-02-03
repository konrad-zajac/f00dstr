<?php

Route::get('/', 'MainController@dom');
Route::get('/relations', 'MainController@relacje');
Route::resource('market', 'MarketController');
Route::resource('farm', 'FarmController');