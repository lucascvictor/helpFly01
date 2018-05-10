@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
   <div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block fly01-main-title">Grupo Tributário</h4>
               <ul class="right valign-wrapper fly01-buttons">
                  <li><a id="new" class="btn " onclick="fnNovo();">Novo</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <div id="fly01dt_wrapper" class="col s12" data-vivaldi-spatnav-clickable="1">
            <div class=""></div>
            <div id="fly01dt_processing" class="dataTables_processing" style="display: none;"></div>
            <table class="display striped responsive nowrap dataTable dtr-inline collapsed" width="100%" id="fly01dt" role="grid" aria-describedby="fly01dt_info" style="width: 100%;">
               <thead>
                  <tr id="columns" role="row">
                     <th class="sorting_asc" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 689px;" aria-sort="ascending" aria-label="Descrição: Ordenar colunas de forma descendente">
                        <div id="descricaoField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="descricao" name="descricao" type="search"><label class="truncate" for="descricao">Descrição</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="CFOP: Ordenar colunas de forma ascendente">
                        <div id="cfop_descricaoField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="cfop_descricao" name="cfop_descricao" type="search" data-index="1"><label class="truncate" for="cfop_descricao">CFOP</label></div>
                     </th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;" aria-label="."><span class="white-text">.</span></th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1" style="display: none;"></th>
                     <th rowspan="1" colspan="1" style=""></th>
                  </tr>
               </tfoot>
               <tbody data-vivaldi-spatnav-clickable="1">
                  <tr role="row" class="odd">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0">SERVIÇO</td>
                     <td nowrap="nowrap" style="display: none;">5.933 - Prestação de serviço tributado pelo Imposto Sobre Serviços de Qualquer Natureza</td>
                     <td nowrap="nowrap" style="">
                        <input type="hidden" class="rowRecordId" value="396e1529-9d02-4cfa-97bc-35a3d882998c"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropfly01dtdown0" data-vivaldi-spatnav-clickable="1"><i class="material-icons">more_vert</i></a>
                        <ul id="dropfly01dtdown0" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('396e1529-9d02-4cfa-97bc-35a3d882998c')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('396e1529-9d02-4cfa-97bc-35a3d882998c')">Excluir</a></li>
                        </ul>
                     </td>
                  </tr>
                  <tr role="row" class="even">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0">VENDA A CONSUMIDOR</td>
                     <td nowrap="nowrap" style="display: none;">5.102 - Venda de mercadoria adquirida ou recebida de terceiros</td>
                     <td nowrap="nowrap" style="">
                        <input type="hidden" class="rowRecordId" value="11094b95-d252-4686-80fc-d5239bc5a1db"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropfly01dtdown1" data-vivaldi-spatnav-clickable="1"><i class="material-icons">more_vert</i></a>
                        <ul id="dropfly01dtdown1" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('11094b95-d252-4686-80fc-d5239bc5a1db')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('11094b95-d252-4686-80fc-d5239bc5a1db')">Excluir</a></li>
                        </ul>
                     </td>
                  </tr>
                  <tr role="row" class="odd">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0">VENDA PADRÃO</td>
                     <td nowrap="nowrap" style="display: none;">5.101 - Venda de produção do estabelecimento</td>
                     <td nowrap="nowrap" style="">
                        <input type="hidden" class="rowRecordId" value="e5d702f7-d912-4312-8adf-ee16afc45849"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropfly01dtdown2" data-vivaldi-spatnav-clickable="1"><i class="material-icons">more_vert</i></a>
                        <ul id="dropfly01dtdown2" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('e5d702f7-d912-4312-8adf-ee16afc45849')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('e5d702f7-d912-4312-8adf-ee16afc45849')">Excluir</a></li>
                        </ul>
                     </td>
                  </tr>
               </tbody>
            </table>
            <div class="">
               <div class="dataTables_info" id="fly01dt_info" role="status" aria-live="polite"></div>
               <div class="dataTables_paginate paging_simple_numbers" id="fly01dt_paginate" style="display: none;"><a class="paginate_button previous disabled" aria-controls="fly01dt" data-dt-idx="0" tabindex="0" id="fly01dt_previous" data-vivaldi-spatnav-clickable="1">&lt;</a><span><a class="paginate_button current" aria-controls="fly01dt" data-dt-idx="1" tabindex="0" data-vivaldi-spatnav-clickable="1">1</a></span><a class="paginate_button next disabled" aria-controls="fly01dt" data-dt-idx="2" tabindex="0" id="fly01dt_next" data-vivaldi-spatnav-clickable="1">&gt;</a></div>
            </div>
         </div>
      </div>
   </div>
@endsection	