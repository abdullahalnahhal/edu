<?php
Route::get('/', 'UnitsController@index')->name('');
Route::get('/new', 'UnitsController@new')->name('.new');
Route::get('/{id}', 'UnitsController@get')->where(['id' => '[0-9]+'])->name('.view');
Route::get('/{id}/edit', 'UnitsController@edit')->where(['id' => '[0-9]+'])->name('.edit');
Route::get('/{id}/delete', 'UnitsController@delete')->where(['id' => '[0-9]+'])->name('.delete');
Route::post('/', 'UnitsController@create')->name('.create');
Route::put('/{id}', 'UnitsController@update')->where(['id' => '[0-9]+'])->name('.update');