@extends('layouts.default')

@section('title', 'Help Fly01')


@section('content')
   <div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block fly01-main-title">Inventários</h4>
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
                     <th class="sorting_asc" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 689px;" aria-sort="ascending" aria-label="ABERTOFINALIZADOStatus do Inventário: Ordenar colunas de forma descendente">
                        <div id="inventarioStatusField" class="input-field fly01dt-select ">
                           <div class="select-wrapper initialized">
                              <span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-wue7cvq" value="" data-constrainwidth="undefined">
                              <ul id="select-options-wue7cvq" class="dropdown-content select-dropdown ">
                                 <li class="" data-vivaldi-spatnav-clickable="1"><span></span></li>
                                 <li class="" data-vivaldi-spatnav-clickable="1"><span>ABERTO</span></li>
                                 <li class="" data-vivaldi-spatnav-clickable="1"><span>FINALIZADO</span></li>
                              </ul>
                              <select id="inventarioStatus" name="inventarioStatus" data-select-id="wue7cvq" class="initialized">
                                 <option value=""></option>
                                 <option value="Aberto">ABERTO</option>
                                 <option value="Finalizado">FINALIZADO</option>
                              </select>
                           </div>
                           <label class="truncate" for="inventarioStatus">Status do Inventário</label>
                        </div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 0px;" aria-label="Ultima Interação: Ordenar colunas de forma ascendente">
                        <div id="dataUltimaInteracaoField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="dataUltimaInteracao" name="dataUltimaInteracao" type="text" class="date" data-index="1"><label class="truncate" for="dataUltimaInteracao">Ultima Interação</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 0px;" aria-label="Descrição: Ordenar colunas de forma ascendente">
                        <div id="descricaoField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="descricao" name="descricao" type="text" class="string" data-index="2"><label class="truncate" for="descricao">Descrição</label></div>
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
                     <td class="sorting_1" nowrap="nowrap" tabindex="0"><span class="new badge green left" data-badge-caption=" ">ABERTO</span></td>
                     <td nowrap="nowrap" style="">13/03/2018</td>
                     <td nowrap="nowrap" style="">Reajuste 13-03</td>
                     <td nowrap="nowrap" style="">
                        <input type="hidden" class="rowRecordId" value="2a7c68e7-5cfc-447c-8a80-8f816801f403"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropfly01dtdown0" data-vivaldi-spatnav-clickable="1" style=""><i class="material-icons">more_vert</i></a>
                        <ul id="dropfly01dtdown0" class="dropdown-content" style="white-space: nowrap; opacity: 1; left: -83px; position: absolute; top: 38px; display: none;">
                           <li><a href="javascript:void(0)" onclick="fnExcluir('2a7c68e7-5cfc-447c-8a80-8f816801f403')">Excluir</a></li>
                           <li><a href="javascript:void(0)" onclick="fnEditar('2a7c68e7-5cfc-447c-8a80-8f816801f403')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnFinalizarRow('2a7c68e7-5cfc-447c-8a80-8f816801f403')" style="">Finalizar</a></li>
                        </ul>
                     </td>
                  </tr>
                  <tr role="row" class="even">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0"><span class="new badge green left" data-badge-caption=" ">ABERTO</span></td>
                     <td nowrap="nowrap" style="">26/03/2018</td>
                     <td nowrap="nowrap" style="">Reajuste 26-03</td>
                     <td nowrap="nowrap" style="">
                        <input type="hidden" class="rowRecordId" value="14042586-3398-4595-a3ef-9392782751bc"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropfly01dtdown1" data-vivaldi-spatnav-clickable="1"><i class="material-icons">more_vert</i></a>
                        <ul id="dropfly01dtdown1" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnExcluir('14042586-3398-4595-a3ef-9392782751bc')">Excluir</a></li>
                           <li><a href="javascript:void(0)" onclick="fnEditar('14042586-3398-4595-a3ef-9392782751bc')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnFinalizarRow('14042586-3398-4595-a3ef-9392782751bc')">Finalizar</a></li>
                        </ul>
                     </td>
                  </tr>
                  <tr role="row" class="odd">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0"><span class="new badge green left" data-badge-caption=" ">ABERTO</span></td>
                     <td nowrap="nowrap" style="">08/04/2018</td>
                     <td nowrap="nowrap" style="">Reajuste 08-04</td>
                     <td nowrap="nowrap" style="">
                        <input type="hidden" class="rowRecordId" value="93c771f2-8928-446a-89d2-dd667884f75c"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropfly01dtdown2" data-vivaldi-spatnav-clickable="1"><i class="material-icons">more_vert</i></a>
                        <ul id="dropfly01dtdown2" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnExcluir('93c771f2-8928-446a-89d2-dd667884f75c')">Excluir</a></li>
                           <li><a href="javascript:void(0)" onclick="fnEditar('93c771f2-8928-446a-89d2-dd667884f75c')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnFinalizarRow('93c771f2-8928-446a-89d2-dd667884f75c')">Finalizar</a></li>
                        </ul>
                     </td>
                  </tr>
                  <tr role="row" class="even">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0"><span class="new badge red left" data-badge-caption=" ">FINALIZADO</span></td>
                     <td nowrap="nowrap" style="">20/04/2018</td>
                     <td nowrap="nowrap" style="">Reajuste 20-04</td>
                     <td nowrap="nowrap" style="">
                        <input type="hidden" class="rowRecordId" value="e4043a57-6e64-4e34-baf0-74f44cdb7012"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropfly01dtdown3" data-vivaldi-spatnav-clickable="1"><i class="material-icons">more_vert</i></a>
                        <ul id="dropfly01dtdown3" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('e4043a57-6e64-4e34-baf0-74f44cdb7012')">Visualizar</a></li>
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
   <div id="modalyeqyptf" class="modal" data-vivaldi-spatnav-clickable="1" style="z-index: 1005; display: none; opacity: 0; transform: scaleX(0.7); top: calc(0px + 4%);">
      <div class="modal-header">
         <h5>Confirmar Finalização</h5>
         <a class="modal-action modal-close"><i class="material-icons">close</i></a>
      </div>
      <div class="modal-content">
         <h6>Deseja realmente finalizar este inventário?</h6>
      </div>
      <div class="modal-footer"><a class="modal-action modal-close btn">CANCELAR</a><a class="modal-action modal-close modal-action-default btn" onclick="callbackConfirmaFinalizacao()">CONTINUAR</a></div>
   </div>
@endsection