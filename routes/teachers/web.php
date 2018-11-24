<?php
Route::get('/', 'HomeController@index')->name('teachers.index');
Route::get('/types', 'HomeController@index')->name('teachers.question-types');
