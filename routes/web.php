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
        Route::get('/', 'Financeiro\BillsToReceiveController@index')->name('contasareceber');
        Route::get('/create', 'Financeiro\BillsToReceiveController@create')->name('contasareceber.create');
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

    //Controle de rotas para cadastros
    Route::group(['prefix' => 'cadastros'], function () {
        Route::get('/produtos', 'Cadastros\ProdutosController@index')->name('produtos');  
        Route::get('/grupodeprodutos', 'Cadastros\GrupoDeProdutosController@index')->name('grupodeprodutos');
        Route::get('/servicos', 'Cadastros\ServicosController@index')->name('servicos');  
        Route::get('/substituicaotributaria', 'Cadastros\SubstituicaoTributariaController@index')->name('substituicaotributaria');  
        Route::get('/grupotributariosaida', 'Cadastros\GrupoTributarioSaidaController@index')->name('grupotributariosaida');
        Route::get('/transportadoras', 'Cadastros\TransportadorasController@index')->name('transportadoras');    

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

        Route::group(['prefix' => 'formasdepagamento'], function () {    
            Route::get('/', 'Cadastros\FormasDePagamentoController@index')->name('formasdepagamento');
            Route::get('/create', 'Cadastros\FormasDePagamentoController@create')->name('formasdepagamento.create');
            Route::get('/edit/{id}', 'Cadastros\FormasDePagamentoController@edit')->name('formasdepagamento.edit');
        });
    });
});

//Modulo de Estoque

Route::group(['prefix' => 'estoque'], function () {
    Route::get('', 'Estoque\VisaoGeralController@index')->name('faturamento');

    Route::get('/visaogeral', 'Estoque\VisaoGeralController@index')->name('visaogeral');
    Route::get('/ajustemanual', 'Estoque\AjusteManualController@index')->name('ajustemanual');
    Route::get('/posicaoatual', 'Estoque\PosicaoAtualController@index')->name('posicaoatual');
    Route::get('/inventario', 'Estoque\InventarioController@index')->name('inventario');

     //Controle de rotas para cadastros
     Route::group(['prefix' => 'cadastros'], function () {
            Route::get('/produtos', 'Cadastros\ProdutosController@index')->name('produtos');  
    });
});

//Modulo de Compras

Route::group(['prefix' => 'compras'], function () {
    Route::get('', 'Compras\ComprasController@index')->name('faturamento');

    Route::group(['prefix' => 'cadastros'], function () {
        Route::get('/produtos', 'Cadastros\ProdutosController@index')->name('produtos');  

        Route::get('/grupodeprodutos', 'Cadastros\GrupoDeProdutosController@index')->name('grupodeprodutos');  
    
    });

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
