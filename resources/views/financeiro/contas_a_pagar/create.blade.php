@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
   <div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block fly01-main-title">Dados do título a pagar</h4>
               <ul class="right valign-wrapper fly01-buttons">
                  <li><a id="cancel" class="btn " onclick="fnCancelar();">Cancelar</a></li>
                  <li><a id="save" class="btn " onclick="fnSalvar();">Salvar</a></li>
                  <li>
                    <div class="fixed-action-btn"> 
                         <a id="tour" class="btn pulse orange btn-medium" onclick="initTour();" style="border-radius: 80px;"><i class="material-icons small left"/>help</i>Iniciar Tour</a>
                    </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <form id="fly01frm" class="col s12" action="/ContaPagar/Create" method="post" novalidate="novalidate">
            <input id="id" name="id" type="hidden"><input id="statusContaBancaria" name="statusContaBancaria" type="hidden"><input id="descricaoParcela" name="descricaoParcela" type="hidden">
            <div id="descricaoField" class="input-field col s12 l6"><input id="descricao" name="descricao" type="text"><label class="truncate" for="descricao">Descrição *</label></div>
            <div id="pessoaIdField" class="input-field col s12 l6"><input class="autocomplete ui-autocomplete-input" id="pessoaNome" name="pessoaNome" data-url="/AutoComplete/Fornecedor" data-url-post="/ContaPagar/PostFornecedor" data-target="pessoaId" autocomplete="off" type="text"><input name="pessoaId" id="pessoaId" type="hidden"><label class="truncate" for="pessoaNome">Fornecedor *</label></div>
            <div id="valorPrevistoField" class="input-field col s6 l2"><input id="valorPrevisto" name="valorPrevisto" class="currency" value="0" style="text-align: right;" type="text"><label class="truncate active" for="valorPrevisto">Valor *</label></div>
            <div id="dataEmissaoField" class="input-field col s6 l2">
               <i class="material-icons picking">date_range</i>
               <input type="text" id="dataEmissao" name="dataEmissao" class="datepicker" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataEmissao_root" aria-invalid="false"><label class="truncate active" for="dataEmissao">Emissão *</label>
            </div>
            <div id="dataVencimentoField" class="input-field col s12 l2">
              <i class="material-icons picking">date_range</i>
               <input type="text" id="dataVencimento" name="dataVencimento" class="datepicker" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataValidade_root" aria-invalid="false"><label class="truncate active" for="dataEmissao">Validade *</label>
            </div>
            <div id="formaPagamentoIdField" class="input-field col s12 l6"><input class="autocomplete ui-autocomplete-input" id="formaPagamentoDescricao" name="formaPagamentoDescricao" data-url="/AutoComplete/FormaPagamento" data-url-post-modal="/FormaPagamento/FormModal" data-post-field="descricao" data-target="formaPagamentoId" autocomplete="off" type="text"><input name="formaPagamentoId" id="formaPagamentoId" type="hidden"><label class="truncate" for="formaPagamentoDescricao">Forma Pagamento *</label></div>
            <div id="condicaoParcelamentoIdField" class="input-field col s12 l6"><input class="autocomplete ui-autocomplete-input" id="condicaoParcelamentoDescricao" name="condicaoParcelamentoDescricao" data-url="/AutoComplete/CondicaoParcelamento" data-url-post-modal="/CondicaoParcelamento/FormModal" data-post-field="descricao" data-target="condicaoParcelamentoId" autocomplete="off" type="text"><input name="condicaoParcelamentoId" id="condicaoParcelamentoId" type="hidden"><label class="truncate" for="condicaoParcelamentoDescricao">Condição Parcelamento *</label></div>
            <div id="categoriaIdField" class="input-field col s12 l6"><input class="autocomplete ui-autocomplete-input" id="categoriaDescricao" name="categoriaDescricao" data-url="/AutoComplete/CategoriaCP" data-url-post="/ContaPagar/NovaCategoriaDespesa" data-target="categoriaId" autocomplete="off" type="text"><input name="categoriaId" id="categoriaId" type="hidden"><label class="truncate" for="categoriaDescricao">Categoria Financeira *</label></div>
            <div id="observacaoField" class="input-field col s12"><textarea id="observacao" name="observacao" class="materialize-textarea"></textarea><label class="truncate" for="observacao">Observação</label></div>
            <div id="repetirField" class="input-field col s12"><input id="repetir" id="repetirBtn" name="repetir" value="true" type="checkbox"><label class="truncate" for="repetir">Repetir</label></div>
            <div id="tipoPeriodicidadeField" class="input-field col s6 m3 l3" >
               <div class="select-wrapper">
                  <span class="caret">▼</span><input class="select-dropdown" readonly="true" data-activates="select-options-1d9m3k8" value="Mensal" data-constrainwidth="undefined" type="text">
                  <ul id="select-options-1d9m3k8" class="dropdown-content select-dropdown ">
                     <li class=""><span>Nenhuma</span></li>
                     <li class=""><span>Semanal</span></li>
                     <li class=""><span>Mensal</span></li>
                     <li class=""><span>Anual</span></li>
                  </ul>
                  <select id="tipoPeriodicidade" name="tipoPeriodicidade" data-select-id="1d9m3k8" class="initialized">
                     <option value="Nenhuma" selected="selected" disable>Nenhuma</option>
                     <option value="Semanal">Semanal</option>
                     <option value="Mensal">Mensal</option>
                     <option value="Anual">Anual</option>
                  </select>
               </div>
            </div>
               <label class="truncate active" for="tipoPeriodicidade">Periodicidade</label>
            </div>
            <div id="tipoRepeticaoField" class="input-field col s6 m3 l3" >
               <div class="select-wrapper">
                  <span class="caret">▼</span><input class="select-dropdown" readonly="true" data-activates="select-options-jg0ch49" value="Quantidade" data-constrainwidth="undefined" type="text">
                  <ul id="select-options-jg0ch49" class="dropdown-content select-dropdown ">
                     <li class=""><span>Quantidade</span></li>
                     <li class=""><span>Período</span></li>
                  </ul>
                  <select id="tipoRepeticao" name="tipoRepeticao" data-select-id="jg0ch49" class="initialized">
                     <option value="Q" selected="selected">Quantidade</option>
                     <option value="P">Período</option>
                  </select>
               </div>
               <label class="truncate active" for="tipoRepeticao">Repetição</label>
            </div>
            <div id="numeroRepeticoesField" class="input-field col s6 m3 l3" ><input id="numeroRepeticoes" name="numeroRepeticoes" type="text"><label class="truncate" for="numeroRepeticoes">Número de Repetições</label></div>
            <div id="periodoFimField" class="input-field col s6 m3 l3" >
               <i class="datepicker material-icons picking">date_range</i></a>
               <input id="periodoFim" name="periodoFim" class="datepicker" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="periodoFim_root" type="text"><label class="truncate" for="periodoFim">Fim</label>
            </div>
            <div id="Field" class="input-field col s12"><small>* Campos obrigatórios</small></div>
         </form>
      </div>
   </div>
 
@endsection

@section('extrascript')

@include('financeiro.contas_a_pagar.tour')
<script>

 $(document).ready(function(){

    $('#tipoPeriodicidadeField').hide();
    $('#tipoRepeticaoField').hide();
    $('#numeroRepeticoesField').hide();
    $('#periodoFimField').hide();

$('#repetir').click(function() {

        $('#tipoPeriodicidadeField').show();
        $('#tipoRepeticaoField').show();
        $('#numeroRepeticoesField').show();
        $('#periodoFimField').show();
        
});

     
 });
   
 </script>
@endsection