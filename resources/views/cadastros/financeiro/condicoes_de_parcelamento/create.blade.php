

@extends('layouts.default')
@section('title', 'Help Fly01')
@section('content')
<div id="headTop" class="z-depth-0-half">
   <div class="container">
      <div class="row">
         <div class="col s12 fly01-main-header">
            <h4 class="thin inline-block">Dados da condição de parcelamento</h4>
            <ul class="right valign-wrapper fly01-buttons">
               <li>
                  <a id="cancel" class="btn " href="{{ url('/voltar') }}">Cancelar</a>
               </li>
               <li>
                  <a id="save" class="btn " onclick="fnSalvar();">Salvar</a>
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
   <form id="fly01frm" class="col s12" action="https://novofinanceiro.fly01.com.br/CondicaoParcelamento/Create" method="post" novalidate="novalidate" data-vivaldi-spatnav-clickable="1">
      <div id="dadosCondParc">
         <input id="id" type="hidden" name="id"/>
         <div id="descricaoField" class="input-field col s6 l9">
            <input id="descricao" type="text" name="descricao"/>
            <label class="truncate" for="descricao">Descrição</label>
         </div>
         <div id="TipoSimulacaoField" class="input-field col s6 l3">
            <div class="select-wrapper initialized">
               <span class="caret">▼</span>
               <input type="text" class="select-dropdown" readonly="true" data-activates="select-options-x0azzr0" value="Quantidade de parcelas">
               <ul id="select-options-x0azzr0" class="dropdown-content select-dropdown ">
                  <li class="" data-vivaldi-spatnav-clickable="1">
                     <span>Quantidade de parcelas</span>
                  </li>
                  <li class="" data-vivaldi-spatnav-clickable="1">
                     <span>Cond. Parcelamento</span>
                  </li>
               </ul>
               <select id="TipoSimulacao" name="TipoSimulacao" data-select-id="x0azzr0" class="initialized">
                  <option value="QtdParcelas">Quantidade de parcelas</option>
                  <option value="CondParcelamento">Cond. Parcelamento</option>
               </select>
            </div>
            <label class="truncate active" for="TipoSimulacao">Tipo de Simulação</label>
         </div>
         <div id="qtdParcelasField" class="input-field col s6 l4">
            <input id="qtdParcelas" type="text" name="qtdParcelas" class="masked numbers" style="text-align: right;"/>
            <label class="truncate" for="qtdParcelas">Quantidade de Parcelas</label>
         </div>
         <div id="condicoesParcelamentoField" class="input-field col s6 l8">
            <input id="condicoesParcelamento" type="text" name="condicoesParcelamento" disabled="disabled"/>
            <label class="truncate" for="condicoesParcelamento">Intervalo de dias</label>
         </div>
      </div>
      <div id="simulatorLabelField" class="input-field col s12">
         <h5 id="simulatorLabel" class="thin-bordered">Simular Condição de Parcelamento</h5>
      </div>
      <div id="valorReferenciaField" class="input-field col s6 l5">
         <input id="valorReferencia" type="text" name="valorReferencia" class="masked currency" style="text-align: right;"/>
         <label class="truncate" for="valorReferencia">Valor Referência</label>
      </div>
      <div id="dataReferenciaField" class="input-field col s6 l5">
         <div class="picker" id="dataReferencia_root" tabindex="0" data-vivaldi-spatnav-clickable="1" aria-hidden="true">
            <input id="dataReferencia" type="text" name="dataReferencia" class="datepicker picker__input" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataReferencia_root"/>
            <label class="truncate" for="dataReferencia">Data Referência</label>
         </div>
		</div>
         <div id="btnRefreshField" class="input-field col s12 l2">
            <input id="btnRefresh" type="button" name="btnRefresh" class="btn undefined" value="Simular"/>
         </div>
         <div id="simulatorDataTableField" class="input-field col s12">
            <table class="display striped responsive nowrap" width="100%" id="simulatorDataTable">
               <thead>
                  <tr id="columns">
                     <th>Parcela</th>
                     <th>Data</th>
                     <th>Valor</th>
                  </tr>
               </thead>
            </table>
         </div>
   </form>
   </div>
</div>
@endsection
@section('extrascript')
@include('cadastros.financeiro.condicoes_de_parcelamento.tour')
@endsection

