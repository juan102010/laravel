<?php
Route::resource('tickest','WelcomeController');
Route::get('/','WelcomeController@index');
Route::POST('/update','WelcomeController@update');
Route::get('/updateje/{id}','WelcomeController@edit');
Route::POST('/store','WelcomeController@store');
Route::get('/destroy/{id}','WelcomeController@destroy');