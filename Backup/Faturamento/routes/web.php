<?php


Route::get('/', 'HomeController@getIndex')->name('index');

Route::get('/import', 'HomeController@getImport')->name('import.get');
Route::get('/produtos', 'HomeController@getProdutos')->name('produtos');
Route::get('/produtos/rejeicoes', 'RejeicoesController@getRejeicoes')->name('rejeicoes');

Route::get('/produtos/resolucao/{idResolucao}', 'RejeicoesController@getResolucao')->name('resolucao');

Route::get('/teste', 'HomeController@teste');

Route::get('/cadastros/clientes', 'ClientesController@index');
Route::get('/cadastros/clientes/new', 'ClientesController@new');

Route::get('/cadastros/fornecedores', 'FornecedoresController@index');
Route::get('/cadastros/fornecedores/new', 'FornecedoresController@new');

Route::get('/cadastros/grupostributarios', 'GruposTributariosController@index');
Route::get('/cadastros/grupostributarios/new', 'GruposTributariosController@new');
