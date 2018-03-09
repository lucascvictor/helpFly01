@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
   <div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block">Condições de Parcelamento</h4>
               <ul class="right valign-wrapper fly01-buttons">
			   <a id="new" class="btn " href="{{ url('/cadastros/condicoesdeparcelamento/create') }}">Novo</a>
			   <a id="tour" class="btn pulse" onclick="initTour();">Tour</a>
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
                     <th class="sorting_asc" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 696px;" aria-sort="ascending" aria-label="searchDescrição: Ordenar colunas de forma descendente">
                        <div id="descricaoField" class="input-field fly01dt-filter "><input id="descricao" name="descricao" type="search"><i class="material-icons">search</i><label class="truncate" for="descricao">Descrição</label></div>
                     </th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 102px;" aria-label=""><span></span></th>
                  </tr>
               </thead>
               <tbody>
                  <tr role="row" class="odd">
                     <td class="sorting_1" tabindex="0" nowrap="nowrap">0,30,60,90</td>
                     <td nowrap="nowrap">
                        <input type="hidden" class="rowRecordId" value="4b62a820-26b4-4ddb-9bc5-971fa5e4685e"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown0"><i class="material-icons">more_vert</i></a>
                        <ul id="dropdown0" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('4b62a820-26b4-4ddb-9bc5-971fa5e4685e')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('4b62a820-26b4-4ddb-9bc5-971fa5e4685e')">Excluir</a></li>
                        </ul>
                     </td>
                  </tr>
                  <tr role="row" class="even">
                     <td class="sorting_1" tabindex="0" nowrap="nowrap">3X</td>
                     <td nowrap="nowrap">
                        <input type="hidden" class="rowRecordId" value="72c1da45-e715-4fc6-b9ed-3e1802f67063"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown1"><i class="material-icons">more_vert</i></a>
                        <ul id="dropdown1" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('72c1da45-e715-4fc6-b9ed-3e1802f67063')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('72c1da45-e715-4fc6-b9ed-3e1802f67063')">Excluir</a></li>
                        </ul>
                     </td>
                  </tr>
                  <tr role="row" class="odd">
                     <td class="sorting_1" tabindex="0" nowrap="nowrap">A VISTA</td>
                     <td nowrap="nowrap">
                        <input type="hidden" class="rowRecordId" value="334c4315-aec7-4cea-923d-bca87944b45a"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown2"><i class="material-icons">more_vert</i></a>
                        <ul id="dropdown2" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('334c4315-aec7-4cea-923d-bca87944b45a')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('334c4315-aec7-4cea-923d-bca87944b45a')">Excluir</a></li>
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
			