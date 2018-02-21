<?php


Route::get('/', 'HomeController@getIndex')->name('index');
Route::get('/import', 'HomeController@getImport')->name('import.get');

Route::group(['prefix' => 'financeiro'], function () {
    Route::get('', 'HomeController@getProdutos')->name('produtos');
    Route::get('/fluxodecaixa', 'FluxoDeCaixaController@index')->name('fluodecaixa');
    Route::get('/extrato', 'ExtratoController@index')->name('extrato');
    Route::get('/contasapagar', 'ContasAPagarController@index')->name('contasapagar');
    Route::get('/contasareceber', 'ContasAReceberController@index')->name('contasareceber');
    Route::get('/dre', 'DreController@index')->name('dre');
    Route::get('/conciliacaobancaria', 'ConciliacaoController@index')->name('conciliacao');
});

Route::get('/produtos/resolucao/{idResolucao}', 'RejeicoesController@getResolucao')->name('resolucao');

Route::get('/teste', 'HomeController@teste');

Route::group(['prefix' => 'cadastros'], function () {

    Route::group(['prefix' => 'clientes'], function () {
        Route::get('/', 'ClientesController@index')->name('clientes');
        Route::get('/create', 'ClientesController@create')->name('clientes.create');
    });

    Route::group(['prefix' => 'fornecedores'], function () {
        Route::get('', 'FornecedoresController@index')->name('fornecedores');
        Route::get('/create', 'FornecedoresController@create')->name('fornecedores.create');
    });

    Route::group(['prefix' => 'condicoesdeparcelamento'], function () {
        Route::get('/', 'CondicoesDeParcelamentoController@index')->name('condicoesdeparcelamento');
        Route::get('/create', 'CondicoesDeParcelamentoController@create')->name('condicoesdeparcelamento.create');
    });

    Route::group(['prefix' => 'categoriasfinanceiras'], function () {
        Route::get('/', 'CategoriasFinanceirasController@index')->name('categoriasfinanceiras');
        Route::get('/create', 'CategoriasFinanceirasController@create')->name('categoriasfinanceiras.create');
    });

    Route::group(['prefix' => 'formasdepagamento'], function () {    
        Route::get('/', 'FormasDePagamentoController@index')->name('formasdepagamento');
        Route::get('/create', 'FormasDePagamentoController@create')->name('formasdepagamento.create');
    });

    Route::group(['prefix' => 'contasbancarias'], function () {   
        Route::get('/', 'ContasBancariasController@index')->name('contasbancarias');
        Route::get('/create', 'ContasBancariasController@create')->name('contasbancarias.create');
    });
});

Route::get('/chart', 'FluxoDeCaixaController@getChart')->name('chart');



