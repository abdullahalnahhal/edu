<?php
Route::get('/', 'LevelsController@index')->name('teachers.levels');
Route::get('/new', 'LevelsController@new')->name('teachers.levels.new');
Route::get('/{id}', 'LevelsController@get')->where(['id' => '[0-9]+'])->name('teachers.levels.view');
Route::get('{id}/years', 'LevelsController@years')->where(['id' => '[0-9]+'])->name('teachers.levels.years.get');
Route::get('/{id}/edit', 'LevelsController@edit')->where(['id' => '[0-9]+'])->name('teachers.levels.edit');
Route::get('/{id}/delete', 'LevelsController@delete')->where(['id' => '[0-9]+'])->name('teachers.levels.delete');
Route::post('/', 'LevelsController@create')->name('teachers.levels.create');
Route::put('/{id}', 'LevelsController@update')->where(['id' => '[0-9]+'])->name('teachers.levels.update');

