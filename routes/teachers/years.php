<?php
Route::get('/', 'YearsController@index')->name('');
Route::get('/new', 'YearsController@new')->name('.new');
Route::get('/{id}', 'YearsController@get')->where(['id' => '[0-9]+'])->name('.view');
Route::get('{id}/terms', 'YearsController@terms')->where(['id' => '[0-9]+'])->name('.terms.get');
Route::get('/{id}/edit', 'YearsController@edit')->where(['id' => '[0-9]+'])->name('.edit');
Route::get('/{id}/delete', 'YearsController@delete')->where(['id' => '[0-9]+'])->name('.delete');
Route::post('/', 'YearsController@create')->name('.create');
Route::put('/{id}', 'YearsController@update')->where(['id' => '[0-9]+'])->name('.update');

