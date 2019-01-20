<?php
Route::get('/', 'QuestionsController@index')->name('');
Route::get('/new', 'QuestionsController@new')->name('.new');
Route::get('/{id}', 'QuestionsController@get')->where(['id' => '[0-9]+'])->name('.view');
Route::get('/{id}/edit', 'QuestionsController@edit')->where(['id' => '[0-9]+'])->name('.edit');
Route::get('/{id}/delete', 'QuestionsController@delete')->where(['id' => '[0-9]+'])->name('.delete');
Route::post('/', 'QuestionsController@create')->name('.create');
Route::put('/{id}', 'QuestionsController@update')->where(['id' => '[0-9]+'])->name('.update');
?>
