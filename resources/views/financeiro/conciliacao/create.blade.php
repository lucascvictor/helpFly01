@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')

         <div id="headTop" class="z-depth-0-half">
            <div class="container">
               <div class="row">
                  <div class="col s12 fly01-main-header">
                     <h4 class="thin inline-block">Conciliação Bancária</h4>
                     <ul class="right valign-wrapper fly01-buttons">
                        <li><a id="cancel" class="btn " href="{{ url('/voltar') }}">Cancelar</a></li>
                        <li><a id="save" class="btn " onclick="fnSalvar();">Importar Extrato</a></li>
                        <li><a id="tour" class="btn pulse" onclick="initTour();">Tour</a></li>
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
         @endsection

 @section('extrascript')

@include('financeiro.conciliacao.tour')

@endsection