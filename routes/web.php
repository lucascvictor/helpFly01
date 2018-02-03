<?php


Route::get('/', 'HomeController@getIndex')->name('index');

Route::get('/import', 'HomeController@getImport')->name('import.get');
Route::get('/financeiro', 'HomeController@getProdutos')->name('produtos');
Route::get('/financeiro/fluxodecaixa', 'FluxoDeCaixaController@index')->name('fluodecaixa');
Route::get('/financeiro/extrato', 'ExtratoController@index')->name('extrato');
Route::get('/financeiro/contasapagar', 'ContasAPagarController@index')->name('contasapagar');
Route::get('/financeiro/contasareceber', 'ContasAReceberController@index')->name('contasareceber');
Route::get('/financeiro/dre', 'DreController@index')->name('dre');
Route::get('/financeiro/conciliacao', 'ConciliacaoController@index')->name('conciliacao');


Route::get('/produtos/resolucao/{idResolucao}', 'RejeicoesController@getResolucao')->name('resolucao');

Route::get('/teste', 'HomeController@teste');

Route::get('/cadastros/clientes', 'ClientesController@index');
Route::get('/cadastros/clientes/new', 'ClientesController@new');

Route::get('/cadastros/fornecedores', 'FornecedoresController@index');
Route::get('/cadastros/fornecedores/new', 'FornecedoresController@new');

Route::get('/cadastros/condicoesdeparcelamento', 'CondicoesDeParcelamentoController@index')->name('condicoesdeparcelamento');
Route::get('/cadastros/categoriasfinanceiras  /', 'CategoriasFinanceirasController@index')->name('categoriasfinanceiras');
Route::get('/cadastros/formasdepagamento', 'FormasDePagamentoController@index')->name('formasdepagamento');
Route::get('/cadastros/contasbancarias', 'ContasBancariasController@index')->name('contasbancarias');


Route::get('/chart', 'FluxoDeCaixaController@getChart')->name('chart');
