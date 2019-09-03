<?php


Route::get('/', 'HomeController@index');

Route::post('/save','HomeController@Save');

Route::get('/get','HomeController@Pull');

