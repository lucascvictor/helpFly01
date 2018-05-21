@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
   <div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block fly01-main-title">Série de Notas Fiscais</h4>
               <ul class="right valign-wrapper fly01-buttons">
                  <li><a id="new" class="btn " onclick="fnNovo();">Adicionar</a></li>
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
                     <th class="sorting_asc" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 690px;" aria-sort="ascending" aria-label="Série: Ordenar colunas de forma descendente">
                        <div id="serieField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="serie" name="serie" type="search"><label class="truncate" for="serie">Série</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 0px;" aria-label="NFeNFSeAmbasOperação da Série NF: Ordenar colunas de forma ascendente">
                        <div id="tipoOperacaoSerieNotaFiscalField" class="input-field fly01dt-select ">
                           <div class="select-wrapper initialized">
                              <span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-pwn3ixl" value="" data-constrainwidth="undefined">
                              <ul id="select-options-pwn3ixl" class="dropdown-content select-dropdown ">
                                 <li class="" data-vivaldi-spatnav-clickable="1"><span></span></li>
                                 <li class="" data-vivaldi-spatnav-clickable="1"><span>NFe</span></li>
                                 <li class="" data-vivaldi-spatnav-clickable="1"><span>NFSe</span></li>
                                 <li class="" data-vivaldi-spatnav-clickable="1"><span>Ambas</span></li>
                              </ul>
                              <select id="tipoOperacaoSerieNotaFiscal" name="tipoOperacaoSerieNotaFiscal" data-index="1" data-select-id="pwn3ixl" class="initialized">
                                 <option value=""></option>
                                 <option value="NFe">NFe</option>
                                 <option value="NFSe">NFSe</option>
                                 <option value="Ambas">Ambas</option>
                              </select>
                           </div>
                           <label class="truncate" for="tipoOperacaoSerieNotaFiscal">Operação da Série NF</label>
                        </div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 0px;" aria-label="Próxima NF Emitida: Ordenar colunas de forma ascendente">
                        <div id="numNotaFiscalField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="numNotaFiscal" name="numNotaFiscal" type="search" data-index="2"><label class="truncate" for="numNotaFiscal">Próxima NF Emitida</label></div>
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
                  </tr>
               </tfoot>
               <tbody data-vivaldi-spatnav-clickable="1">
                  <tr role="row" class="odd">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0">003</td>
                     <td nowrap="nowrap" style="">NFe</td>
                     <td nowrap="nowrap" style="">00000001</td>
                     <td nowrap="nowrap" style="">
                        <input type="hidden" class="rowRecordId" value="30110233-ae70-4681-8c3b-61b46114c346"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropfly01dtdown0" data-vivaldi-spatnav-clickable="1" style=""><i class="material-icons">more_vert</i></a>
                        <ul id="dropfly01dtdown0" class="dropdown-content" style="white-space: nowrap; opacity: 1; left: 1115.3px; position: absolute; top: 243px; display: none;">
                           <li><a href="javascript:void(0)" onclick="fnEditar('30110233-ae70-4681-8c3b-61b46114c346')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('30110233-ae70-4681-8c3b-61b46114c346')">Excluir</a></li>
                        </ul>
                     </td>
                  </tr>
                  <tr role="row" class="even">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0">001</td>
                     <td nowrap="nowrap" style="">NFe</td>
                     <td nowrap="nowrap" style="">00000001</td>
                     <td nowrap="nowrap" style="">
                        <input type="hidden" class="rowRecordId" value="b23b1398-adac-489f-98db-d7bc6e9526e9"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropfly01dtdown1" data-vivaldi-spatnav-clickable="1"><i class="material-icons">more_vert</i></a>
                        <ul id="dropfly01dtdown1" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('b23b1398-adac-489f-98db-d7bc6e9526e9')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('b23b1398-adac-489f-98db-d7bc6e9526e9')">Excluir</a></li>
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