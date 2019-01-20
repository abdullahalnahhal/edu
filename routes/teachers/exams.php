<?php
Route::get('/', 'ExamsController@index')->name('');
Route::get('/new', 'ExamsController@new')->name('.new');
Route::get('/{id}', 'ExamsController@get')->where(['id' => '[0-9]+'])->name('.view');
Route::get('/{id}/edit', 'ExamsController@edit')->where(['id' => '[0-9]+'])->name('.edit');
Route::get('/{id}/delete', 'ExamsController@delete')->where(['id' => '[0-9]+'])->name('.delete');
Route::post('/', 'ExamsController@create')->name('.create');
Route::put('/{id}', 'ExamsController@update')->where(['id' => '[0-9]+'])->name('.update');
?>
