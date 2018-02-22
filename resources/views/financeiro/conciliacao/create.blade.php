<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Fly01 Financeiro</title>
      <base href="/">
      <link rel="icon" type="image/ico" href="/favicon.png">
      <link type="text/css" rel="stylesheet" href="https://cdnfly01.azureedge.net/fly/1.0.1/fly01ui.css">
      <style type="text/css">span.im-caret {
         -webkit-animation: 1s blink step-end infinite;
         animation: 1s blink step-end infinite;
         }
         @keyframes blink {
         from, to {
         border-right-color: black;
         }
         50% {
         border-right-color: transparent;
         }
         }
         @-webkit-keyframes blink {
         from, to {
         border-right-color: black;
         }
         50% {
         border-right-color: transparent;
         }
         }
         span.im-static {
         color: grey;
         }
         div.im-colormask {
         display: inline-block;
         border-style: inset;
         border-width: 2px;
         -webkit-appearance: textfield;
         -moz-appearance: textfield;
         appearance: textfield;
         }
         div.im-colormask > input {
         position: absolute;
         display: inline-block;
         background-color: transparent;
         color: transparent;
         -webkit-appearance: caret;
         -moz-appearance: caret;
         appearance: caret;
         border-style: none;
         left: 0; /*calculated*/
         }
         div.im-colormask > input:focus {
         outline: none;
         }
         div.im-colormask > input::-moz-selection{
         background: none;
         }
         div.im-colormask > input::selection{
         background: none;
         }
         div.im-colormask > input::-moz-selection{
         background: none;
         }
         div.im-colormask > div {
         color: black;
         display: inline-block;
         width: 100px; /*calculated*/
         }
      </style>
      <style type="text/css">/* Chart.js */
         @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
      </style>
      <style media="print" class="jx_ui_StyleSheet" __jx__id="___$_2" type="text/css">.zopim { display: none !important }</style>
   </head>
   <body class="loaded">
      <div class="zopim" __jx__id="___$_99 ___$_99" data-test-id="ChatWidgetButton" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; padding: 0px; border: 0px; background: transparent; overflow: hidden; position: fixed; z-index: 16000002; width: 180px; height: 30px; right: 10px; bottom: 0px; display: none;"><iframe frameborder="0" src="about:blank" style="background-color: transparent; vertical-align: text-bottom; position: relative; width: 100%; height: 100%; min-width: 100%; min-height: 100%; max-width: 100%; max-height: 100%; margin: 0px; overflow: hidden; display: block;" data-test-id="ChatWidgetButton-iframe"></iframe></div>
      <div class="zopim" __jx__id="___$_4 ___$_4" data-test-id="ChatWidgetWindow" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; padding: 0px; border: 0px; background: transparent; overflow: hidden; position: fixed; z-index: 16000001; right: 15px; bottom: 0px; border-top-left-radius: 5px; border-top-right-radius: 5px; display: none; width: 350px; height: 450px; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 3px 2px;"><iframe frameborder="0" src="about:blank" data-test-id="ChatWidgetWindow-iframe" style="background-color: transparent; vertical-align: text-bottom; position: relative; width: 100%; height: 100%; min-width: 100%; min-height: 100%; max-width: 100%; max-height: 100%; margin: 0px; overflow: hidden; display: block;"></iframe></div>
      <header>
         <form action="Account/LogOff" id="logoutForm" method="post"></form>
         <nav class="top-nav z-depth-0">
            <div class="container">
               <div class="nav-wrapper">
                  <a id="page-title" class="page-title">Financeiro</a>
                  <ul class="right">
                     <li>
                        <a class="dropdown-button" href="#!" data-activates="user-apps" data-beloworigin="true" data-alignment="right"><i class="material-icons right">view_module</i></a>
                        <ul id="user-apps" class="dropdown-content">
                           <li id="appList">
                              <a class="quick-btn" href="http://novofaturamento.fly01.com.br" target="_blank">
                                 <div class="icon-apps" style="background-image: url(https://cdnfly01.azureedge.net/img/faturamento.png)"></div>
                                 <span class="label-app">Faturamento</span>
                              </a>
                              <a class="quick-btn" href="http://novoestoque.fly01.com.br" target="_blank">
                                 <div class="icon-apps" style="background-image: url(https://cdnfly01.azureedge.net/img/estoque.png)"></div>
                                 <span class="label-app">Estoque</span>
                              </a>
                              <a class="quick-btn" href="http://novocompras.fly01.com.br" target="_blank">
                                 <div class="icon-apps" style="background-image: url(https://cdnfly01.azureedge.net/img/compras.png)"></div>
                                 <span class="label-app">Compras</span>
                              </a>
                              <a class="quick-btn" href="http://apps.fly01.com.br/p/app-saude" target="_blank">
                                 <div class="icon-apps" style="background-image: url(https://cdnfly01.azureedge.net/img/saude.png)"></div>
                                 <span class="label-app">Saúde</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <a class="dropdown-button" href="#!" data-activates="user-menu" data-beloworigin="true" data-alignment="right"><i class="material-icons right">perm_identity</i></a>
                        <ul id="user-menu" class="dropdown-content">
                           <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Empresa/Form&quot;,&quot;01&quot;)">Empresa</a></li>
                           <li class="divider"></li>
                           <li class=""><a href="/Account/Logoff">Sair</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
         <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a>
         <ul id="nav-mobile" class="side-nav fixed ps" style="transform: translateX(-100%);">
            <li class="logo"><a id="logo-container" href="/" class="brand-logo"><img src="https://cdnfly01.azureedge.net/img/fly01logobranco.png"></a></li>
            <li class="no-padding">
               <ul class="collapsible collapsible-accordion">
                  <li>
                     <a class="collapsible-header"><i class="material-icons expand right">expand_more</i>Financeiro</a>
                     <div class="collapsible-body">
                        <ul>
                           <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Home/List&quot;)">Fluxo de Caixa</a></li>
                           <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Extrato/List&quot;)">Extrato</a></li>
                           <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/ContaPagar/List&quot;)">Contas a Pagar</a></li>
                           <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/ContaReceber/List&quot;)">Contas a Receber</a></li>
                           <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/DemonstrativoResultadoExercicio/List&quot;)">Relatório DRE</a></li>
                           <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/ConciliacaoBancaria/List&quot;)">Conciliação Bancária</a></li>
                        </ul>
                     </div>
                  </li>
               </ul>
            </li>
            <li class="no-padding">
               <ul class="collapsible collapsible-accordion">
                  <li>
                     <a class="collapsible-header"><i class="material-icons expand right">expand_more</i>Cadastros</a>
                     <div class="collapsible-body">
                        <ul>
                           <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Cliente/List&quot;)">Clientes</a></li>
                           <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Fornecedor/List&quot;)">Fornecedores</a></li>
                           <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/CondicaoParcelamento/List&quot;)">Condições de Parcelamento</a></li>
                           <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/CategoriaFinanceira/List&quot;)">Categorias Financeiras</a></li>
                           <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/FormaPagamento/List&quot;)">Formas de Pagamento</a></li>
                           <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/ContaBancaria/List&quot;)">Contas Bancárias</a></li>
                        </ul>
                     </div>
                  </li>
               </ul>
            </li>
            <li class="no-padding">
               <ul class="collapsible collapsible-accordion">
                  <li>
                     <a class="collapsible-header"><i class="material-icons expand right">expand_more</i>Ajuda</a>
                     <div class="collapsible-body">
                        <ul>
                           <li class=""><a href="https://secure.logmeinrescue.com/customer/code.aspx" target="_blank">Assistência Remota</a></li>
                        </ul>
                     </div>
                  </li>
               </ul>
            </li>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
               <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px;">
               <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
         </ul>
         <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
         </div>
      </header>
      <main>
         <div id="headTop" class="z-depth-0-half">
            <div class="container">
               <div class="row">
                  <div class="col s12 fly01-main-header">
                     <h4 class="thin inline-block">Conciliação Bancária</h4>
                     <ul class="right valign-wrapper fly01-buttons">
                        <li><a id="cancel" class="btn " onclick="fnCancelar();">Cancelar</a></li>
                        <li><a id="save" class="btn " onclick="fnSalvar();">Importar Extrato</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <form id="fly01frm" class="col s12" action="/ConciliacaoBancaria/CreateConciliacao" method="post" enctype="multipart/form-data" novalidate="novalidate">
                  <input id="id" type="hidden" name="id">
                  <div id="contaBancariaIdField" class="input-field col s12 m6"><input type="hidden" name="contaBancariaId" id="contaBancariaId"><input type="text" class="autocomplete ui-autocomplete-input" id="contaBancariaNomeConta" name="contaBancariaNomeConta" data-url="/AutoComplete/ContaBancariaConciliacao" data-target="contaBancariaId" autocomplete="off"><label class="truncate" for="contaBancariaNomeConta">Conta bancária</label></div>
                  <div id="arquivoField" class="input-field file-field col s12 m6">
                     <div class="btn btn-narrow"><i class="material-icons">file_upload</i><input id="arquivo" type="file" name="arquivo" accept=".ofx"></div>
                     <div class="file-path-wrapper"><input class="file-path validate" type="text"></div>
                     <label class="truncate active" for="arquivo">Arquivo do extrato bancário (.ofx)</label>
                  </div>
                  <div id="extratoLancamentosLabelField" class="input-field col s12" style="display: none;">
                     <h5 id="extratoLancamentosLabel" class="thin-bordered">Movimentações importadas</h5>
                  </div>
               </form>
               <div id="dtConciliacaoItens_wrapper" class="col s12 no-footer" style="display: none;">
                  <div class=""></div>
                  <div id="dtConciliacaoItens_processing" class="dataTables_processing" style="display: none;"></div>
                  <table class="display striped responsive nowrap dataTable no-footer dtr-inline" width="100%" id="dtConciliacaoItens" role="grid" aria-describedby="dtConciliacaoItens_info" style="width: 100%;">
                     <thead>
                        <tr id="columns" role="row">
                           <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;"><span>Conciliado</span></th>
                           <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;"><span>Descrição</span></th>
                           <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;"><span>Data</span></th>
                           <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;"><span>Valor</span></th>
                           <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;"><span></span></th>
                           <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;"><span></span></th>
                        </tr>
                     </thead>
                     <tbody></tbody>
                  </table>
                  <div class="">
                     <div class="dataTables_info" id="dtConciliacaoItens_info" role="status" aria-live="polite"></div>
                     <div class="dataTables_paginate paging_simple_numbers" id="dtConciliacaoItens_paginate"></div>
                  </div>
               </div>
            </div>
         </div>
      </main>
      <footer>
         <script async="" charset="utf-8" src="https://v2.zopim.com/?3YhhAljRQojs3mXfAHLtQZRLS5ueXJam" type="text/javascript"></script><script src="https://cdnfly01.azureedge.net/fly/1.0.1/fly01ui.js"></script>
         <script>
            $(function() { fly01.call(fly01.navigation, "/Home/Sidebar"); });
         </script>
         <script>
            $(document).ready(function() {
                fly01.go("/ConciliacaoBancaria/Form");
            });
         </script>
         <div id="dynScripts">
            <script type="text/javascript" src="https://novofinanceiro.fly01.com.br/ConciliacaoBancaria/Functions?fns=fnCancelar,fnSalvar"></script><script type="text/javascript" src="https://novofinanceiro.fly01.com.br/ConciliacaoBancaria/Functions?fns=fnFormReady"></script><iframe src="javascript:false" title="" style="display: none;"></iframe><script type="text/javascript" src="https://novofinanceiro.fly01.com.br/ConciliacaoBancaria/Functions?fns=fnNovaTransacaoCP,fnNovaTransacaoCR,fnBuscarExistentesCP,fnBuscarExistentesCR,fnExcluirCBItem,fnRenderSugestao"></script>
         </div>
      </footer>
      <div class="hiddendiv common"></div>
      <ul id="ui-id-1" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete autocomplete-content dropdown-content ui-front" style="display: none;"></ul>
      <div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div>
      <div class="drag-target" data-sidenav="nav-mobile" style="left: 0px; touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
      <script>
         (function(d,s){var z=$zopim,$=z.s= d.createElement(s),e=d.getElementsByTagName(s)[0];
         $.async=!0;$.setAttribute('charset','utf-8');
         $.src='https://v2.zopim.com/?3YhhAljRQojs3mXfAHLtQZRLS5ueXJam';
         z.t=+new Date;$. type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
      </script>
      <div><iframe id="launcher" tabindex="0" class="zEWidget-launcher zEWidget-launcher--active" style="border: none; background: transparent; z-index: 999998; transform: translateZ(0px); position: fixed; opacity: 1; width: 113px; height: 47px; margin: 10px 20px; right: 0px; bottom: 0px; transition-property: opacity, width, height, bottom; transition-timing-function: ease-out; transition-duration: 300ms;"></iframe></div>
      <div><iframe id="webWidget" tabindex="-1" class="zEWidget-webWidget " style="border: none; background: transparent; z-index: 999999; transform: translateZ(0px); position: fixed; opacity: 0; width: 357px; margin-left: 15px; margin-right: 15px; height: 15px; right: 0px; bottom: 0px; transition-property: none; transition-timing-function: unset; top: -9999px;"></iframe></div>
      <style></style>
   </body>
</html>