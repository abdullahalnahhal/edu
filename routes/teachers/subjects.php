<?php
Route::get('/', 'SubjectsController@index')->name('teachers.subjects');
Route::get('/new', 'SubjectsController@new')->name('teachers.subjects.new');
Route::get('/{id}', 'SubjectsController@get')->where(['id' => '[0-9]+'])->name('teachers.subjects.view');
Route::get('/{id}/edit', 'SubjectsController@edit')->where(['id' => '[0-9]+'])->name('teachers.subjects.edit');
Route::get('/{id}/delete', 'SubjectsController@delete')->where(['id' => '[0-9]+'])->name('teachers.subjects.delete');
Route::post('/', 'SubjectsController@create')->name('teachers.subjects.create');
Route::put('/{id}', 'SubjectsController@update')->where(['id' => '[0-9]+'])->name('teachers.subjects.update');

