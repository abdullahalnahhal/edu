<?php
Route::get('/', 'YearsController@index')->name('teachers.years');
Route::get('/new', 'YearsController@new')->name('teachers.years.new');
Route::get('/{id}', 'YearsController@get')->where(['id' => '[0-9]+'])->name('teachers.years.view');
Route::get('{id}/terms', 'YearsController@terms')->where(['id' => '[0-9]+'])->name('teachers.years.terms.get');
Route::get('/{id}/edit', 'YearsController@edit')->where(['id' => '[0-9]+'])->name('teachers.years.edit');
Route::get('/{id}/delete', 'YearsController@delete')->where(['id' => '[0-9]+'])->name('teachers.years.delete');
Route::post('/', 'YearsController@create')->name('teachers.years.create');
Route::put('/{id}', 'YearsController@update')->where(['id' => '[0-9]+'])->name('teachers.years.update');

