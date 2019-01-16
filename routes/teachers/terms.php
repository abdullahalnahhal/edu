<?php
Route::get('/', 'TermsController@index')->name('');
Route::get('/new', 'TermsController@new')->name('.new');
Route::get('/{id}', 'TermsController@get')->where(['id' => '[0-9]+'])->name('.view');
Route::get('{id}/subjects', 'TermsController@subjects')->where(['id' => '[0-9]+'])->name('.subjects.get');
Route::get('/{id}/edit', 'TermsController@edit')->where(['id' => '[0-9]+'])->name('.edit');
Route::get('/{id}/delete', 'TermsController@delete')->where(['id' => '[0-9]+'])->name('.delete');
Route::post('/', 'TermsController@create')->name('.create');
Route::put('/{id}', 'TermsController@update')->where(['id' => '[0-9]+'])->name('.update');

