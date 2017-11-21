<?php


Route::get('/', 'HomeController@getIndex')->name('index');

Route::get('/import', 'HomeController@getImport')->name('import.get');
Route::get('/produtos', 'HomeController@getProdutos')->name('produtos');
Route::get('/produtos/rejeicoes', 'HomeController@getRejeicoes')->name('rejeicoes');
