<?php


Route::get('/', 'HomeController@index')->name('index');
Route::get('/import', 'HomeController@getImport')->name('import.get');
Route::post('/send', 'EmailController@send')->name('email.send');


//Controle de rotas da parte finaceira
Route::group(['prefix' => 'financeiro'], function () {
    Route::get('', 'Financeiro\FluxoDeCaixaController@index')->name('fluodecaixa');

    Route::group(['prefix' => 'fluxodecaixa'], function () {
        Route::get('/', 'Financeiro\FluxoDeCaixaController@index')->name('fluodecaixa');
        Route::get('/week', 'Financeiro\FluxoDeCaixaController@getByWeek')->name('fluodecaixa.week');
        Route::get('/day', 'Financeiro\FluxoDeCaixaController@getByDay')->name('fluodecaixa.day');
    });
    Route::group(['prefix' => 'extrato'], function () {
        Route::get('/', 'Financeiro\ExtratoController@index')->name('extrato');
        Route::get('/{bank}', 'Financeiro\ExtratoController@billsByBank')->name('extrato.billsByBank');
    });
    Route::group(['prefix' => 'contasapagar'], function () {
     Route::get('/', 'Financeiro\BillsToPayController@index')->name('contasapagar');
     Route::get('/create', 'Financeiro\BillsToPayController@create')->name('contasapagar.create');
     Route::get('/renegotiation', 'Financeiro\BillsToPayController@renegotiation')->name('contasapagar.renegotiation');
     Route::get('/pagetourrenegotiation', 'Financeiro\BillsToPayController@pageTourRenegotiation')->name('contasapagar.pageTourRenegotiation');
    });
    
    Route::group(['prefix' => 'contasareceber'], function () {
        Route::get('/', 'Financeiro\BillsToreceiveController@index')->name('contasareceber');
        Route::get('/create', 'Financeiro\BillsToreceiveController@create')->name('contasareceber.create');
    });
    Route::group(['prefix' => 'relatoriodre'], function () {
        Route::get('/', 'Financeiro\DreController@index')->name('dre');
    });
    Route::group(['prefix' => 'conciliacaobancaria'], function () {
        Route::get('/', 'Financeiro\ConciliacaoController@index')->name('conciliacao');
        Route::get('/create', 'Financeiro\ConciliacaoController@create')->name('concilicao.create');
    });


    //Controle de rotas para cadastros
    Route::group(['prefix' => 'cadastros'], function () {

        Route::group(['prefix' => 'clientes'], function () {
            Route::get('/', 'Cadastros\ClientesController@index')->name('clientes');
            Route::get('/search', 'Cadastros\ClientesController@search')->name('clientes.search');
            Route::get('/create', 'Cadastros\ClientesController@create')->name('clientes.create');
            Route::get('/import', 'Cadastros\ClientesController@import')->name('clientes.import');
            Route::get('/edit/{id}', 'Cadastros\ClientesController@edit')->name('clientes.edit');
        });

        Route::group(['prefix' => 'fornecedores'], function () {
            Route::get('', 'Cadastros\FornecedoresController@index')->name('fornecedores');
            Route::get('/create', 'Cadastros\FornecedoresController@create')->name('fornecedores.create');
            Route::get('/edit/{id}', 'Cadastros\FornecedoresController@edit')->name('fornecedores.edit');
            Route::get('/import', 'Cadastros\FornecedoresController@import')->name('fornecedores.import');
            Route::get('/pagetour', 'Cadastros\FornecedoresController@pageTour')->name('fornecedores.pagetour');
        });

        Route::group(['prefix' => 'condicoesdeparcelamento'], function () {
            Route::get('/', 'Cadastros\CondicoesDeParcelamentoController@index')->name('condicoesdeparcelamento');
            Route::get('/create', 'Cadastros\CondicoesDeParcelamentoController@create')->name('condicoesdeparcelamento.create');
            Route::get('/edit/{id}', 'Cadastros\CondicoesDeParcelamentoController@edit')->name('condicoesdeparcelamento.edit');
        });

        Route::group(['prefix' => 'categoriasfinanceiras'], function () {
            Route::get('/', 'Cadastros\CategoriasFinanceirasController@index')->name('categoriasfinanceiras');
            Route::get('/create', 'Cadastros\CategoriasFinanceirasController@create')->name('categoriasfinanceiras.create');
            Route::get('/edit/{id}', 'Cadastros\CategoriasFinanceirasController@edit')->name('categoriasfinanceiras.edit');
        });

        Route::group(['prefix' => 'formasdepagamento'], function () {    
            Route::get('/', 'Cadastros\FormasDePagamentoController@index')->name('formasdepagamento');
            Route::get('/create', 'Cadastros\FormasDePagamentoController@create')->name('formasdepagamento.create');
            Route::get('/edit/{id}', 'Cadastros\FormasDePagamentoController@edit')->name('formasdepagamento.edit');
        });

        Route::group(['prefix' => 'contasbancarias'], function () {   
            Route::get('/', 'Cadastros\ContasBancariasController@index')->name('contasbancarias');
            Route::get('/create', 'Cadastros\ContasBancariasController@create')->name('contasbancarias.create');
            Route::get('/edit/{id}', 'Cadastros\ContasBancariasController@edit')->name('contasbancarias.edit');
        });
    });
});

//Modulo de Faturamento

Route::group(['prefix' => 'faturamento'], function () {
    Route::get('', 'Faturamento\FaturamentoController@index')->name('faturamento');
});

//Modulo de Estoque

Route::group(['prefix' => 'estoque'], function () {
    Route::get('', 'Estoque\EstoqueController@index')->name('faturamento');
<<<<<<< HEAD
=======

    Route::get('/visaogeral', 'Estoque\VisaoGeralController@index')->name('visaogeral');
>>>>>>> bbf247f2555fe62f6d81105a51a2d5de2e0a6acd
});

//Modulo de Compras

Route::group(['prefix' => 'compras'], function () {
    Route::get('', 'Compras\ComprasController@index')->name('faturamento');
});

//Abaixo rotas para teste

Route::get('/chart', 'FluxoDeCaixaController@getChart')->name('chart');
Route::get('/voltar', 'HomeController@voltar')->name('voltar');
Route::get('/suporte', 'HomeController@suporte')->name('suporte');
Route::get('/teste/{$teste}', 'HomeController@teste')->name('teste');
Route::get('/teste', 'HomeController@teste');

//Abaixo controle de rotas para login em área do admin(criação de posts) e retorno dos posts

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'Controller@dashboard');
    Route::get('/dashboard/posts/{id}/export', 'Api\PostController@export');
    Route::any('/dashboard/{any}', 'Controller@dashboard')->where('any', '.*');
});


//Rotas utilizadas anteriormente em faturamento

Route::get('/produtos/resolucao/{idResolucao}', 'RejeicoesController@getResolucao')->name('resolucao');
