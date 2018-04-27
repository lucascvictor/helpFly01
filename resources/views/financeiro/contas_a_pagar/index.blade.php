@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
   <div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block">Contas a Pagar</h4>
               <ul class="right valign-wrapper fly01-buttons">
                  <li><a id="new" class="btn " href="{{ url('/financeiro/contasapagar/create')}}">Novo</a></li>
                  <li>
                     <a class="btn btn-narrow dropdown-button green-text white" data-activates="headerDropdown"><i class="material-icons">expand_more</i></a>
                     <ul class="dropdown-content" id="headerDropdown">
                        <li><a id="new" class=" " href="{{ url('financeiro/contasapagar/renegotiation')}}">Renegociação</a></li>
                        <li><a id="new" class=" " onclick="fnImprimirListContas();">Imprimir</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <form id="fly01frm" class="col s12" method="post" novalidate="novalidate">
            <div id="mesPickerField" class="input-field col s12 m6 offset-m3">
               <button type="button" class="col s2 btn btn-large zero-border-radius-left" id="mesPickerprev" onclick="fly01._.mesPicker.prev()"><i class="material-icons">chevron_left</i></button>
               <div id="mesPickercontainer" class="col s8 btn btn-large zero-border-radius">
                  <div class="picker" id="mesPicker_root" tabindex="0" aria-hidden="true">
                  <input id="mesPicker" name="mesPicker" class="truncate periodpicker picker__input" data-value="Thu Mar 01 2018 00:00:00 GMT-0300 (BRT)" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="mesPicker_root" type="text">
               </div>
               <button type="button" class="col s2 btn btn-large zero-border-radius-right" id="mesPickernext" onclick="fly01._.mesPicker.next()"><i class="material-icons">chevron_right</i></button>
            </div>
            <input id="dataFinal" name="dataFinal" value="2018-03-31" type="hidden"><input id="dataInicial" name="dataInicial" value="2018-03-01" type="hidden">
         </form>
         <div id="fly01dt_wrapper" class="col s12">
            <div class=""></div>
            <div id="fly01dt_processing" class="dataTables_processing" style="display: none;"></div>
            <table class="display striped responsive nowrap dataTable dtr-inline" id="fly01dt" role="grid" aria-describedby="fly01dt_info" style="width: 100%;" width="100%">
               <thead>
                  <tr id="columns" role="row">
                     <th class="sorting_asc" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 114px;" aria-sort="ascending" aria-label="Em abertoPagoRenegociadoBaixado ParcialmenteStatus: Ordenar colunas de forma descendente">
                        <div id="statusContaBancariaField" class="input-field fly01dt-select ">
                           <div class="select-wrapper initialized">
                              <span class="caret">▼</span><input class="select-dropdown" readonly="true" data-activates="select-options-z7wntze" value="" data-constrainwidth="undefined" type="text">
                              <ul id="select-options-z7wntze" class="dropdown-content select-dropdown ">
                                 <li class=""><span></span></li>
                                 <li class=""><span>Em aberto</span></li>
                                 <li class=""><span>Pago</span></li>
                                 <li class=""><span>Renegociado</span></li>
                                 <li class=""><span>Baixado Parcialmente</span></li>
                              </ul>
                              <select id="statusContaBancaria" name="statusContaBancaria" data-select-id="z7wntze" class="initialized">
                                 <option value=""></option>
                                 <option value="EmAberto">Em aberto</option>
                                 <option value="Pago">Pago</option>
                                 <option value="Renegociado">Renegociado</option>
                                 <option value="BaixadoParcialmente">Baixado Parcialmente</option>
                              </select>
                           </div>
                           <label class="truncate" for="statusContaBancaria">Status</label>
                        </div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 122px;" aria-label="Vencimento: Ordenar colunas de forma ascendente">
                        <div id="dataVencimentoField" class="input-field fly01dt-filter "><input id="dataVencimento" name="dataVencimento" class="date" data-index="1" type="text"><label class="truncate" for="dataVencimento">Vencimento</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 154px;" aria-label="searchDescrição: Ordenar colunas de forma ascendente">
                        <div id="descricaoField" class="input-field fly01dt-filter "><input id="descricao" name="descricao" data-index="2" type="search"><i class="material-icons">search</i><label class="truncate" for="descricao">Descrição</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 122px;" aria-label="Valor: Ordenar colunas de forma ascendente">
                        <div id="valorPrevistoField" class="input-field fly01dt-filter "><input id="valorPrevisto" name="valorPrevisto" class="currency" data-index="3" style="text-align: right;" type="text"><label class="truncate" for="valorPrevisto">Valor</label></div>
                     </th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 76px;" aria-label="Saldo"><span>Saldo</span></th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 125px;" aria-label="searchForma">
                        <div id="formaPagamento_descricaoField" class="input-field fly01dt-filter "><input id="formaPagamento_descricao" name="formaPagamento_descricao" data-index="5" type="search"><i class="material-icons">search</i><label class="truncate" for="formaPagamento_descricao">Forma</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 103px;" aria-label="searchParcela: Ordenar colunas de forma ascendente">
                        <div id="descricaoParcelaField" class="input-field fly01dt-filter "><input id="descricaoParcela" name="descricaoParcela" data-index="6" type="search"><i class="material-icons">search</i><label class="truncate" for="descricaoParcela">Parcela</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 164px;" aria-label="searchFornecedor: Ordenar colunas de forma ascendente">
                        <div id="pessoa_nomeField" class="input-field fly01dt-filter "><input id="pessoa_nome" name="pessoa_nome" data-index="7" type="search"><i class="material-icons">search</i><label class="truncate" for="pessoa_nome">Fornecedor</label></div>
                     </th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 24px;" aria-label=""><span></span></th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                  </tr>
               </tfoot>
               <tbody>
               @foreach($billsToPay as $billToPay)
                  <tr role="row" class="odd">
                     <td class="sorting_1" tabindex="0" nowrap="nowrap"><span class="new badge orange left" data-badge-caption=" ">ABER</span></td>
                     <td nowrap="nowrap">{{ $billToPay->duedate }}</td>
                     <td nowrap="nowrap">{{ $billToPay->description }}</td>
                     <td nowrap="nowrap">{{ $billToPay->value }}</td>
                     <td nowrap="nowrap">{{ $billToPay->duedate }}</td>
                     <td nowrap="nowrap">{{ $billToPay->value }}</td>
                     <td nowrap="nowrap">{{ $billToPay->value }}</td>
                     <td nowrap="nowrap">{{ $billToPay->person }}</td>
                     <td nowrap="nowrap">
                        <input class="rowRecordId" value="1cc08ba4-d697-4730-b0b3-1e5d53621ed1" type="hidden"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropfly01dtdown0"><i class="material-icons">more_vert</i></a>
                        <ul id="dropfly01dtdown0" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('1cc08ba4-d697-4730-b0b3-1e5d53621ed1')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnVisualizar('1cc08ba4-d697-4730-b0b3-1e5d53621ed1')">Visualizar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('1cc08ba4-d697-4730-b0b3-1e5d53621ed1')">Excluir</a></li>
                           <li><a href="javascript:void(0)" onclick="fnNovaBaixa('1cc08ba4-d697-4730-b0b3-1e5d53621ed1')">Nova baixa</a></li>
                        </ul>
                     </td>
                  </tr>
                @endforeach
               </tbody>
            </table>
            <div class="">
               <div class="dataTables_info" id="fly01dt_info" role="status" aria-live="polite"></div>
               <div class="dataTables_paginate paging_simple_numbers" id="fly01dt_paginate"><a class="paginate_button previous disabled" aria-controls="fly01dt" data-dt-idx="0" tabindex="0" id="fly01dt_previous">&lt;</a><span><a class="paginate_button current" aria-controls="fly01dt" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="fly01dt" data-dt-idx="2" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="fly01dt" data-dt-idx="3" tabindex="0" id="fly01dt_next">&gt;</a></div>
            </div>
         </div>
      </div>
   </div>
   @endsection



@section('extrascript')

@include('financeiro.contas_a_pagar.tour')

@endsection
																	