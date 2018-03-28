@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
<div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block">Forma de Pagamento</h4>
               <ul class="right valign-wrapper fly01-buttons">
                  <li><a id="new" class="btn " href="{{ url('/cadastros/formasdepagamento/create') }}">Novo</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <div id="fly01dt_wrapper" class="col s12 no-footer">
            <div class=""></div>
            <div id="fly01dt_processing" class="dataTables_processing" style="display: none;"></div>
            <table class="display striped responsive nowrap dataTable no-footer dtr-inline" width="100%" id="fly01dt" role="grid" aria-describedby="fly01dt_info" style="width: 100%;">
               <thead>
                  <tr id="columns" role="row">
                     <th class="sorting_asc" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 145px;" aria-sort="ascending" aria-label="DinheiroChequeCartão de CréditoCartão de DébitoTransferênciaBoletoTipo: Ordenar colunas de forma descendente">
                        <div id="tipoFormaPagamentoField" class="input-field fly01dt-select ">
                           <div class="select-wrapper initialized">
                              <span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-cpa3qu1" value="">
                              <ul id="select-options-cpa3qu1" class="dropdown-content select-dropdown ">
                                 <li class=""><span></span></li>
                                 <li class=""><span>Dinheiro</span></li>
                                 <li class=""><span>Cheque</span></li>
                                 <li class=""><span>Cartão de Crédito</span></li>
                                 <li class=""><span>Cartão de Débito</span></li>
                                 <li class=""><span>Transferência</span></li>
                                 <li class=""><span>Boleto</span></li>
                              </ul>
                              <select id="tipoFormaPagamento" name="tipoFormaPagamento" data-select-id="cpa3qu1" class="initialized">
                                 <option value=""></option>
                                 <option value="Dinheiro">Dinheiro</option>
                                 <option value="Cheque">Cheque</option>
                                 <option value="CartaoCredito">Cartão de Crédito</option>
                                 <option value="CartaoDebito">Cartão de Débito</option>
                                 <option value="Transferencia">Transferência</option>
                                 <option value="Boleto">Boleto</option>
                              </select>
                           </div>
                           <label class="truncate" for="tipoFormaPagamento">Tipo</label>
                        </div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 200px;" aria-label="searchDescrição: Ordenar colunas de forma ascendente">
                        <div id="descricaoField" class="input-field fly01dt-filter "><input id="descricao" name="descricao" type="search" data-index="1"><i class="material-icons">search</i><label class="truncate" for="descricao">Descrição</label></div>
                     </th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 24px;" aria-label=""><span></span></th>
                  </tr>
               </thead>
               <tbody>
                   @foreach($paymentsMethods as $paymentMethod)
                  <tr role="row" class="odd">
                     <td class="sorting_1" tabindex="{{$paymentMethod->id}}" nowrap="nowrap">{{ $paymentMethod->tipoFormaPagamentoField }}</td>
                     <td nowrap="nowrap">{{ $paymentMethod->descricao }}</td>
                     <td nowrap="nowrap">
                        <input type="hidden" class="rowRecordId" value="34252f6a-f85a-4bc6-ac6d-482b886fa016"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown{{$paymentMethod->id}}"><i class="material-icons">more_vert</i></a>
                        <ul id="dropdown{{$paymentMethod->id}}" class="dropdown-content">
                           <li><a href="{{ url('/cadastros/formasdepagamento/edit')}}/{{ $paymentMethod->id }}">Editar</a></li>
                           <li><a href="{{ url('/cadastros/formasdepagamento/delete')}}/{{ $paymentMethod->id }}">Excluir</a></li>
                        </ul>
                     </td>
                  </tr>
                  @endforeach              
               </tbody>
            </table>
            <div class="">
               <div class="dataTables_info" id="fly01dt_info" role="status" aria-live="polite"></div>
               <div class="dataTables_paginate paging_simple_numbers" id="fly01dt_paginate" style="display: none;"><a class="paginate_button previous disabled" aria-controls="fly01dt" data-dt-idx="0" tabindex="0" id="fly01dt_previous">Anterior</a><span><a class="paginate_button current" aria-controls="fly01dt" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="fly01dt" data-dt-idx="2" tabindex="0" id="fly01dt_next">Próximo</a></div>
            </div>
         </div>
      </div>
   </div>
@endsection
						