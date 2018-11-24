<?php
Route::get('/', 'HomeController@index')->name('teachers.index');
Route::get('/units', 'HomeController@index')->name('teachers.units');
Route::get('/types', 'HomeController@index')->name('teachers.question-types');
