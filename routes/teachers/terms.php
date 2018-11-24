<?php
Route::get('/', 'TermsController@index')->name('teachers.terms');
Route::get('/new', 'TermsController@new')->name('teachers.terms.new');
Route::get('/{id}', 'TermsController@get')->where(['id' => '[0-9]+'])->name('teachers.terms.view');
Route::get('/{id}/edit', 'TermsController@edit')->where(['id' => '[0-9]+'])->name('teachers.terms.edit');
Route::get('/{id}/delete', 'TermsController@delete')->where(['id' => '[0-9]+'])->name('teachers.terms.delete');
Route::post('/', 'TermsController@create')->name('teachers.terms.create');
Route::put('/{id}', 'TermsController@update')->where(['id' => '[0-9]+'])->name('teachers.terms.update');

