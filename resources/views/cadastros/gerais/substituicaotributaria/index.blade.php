@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
   <div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block fly01-main-title">Substituição Tributária</h4>
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
            <table class="display striped responsive nowrap dataTable dtr-inline" width="100%" id="fly01dt" role="grid" aria-describedby="fly01dt_info" style="width: 100%;">
               <thead>
                  <tr id="columns" role="row">
                     <th class="sorting_asc" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 689px;" aria-sort="ascending" aria-label="NCM: Ordenar colunas de forma descendente">
                        <div id="ncm_codigoField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="ncm_codigo" name="ncm_codigo" type="search"><label class="truncate" for="ncm_codigo">NCM</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 0px;" aria-label="MVA: Ordenar colunas de forma ascendente">
                        <div id="mvaField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="mva" name="mva" type="search" data-index="2"><label class="truncate" for="mva">MVA</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 0px;" aria-label="Origem: Ordenar colunas de forma ascendente">
                        <div id="estadoOrigem_nomeField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="estadoOrigem_nome" name="estadoOrigem_nome" type="search" data-index="3"><label class="truncate" for="estadoOrigem_nome">Origem</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 0px;" aria-label="Destino: Ordenar colunas de forma ascendente">
                        <div id="estadoDestino_nomeField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="estadoDestino_nome" name="estadoDestino_nome" type="search" data-index="4"><label class="truncate" for="estadoDestino_nome">Destino</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 0px;" aria-label="ENTRADASAÍDATipo: Ordenar colunas de forma ascendente">
                        <div id="tipoSubstituicaoTributariaField" class="input-field fly01dt-select ">
                           <div class="select-wrapper initialized">
                              <span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-6dd9t5m" value="" data-constrainwidth="undefined">
                              <ul id="select-options-6dd9t5m" class="dropdown-content select-dropdown ">
                                 <li class="" data-vivaldi-spatnav-clickable="1"><span></span></li>
                                 <li class="" data-vivaldi-spatnav-clickable="1"><span>ENTRADA</span></li>
                                 <li class="" data-vivaldi-spatnav-clickable="1"><span>SAÍDA</span></li>
                              </ul>
                              <select id="tipoSubstituicaoTributaria" name="tipoSubstituicaoTributaria" data-index="5" data-select-id="6dd9t5m" class="initialized">
                                 <option value=""></option>
                                 <option value="Entrada">ENTRADA</option>
                                 <option value="Saida">SAÍDA</option>
                              </select>
                           </div>
                           <label class="truncate" for="tipoSubstituicaoTributaria">Tipo</label>
                        </div>
                     </th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;" aria-label="."><span class="white-text">.</span></th>
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
                  </tr>
               </tfoot>
               <tbody data-vivaldi-spatnav-clickable="1">
                  <tr role="row" class="odd">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0">01012100</td>
                     <td nowrap="nowrap" style="">2</td>
                     <td nowrap="nowrap" style="">Alagoas</td>
                     <td nowrap="nowrap" style="">Amazonas</td>
                     <td nowrap="nowrap" style=""><span class="new badge green left" data-badge-caption=" ">ENTRADA</span></td>
                     <td nowrap="nowrap" style="">
                        <input type="hidden" class="rowRecordId" value="fc9184b5-a37c-4a77-8240-491b5c16b7b7"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropfly01dtdown0" data-vivaldi-spatnav-clickable="1"><i class="material-icons">more_vert</i></a>
                        <ul id="dropfly01dtdown0" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('fc9184b5-a37c-4a77-8240-491b5c16b7b7')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('fc9184b5-a37c-4a77-8240-491b5c16b7b7')">Excluir</a></li>
                        </ul>
                     </td>
                  </tr>
                  <tr role="row" class="even">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0">01012100</td>
                     <td nowrap="nowrap" style="">5</td>
                     <td nowrap="nowrap" style="">Acre</td>
                     <td nowrap="nowrap" style="">Acre</td>
                     <td nowrap="nowrap" style=""><span class="new badge green left" data-badge-caption=" ">ENTRADA</span></td>
                     <td nowrap="nowrap" style="">
                        <input type="hidden" class="rowRecordId" value="daba824a-c68f-41d6-896e-5c9f6291360c"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropfly01dtdown1" data-vivaldi-spatnav-clickable="1"><i class="material-icons">more_vert</i></a>
                        <ul id="dropfly01dtdown1" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('daba824a-c68f-41d6-896e-5c9f6291360c')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('daba824a-c68f-41d6-896e-5c9f6291360c')">Excluir</a></li>
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