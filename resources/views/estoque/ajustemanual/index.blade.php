@extends('layouts.default')

@section('title', 'Help Fly01')


@section('content')
   <div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block fly01-main-title">Ajuste manual</h4>
               <ul class="right valign-wrapper fly01-buttons">
                  <li><a id="save" class="btn " onclick="fnSalvar();">Salvar</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <form id="fly01frm" class="col s12" action="/AjusteManual/Create" method="post" novalidate="novalidate" data-vivaldi-spatnav-clickable="1">
            <div id="tipoEntradaSaidaField" class="input-field col l6 m6 s12">
               <div class="select-wrapper">
                  <span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-4um7keu" value="Entrada" data-constrainwidth="undefined">
                  <ul id="select-options-4um7keu" class="dropdown-content select-dropdown ">
                     <li class="" data-vivaldi-spatnav-clickable="1"><span>Entrada</span></li>
                     <li class="" data-vivaldi-spatnav-clickable="1"><span>Saída</span></li>
                  </ul>
                  <select id="tipoEntradaSaida" name="tipoEntradaSaida" data-select-id="4um7keu" class="initialized">
                     <option value="Entrada">Entrada</option>
                     <option value="Saida">Saída</option>
                  </select>
               </div>
               <label class="truncate active" for="tipoEntradaSaida">Entrada / Saída *</label>
            </div>
            <div id="tipoMovimentoIdField" class="input-field col l6 m6 s12"><input type="text" class="autocomplete ui-autocomplete-input" id="tipoMovimentoDescricao" name="tipoMovimentoDescricao" data-url="/AutoComplete/TipoMovimento" data-url-post="/AjusteManual/NovoTipoMovimento" data-target="tipoMovimentoId" data-prefilter="tipoEntradaSaida" autocomplete="off"><input type="hidden" name="tipoMovimentoId" id="tipoMovimentoId"><label class="truncate" for="tipoMovimentoDescricao">Tipo de Movimento *</label></div>
            <div id="produtoIdField" class="input-field col l12 m12 s12"><input type="text" class="autocomplete ui-autocomplete-input" id="produtoDescricao" name="produtoDescricao" data-url="/AutoComplete/Produto" data-url-post-modal="/Produto/FormModal" data-post-field="descricao" data-target="produtoId" autocomplete="off"><input type="hidden" name="produtoId" id="produtoId"><label class="truncate" for="produtoDescricao">Produto *</label></div>
            <div id="codigoProdutoField" class="input-field col l4 m4 s12"><input id="codigoProduto" type="text" name="codigoProduto" disabled="disabled"><label class="truncate" for="codigoProduto">Código</label></div>
            <div id="codigoBarrasField" class="input-field col l4 m4 s12"><input id="codigoBarras" type="text" name="codigoBarras" disabled="disabled"><label class="truncate" for="codigoBarras">Código de barras</label></div>
            <div id="saldoProdutoField" class="input-field col l4 m4 s12"><input id="saldoProduto" type="text" name="saldoProduto" disabled="disabled" value="0"><label class="truncate active" for="saldoProduto">Saldo atual</label></div>
            <div id="quantidadeField" class="input-field col l6 m6 s12"><input id="quantidade" type="text" name="quantidade" class="numbers" value="0" style="text-align: right;"><label class="truncate active" for="quantidade">Quantidade *</label></div>
            <div id="novoEstoqueField" class="input-field col l6 m6 s12"><input id="novoEstoque" type="text" name="novoEstoque" class="numbers" disabled="disabled" value="0" style="text-align: right;"><label class="truncate active" for="novoEstoque">Novo estoque</label></div>
            <div id="observacaoField" class="input-field col l12 m12 s12"><textarea id="observacao" name="observacao" class="materialize-textarea"></textarea><label class="truncate" for="observacao">Observação</label></div>
            <div id="Field" class="input-field col s12"><small>* Campos obrigatórios</small></div>
         </form>
      </div>
   </div>
   @endsection