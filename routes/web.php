<?php


Route::get('/', 'HomeController@index')->name('index');
Route::get('/import', 'HomeController@getImport')->name('import.get');
Route::post('/send', 'EmailController@send')->name('email.send');

Route::group(['prefix' => 'financeiro'], function () {
    Route::get('', 'HomeController@getProdutos')->name('produtos');
    Route::group(['prefix' => 'fluxodecaixa'], function () {
        Route::get('/', 'FluxoDeCaixaController@index')->name('fluodecaixa');
    });
    Route::group(['prefix' => 'extrato'], function () {
        Route::get('/', 'ExtratoController@index')->name('extrato');
    });
    Route::group(['prefix' => 'contasapagar'], function () {
     Route::get('/', 'ContasAPagarController@index')->name('contasapagar');
     Route::get('/create', 'ContasAPagarController@create')->name('contasapagar.create');
     Route::get('/renegotiation', 'ContasAPagarController@renegotiation')->name('contasapagar.renegotiation');
     Route::get('/pageTourRenegotiation', 'ContasAPagarController@pageTourRenegotiation')->name('contasapagar.pageTourRenegotiation');
    });
    
    Route::group(['prefix' => 'contasareceber'], function () {
        Route::get('/', 'ContasAReceberController@index')->name('contasareceber');
        Route::get('/create', 'ContasAReceberController@create')->name('contasareceber.create');
    });
    Route::group(['prefix' => 'relatoriodre'], function () {
        Route::get('/', 'DreController@index')->name('dre');
    });
    Route::group(['prefix' => 'conciliacaobancaria'], function () {
        Route::get('/', 'ConciliacaoController@index')->name('conciliacao');
        Route::get('/create', 'ConciliacaoController@create')->name('concilicao.create');
    });
});

Route::get('/produtos/resolucao/{idResolucao}', 'RejeicoesController@getResolucao')->name('resolucao');

Route::get('/teste', 'HomeController@teste');

Route::group(['prefix' => 'cadastros'], function () {

    Route::group(['prefix' => 'clientes'], function () {
        Route::get('/', 'ClientesController@index')->name('clientes');
        Route::get('/search', 'ClientesController@search')->name('clientes.search');
        Route::get('/create', 'ClientesController@create')->name('clientes.create');
        Route::get('/import', 'ClientesController@import')->name('clientes.import');
        Route::get('/edit/{id}', 'ClientesController@edit')->name('clientes.edit');
    });

    Route::group(['prefix' => 'fornecedores'], function () {
        Route::get('', 'FornecedoresController@index')->name('fornecedores');
        Route::get('/create', 'FornecedoresController@create')->name('fornecedores.create');
        Route::get('/edit/{id}', 'FornecedoresController@edit')->name('fornecedores.edit');
        Route::get('/import', 'FornecedoresController@import')->name('fornecedores.import');
        Route::get('/pagetour', 'FornecedoresController@pageTour')->name('fornecedores.pagetour');
    });

    Route::group(['prefix' => 'condicoesdeparcelamento'], function () {
        Route::get('/', 'CondicoesDeParcelamentoController@index')->name('condicoesdeparcelamento');
        Route::get('/create', 'CondicoesDeParcelamentoController@create')->name('condicoesdeparcelamento.create');
        Route::get('/edit/{id}', 'CondicoesDeParcelamentoController@edit')->name('condicoesdeparcelamento.edit');
    });

    Route::group(['prefix' => 'categoriasfinanceiras'], function () {
        Route::get('/', 'CategoriasFinanceirasController@index')->name('categoriasfinanceiras');
        Route::get('/create', 'CategoriasFinanceirasController@create')->name('categoriasfinanceiras.create');
        Route::get('/edit/{id}', 'CategoriasFinanceirasController@edit')->name('categoriasfinanceiras.edit');
    });

    Route::group(['prefix' => 'formasdepagamento'], function () {    
        Route::get('/', 'FormasDePagamentoController@index')->name('formasdepagamento');
        Route::get('/create', 'FormasDePagamentoController@create')->name('formasdepagamento.create');
        Route::get('/edit/{id}', 'FormasDePagamentoController@edit')->name('formasdepagamento.edit');
    });

    Route::group(['prefix' => 'contasbancarias'], function () {   
        Route::get('/', 'ContasBancariasController@index')->name('contasbancarias');
        Route::get('/create', 'ContasBancariasController@create')->name('contasbancarias.create');
        Route::get('/edit/{id}', 'ContasBancariasController@edit')->name('contasbancarias.edit');
    });
});

Route::get('/chart', 'FluxoDeCaixaController@getChart')->name('chart');

Route::get('/voltar', 'HomeController@voltar')->name('voltar');

Route::get('/suporte', 'HomeController@suporte')->name('suporte');

Route::get('/teste/{$teste}', 'HomeController@teste')->name('teste');

Route::post('autocomplete','SearchController@autoComplete')->name('autocomplete');


