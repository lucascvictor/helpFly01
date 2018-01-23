<?php


Route::get('/', 'HomeController@getIndex')->name('index');

Route::get('/import', 'HomeController@getImport')->name('import.get');
Route::get('/financeiro', 'HomeController@getProdutos')->name('produtos');
Route::get('/financeiro/fluxodecaixa', 'FluxoCaixaController@getIndex')->name('rejeicoes');
Route::get('/financeiro/extrato', 'ExtratoController@getIndex')->name('rejeicoes');
Route::get('/financeiro/contasapagar', 'ContasAPagarController@getIndex')->name('rejeicoes');
Route::get('/financeiro/contasareceber', 'ContasAReceber@getIndex')->name('rejeicoes');
Route::get('/financeiro/dre', 'DREController@getIndex')->name('rejeicoes');
Route::get('/financeiro/conciliacao', 'ConciliacaoController@getIndex')->name('rejeicoes');


Route::get('/produtos/resolucao/{idResolucao}', 'RejeicoesController@getResolucao')->name('resolucao');

Route::get('/teste', 'HomeController@teste');

Route::get('/cadastros/clientes', 'ClientesController@index');
Route::get('/cadastros/clientes/new', 'ClientesController@new');

Route::get('/cadastros/fornecedores', 'FornecedoresController@index');
Route::get('/cadastros/fornecedores/new', 'FornecedoresController@new');

Route::get('/cadastros/condicaodeparcelamento', 'CondicaoDeParcelamentoController@index');
Route::get('/cadastros/categoriaFinanceira/', 'CategoriaFinanceiraController@new');
Route::get('/cadastros/formasdepagamento', 'FormasDePagamentoController@getRejeicoes')->name('rejeicoes');
Route::get('/cadastros/contasbancarias', 'ContasBancariasController@getRejeicoes')->name('rejeicoes');
