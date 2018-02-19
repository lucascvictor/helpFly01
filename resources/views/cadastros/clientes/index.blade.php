@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
 <div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block">Clientes</h4>
               <ul class="right valign-wrapper fly01-buttons">
                  <li><a id="new" class="btn " href="{{ url('/cadastros/clientes/create') }}">Novo</a></li>
                  <li><a id="import" class="btn " onclick="fnImportarCadastro();">Importar clientes</a></li>
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
                     <th class="sorting_asc" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 333px;" aria-sort="ascending" aria-label="searchCliente: Ordenar colunas de forma descendente">
                        <div id="nomeField" class="input-field fly01dt-filter "><input id="nome" name="nome" type="search"><i class="material-icons">search</i><label class="truncate" for="nome">Cliente</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 334px;" aria-label="CPF / CNPJ: Ordenar colunas de forma ascendente">
                        <div id="cpfcnpjField" class="input-field fly01dt-filter "><input id="cpfcnpj" name="cpfcnpj" type="text" class="masked cpfcnpj" data-index="1"><label class="truncate" for="cpfcnpj">CPF / CNPJ</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 334px;" aria-label="E-mail: Ordenar colunas de forma ascendente">
                        <div id="emailField" class="input-field fly01dt-filter "><input id="email" name="email" type="text" class="masked email" data-index="2"><label class="truncate" for="email">E-mail</label></div>
                     </th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 43px;" aria-label=""><span></span></th>
                  </tr>
               </thead>
               <tbody>
                  <tr role="row" class="odd">
                     <td class="sorting_1" tabindex="0" nowrap="nowrap">Allan Rogge</td>
                     <td nowrap="nowrap">376.308.118-61</td>
                     <td nowrap="nowrap">a.capinhas@tvglobo.com.br</td>
                     <td nowrap="nowrap">
                        <input type="hidden" class="rowRecordId" value="e1cadf8b-7b37-419c-9d08-40ddbec172a8"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown0"><i class="material-icons">more_vert</i></a>
                        <ul id="dropdown0" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('e1cadf8b-7b37-419c-9d08-40ddbec172a8')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('e1cadf8b-7b37-419c-9d08-40ddbec172a8')">Excluir</a></li>
                        </ul>
                     </td>
                  </tr>
                  <tr role="row" class="even">
                     <td class="sorting_1" tabindex="0" nowrap="nowrap">Arnaldo Lima</td>
                     <td nowrap="nowrap">137.052.556-73</td>
                     <td nowrap="nowrap"></td>
                     <td nowrap="nowrap">
                        <input type="hidden" class="rowRecordId" value="9ca0daff-20de-4060-98e3-0cda8d92a364"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown1"><i class="material-icons">more_vert</i></a>
                        <ul id="dropdown1" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('9ca0daff-20de-4060-98e3-0cda8d92a364')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('9ca0daff-20de-4060-98e3-0cda8d92a364')">Excluir</a></li>
                        </ul>
                     </td>
                  </tr>
                  <tr role="row" class="odd">
                     <td class="sorting_1" tabindex="0" nowrap="nowrap">FORNECEDOR E CLIENTE</td>
                     <td nowrap="nowrap">57.088.300/0001-91</td>
                     <td nowrap="nowrap">fc.lavagnoli@gmail.com</td>
                     <td nowrap="nowrap">
                        <input type="hidden" class="rowRecordId" value="979e90d1-ef51-4c48-b01f-b70aa732e9b8"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown2"><i class="material-icons">more_vert</i></a>
                        <ul id="dropdown2" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('979e90d1-ef51-4c48-b01f-b70aa732e9b8')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('979e90d1-ef51-4c48-b01f-b70aa732e9b8')">Excluir</a></li>
                        </ul>
                     </td>
                  </tr>
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
			