<?php
Route::get('/', 'GroupsController@index')->name('');
Route::get('/new', 'GroupsController@new')->name('.new');
Route::get('/{id}', 'GroupsController@get')->where(['id' => '[0-9]+'])->name('.view');
Route::get('/{id}/edit', 'GroupsController@edit')->where(['id' => '[0-9]+'])->name('.edit');
Route::get('/{id}/delete', 'GroupsController@delete')->where(['id' => '[0-9]+'])->name('.delete');
Route::post('/', 'GroupsController@create')->name('.create');
Route::put('/{id}', 'GroupsController@update')->where(['id' => '[0-9]+'])->name('.update');

