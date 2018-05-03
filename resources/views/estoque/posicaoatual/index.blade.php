@extends('layouts.default')

@section('title', 'Help Fly01')


@section('content')
   <div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block fly01-main-title">Posição atual</h4>
               <ul class="right valign-wrapper fly01-buttons">
                  <li><a id="alterarEstoque" class="btn " onclick="fnAjusteManual();">Alterar estoque</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <div id="dfly01cardEstoque" class="col s12 m4">
            <div class="card" id="fly01cardEstoque" data-color="green">
               <div class="card-content white-text green lighten-2">
                  <span class="card-title condensed">Em Estoque</span>
                  <h5 class="center">70</h5>
               </div>
               <div class="card-action right-align green lighten-1"><a href="javascript:void(0)" class="white-text ">Total</a></div>
            </div>
         </div>
         <div id="dfly01cardCustos" class="col s12 m4">
            <div class="card" id="fly01cardCustos" data-color="blue">
               <div class="card-content white-text blue lighten-2">
                  <span class="card-title condensed">Custo</span>
                  <h5 class="center">R$ 322,50</h5>
               </div>
               <div class="card-action right-align blue lighten-1"><a href="javascript:void(0)" class="white-text ">Total</a></div>
            </div>
         </div>
         <div id="dfly01cardVendas" class="col s12 m4">
            <div class="card" id="fly01cardVendas" data-color="orange">
               <div class="card-content white-text orange lighten-2">
                  <span class="card-title condensed">Venda</span>
                  <h5 class="center">R$ 1.563,00</h5>
               </div>
               <div class="card-action right-align orange lighten-1"><a href="javascript:void(0)" class="white-text ">Total</a></div>
            </div>
         </div>
         <div id="fly01dtprodutos_wrapper" class="col s12" data-vivaldi-spatnav-clickable="1">
            <div class=""></div>
            <div id="fly01dtprodutos_processing" class="dataTables_processing" style="display: none;"></div>
            <table class="display striped responsive nowrap dataTable dtr-inline" width="100%" id="fly01dtprodutos" role="grid" aria-describedby="fly01dtprodutos_info" style="width: 100%;">
               <thead>
                  <tr id="columns" role="row">
                     <th class="sorting_asc" tabindex="0" aria-controls="fly01dtprodutos" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 689px;" aria-sort="ascending" aria-label="Código: Ordenar colunas de forma descendente">
                        <div id="codigoProdutoField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="codigoProduto" name="codigoProduto" type="search"><label class="truncate" for="codigoProduto">Código</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dtprodutos" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 0px;" aria-label="Descrição: Ordenar colunas de forma ascendente">
                        <div id="descricaoField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="descricao" name="descricao" type="search" data-index="1"><label class="truncate" for="descricao">Descrição</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dtprodutos" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 0px;" aria-label="Valor custo: Ordenar colunas de forma ascendente">
                        <div id="valorCustoField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="valorCusto" name="valorCusto" type="text" class="currency" data-index="2" style="text-align: right;"><label class="truncate" for="valorCusto">Valor custo</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dtprodutos" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 0px;" aria-label="Valor venda: Ordenar colunas de forma ascendente">
                        <div id="valorVendaField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="valorVenda" name="valorVenda" type="text" class="currency" data-index="3" style="text-align: right;"><label class="truncate" for="valorVenda">Valor venda</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dtprodutos" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 0px;" aria-label="Qtd. Estoque: Ordenar colunas de forma ascendente">
                        <div id="saldoProdutoField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="saldoProduto" name="saldoProduto" type="search" data-index="4"><label class="truncate" for="saldoProduto">Qtd. Estoque</label></div>
                     </th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;" aria-label="Custo total"><span>Custo total</span></th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;" aria-label="Venda total"><span>Venda total</span></th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1" style=""></th>
                     <th rowspan="1" colspan="1" style=""></th>
                     <th rowspan="1" colspan="1" style=""></th>
                     <th rowspan="1" colspan="1" style=""></th>
                     <th rowspan="1" colspan="1" style=""></th>
                     <th rowspan="1" colspan="1" style=""></th>
                  </tr>
               </tfoot>
               <tbody data-vivaldi-spatnav-clickable="1">
                  <tr role="row" class="odd">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0">001</td>
                     <td nowrap="nowrap" style="">Neugebauer</td>
                     <td nowrap="nowrap" style="">R$ 0,90</td>
                     <td nowrap="nowrap" style="">R$ 3,00</td>
                     <td nowrap="nowrap" style="">0</td>
                     <td nowrap="nowrap" style="">R$ 0,00</td>
                     <td nowrap="nowrap" style="">R$ 0,00</td>
                  </tr>
                  <tr role="row" class="even">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0">FONTE12V</td>
                     <td nowrap="nowrap" style="">FONTE DE ALIMENTAÇÃO GENÉRICA 12V</td>
                     <td nowrap="nowrap" style="">R$ 5,00</td>
                     <td nowrap="nowrap" style="">R$ 25,00</td>
                     <td nowrap="nowrap" style="">59</td>
                     <td nowrap="nowrap" style="">R$ 295,00</td>
                     <td nowrap="nowrap" style="">R$ 1.475,00</td>
                  </tr>
                  <tr role="row" class="odd">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0">IN00001</td>
                     <td nowrap="nowrap" style="">Produto de Insumo 01</td>
                     <td nowrap="nowrap" style="">R$ 0,00</td>
                     <td nowrap="nowrap" style="">R$ 0,00</td>
                     <td nowrap="nowrap" style="">0</td>
                     <td nowrap="nowrap" style="">R$ 0,00</td>
                     <td nowrap="nowrap" style="">R$ 0,00</td>
                  </tr>
                  <tr role="row" class="even">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0">LAMP12</td>
                     <td nowrap="nowrap" style="">LÂMPADA 12V 5W</td>
                     <td nowrap="nowrap" style="">R$ 2,50</td>
                     <td nowrap="nowrap" style="">R$ 8,00</td>
                     <td nowrap="nowrap" style="">11</td>
                     <td nowrap="nowrap" style="">R$ 27,50</td>
                     <td nowrap="nowrap" style="">R$ 88,00</td>
                  </tr>
               </tbody>
            </table>
            <div class="">
               <div class="dataTables_info" id="fly01dtprodutos_info" role="status" aria-live="polite"></div>
               <div class="dataTables_paginate paging_simple_numbers" id="fly01dtprodutos_paginate" style="display: none;"><a class="paginate_button previous disabled" aria-controls="fly01dtprodutos" data-dt-idx="0" tabindex="0" id="fly01dtprodutos_previous" data-vivaldi-spatnav-clickable="1">&lt;</a><span><a class="paginate_button current" aria-controls="fly01dtprodutos" data-dt-idx="1" tabindex="0" data-vivaldi-spatnav-clickable="1">1</a></span><a class="paginate_button next disabled" aria-controls="fly01dtprodutos" data-dt-idx="2" tabindex="0" id="fly01dtprodutos_next" data-vivaldi-spatnav-clickable="1">&gt;</a></div>
            </div>
         </div>
      </div>
   </div>
@endsection
