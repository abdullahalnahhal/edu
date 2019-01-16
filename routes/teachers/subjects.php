<?php
Route::get('/', 'SubjectsController@index')->name('');
Route::get('/new', 'SubjectsController@new')->name('.new');
Route::get('/{id}', 'SubjectsController@get')->where(['id' => '[0-9]+'])->name('.view');
Route::get('{id}/units', 'SubjectsController@units')->where(['id' => '[0-9]+'])->name('.units.get');
Route::get('/{id}/edit', 'SubjectsController@edit')->where(['id' => '[0-9]+'])->name('.edit');
Route::get('/{id}/delete', 'SubjectsController@delete')->where(['id' => '[0-9]+'])->name('.delete');
Route::post('/', 'SubjectsController@create')->name('.create');
Route::put('/{id}', 'SubjectsController@update')->where(['id' => '[0-9]+'])->name('.update');

