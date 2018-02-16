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
    Route::get('/conciliacao', 'ConciliacaoController@index')->name('conciliacao');
});

Route::get('/produtos/resolucao/{idResolucao}', 'RejeicoesController@getResolucao')->name('resolucao');

Route::get('/teste', 'HomeController@teste');

Route::group(['prefix' => 'cadastros'], function () {

    Route::group(['prefix' => 'clientes'], function () {
        Route::get('/', 'ClientesController@index')->name('clientes');
        Route::get('/new', 'ClientesController@new')->name('clientes.new');
    });

    Route::group(['prefix' => 'fornecedores'], function () {
        Route::get('', 'FornecedoresController@index')->name('fornecedores');
        Route::get('/new', 'FornecedoresController@new')->name('fornecedores.new');
    });

    Route::group(['prefix' => 'condicoesdeparcelamento'], function () {
        Route::get('/', 'CondicoesDeParcelamentoController@index')->name('condicoesdeparcelamento');
        Route::get('/new', 'CondicoesDeParcelamentoController@new')->name('condicoesdeparcelamento.new');
    });

    Route::group(['prefix' => 'categoriasfinanceiras'], function () {
        Route::get('/', 'CategoriasFinanceirasController@index')->name('categoriasfinanceiras');
        Route::get('/new', 'CategoriasFinanceirasController@new')->name('categoriasfinanceiras.new');
    });

    Route::group(['prefix' => 'formasdepagamento'], function () {    
        Route::get('/', 'FormasDePagamentoController@index')->name('formasdepagamento');
        Route::get('/new', 'FormasDePagamentoController@index')->name('formasdepagamento.new');
    });

    Route::group(['prefix' => 'contasbancarias'], function () {   
        Route::get('/', 'ContasBancariasController@index')->name('contasbancarias');
        Route::get('/new', 'ContasBancariasController@new')->name('contasbancarias.new');
    });
});

Route::get('/chart', 'FluxoDeCaixaController@getChart')->name('chart');



