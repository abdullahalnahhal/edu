<?php
Route::get('/', 'GroupsController@index')->name('teachers.groups');
Route::get('/new', 'GroupsController@new')->name('teachers.groups.new');
Route::get('/{id}', 'GroupsController@get')->where(['id' => '[0-9]+'])->name('teachers.groups.view');
Route::get('/{id}/edit', 'GroupsController@edit')->where(['id' => '[0-9]+'])->name('teachers.groups.edit');
Route::get('/{id}/delete', 'GroupsController@delete')->where(['id' => '[0-9]+'])->name('teachers.groups.delete');
Route::post('/', 'GroupsController@create')->name('teachers.groups.create');
Route::put('/{id}', 'GroupsController@update')->where(['id' => '[0-9]+'])->name('teachers.groups.update');

