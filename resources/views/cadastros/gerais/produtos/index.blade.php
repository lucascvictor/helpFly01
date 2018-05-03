@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
   <div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block fly01-main-title">Produtos</h4>
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
                     <th class="sorting_asc" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 673px;" aria-sort="ascending" aria-label="Código: Ordenar colunas de forma descendente">
                        <div id="codigoProdutoField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="codigoProduto" name="codigoProduto" type="search"><label class="truncate" for="codigoProduto">Código</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 0px;" aria-label="Descrição: Ordenar colunas de forma ascendente">
                        <div id="descricaoField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="descricao" name="descricao" type="search" data-index="1"><label class="truncate" for="descricao">Descrição</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 0px;" aria-label="Grupo: Ordenar colunas de forma ascendente">
                        <div id="grupoProduto_descricaoField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="grupoProduto_descricao" name="grupoProduto_descricao" type="search" data-index="2"><label class="truncate" for="grupoProduto_descricao">Grupo</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 0px;" aria-label="INSUMOPRODUTO FINALSERVIÇOOUTROSTipo: Ordenar colunas de forma ascendente">
                        <div id="tipoProdutoField" class="input-field fly01dt-select ">
                           <div class="select-wrapper initialized">
                              <span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-k81ntq8" value="" data-constrainwidth="undefined">
                              <ul id="select-options-k81ntq8" class="dropdown-content select-dropdown ">
                                 <li class="" data-vivaldi-spatnav-clickable="1"><span></span></li>
                                 <li class="" data-vivaldi-spatnav-clickable="1"><span>INSUMO</span></li>
                                 <li class="" data-vivaldi-spatnav-clickable="1"><span>PRODUTO FINAL</span></li>
                                 <li class="" data-vivaldi-spatnav-clickable="1"><span>SERVIÇO</span></li>
                                 <li class="" data-vivaldi-spatnav-clickable="1"><span>OUTROS</span></li>
                              </ul>
                              <select id="tipoProduto" name="tipoProduto" data-index="3" data-select-id="k81ntq8" class="initialized">
                                 <option value=""></option>
                                 <option value="Insumo">INSUMO</option>
                                 <option value="ProdutoFinal">PRODUTO FINAL</option>
                                 <option value="Servico">SERVIÇO</option>
                                 <option value="Outros">OUTROS</option>
                              </select>
                           </div>
                           <label class="truncate" for="tipoProduto">Tipo</label>
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
                  </tr>
               </tfoot>
               <tbody data-vivaldi-spatnav-clickable="1">
                  <tr role="row" class="odd">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0">001</td>
                     <td nowrap="nowrap" style="">Neugebauer</td>
                     <td nowrap="nowrap" style="">Chocolate</td>
                     <td nowrap="nowrap" style=""><span class="new badge green left" data-badge-caption=" ">PRODUTO FINAL</span></td>
                     <td nowrap="nowrap" style="">
                        <input type="hidden" class="rowRecordId" value="f604e15a-a374-4634-8a67-b4498e2ce14e"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropfly01dtdown0" data-vivaldi-spatnav-clickable="1"><i class="material-icons">more_vert</i></a>
                        <ul id="dropfly01dtdown0" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('f604e15a-a374-4634-8a67-b4498e2ce14e')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('f604e15a-a374-4634-8a67-b4498e2ce14e')">Excluir</a></li>
                        </ul>
                     </td>
                  </tr>
                  <tr role="row" class="even">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0">FONTE12V</td>
                     <td nowrap="nowrap" style="">FONTE DE ALIMENTAÇÃO GENÉRICA 12V</td>
                     <td nowrap="nowrap" style="">GRUPO DE PRODUTO</td>
                     <td nowrap="nowrap" style=""><span class="new badge green left" data-badge-caption=" ">PRODUTO FINAL</span></td>
                     <td nowrap="nowrap" style="">
                        <input type="hidden" class="rowRecordId" value="4901470b-0423-4bc7-9f7c-065caef3f745"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropfly01dtdown1" data-vivaldi-spatnav-clickable="1"><i class="material-icons">more_vert</i></a>
                        <ul id="dropfly01dtdown1" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('4901470b-0423-4bc7-9f7c-065caef3f745')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('4901470b-0423-4bc7-9f7c-065caef3f745')">Excluir</a></li>
                        </ul>
                     </td>
                  </tr>
                  <tr role="row" class="odd">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0">IN00001</td>
                     <td nowrap="nowrap" style="">Produto de Insumo 01</td>
                     <td nowrap="nowrap" style="">Insumos</td>
                     <td nowrap="nowrap" style=""><span class="new badge orange left" data-badge-caption=" ">INSUMO</span></td>
                     <td nowrap="nowrap" style="">
                        <input type="hidden" class="rowRecordId" value="f1135446-6155-4ecb-9e24-11fd4a95c14c"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropfly01dtdown2" data-vivaldi-spatnav-clickable="1"><i class="material-icons">more_vert</i></a>
                        <ul id="dropfly01dtdown2" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('f1135446-6155-4ecb-9e24-11fd4a95c14c')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('f1135446-6155-4ecb-9e24-11fd4a95c14c')">Excluir</a></li>
                        </ul>
                     </td>
                  </tr>
                  <tr role="row" class="even">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0">LAMP12</td>
                     <td nowrap="nowrap" style="">LÂMPADA 12V 5W</td>
                     <td nowrap="nowrap" style="">LÂMPADA</td>
                     <td nowrap="nowrap" style=""><span class="new badge green left" data-badge-caption=" ">PRODUTO FINAL</span></td>
                     <td nowrap="nowrap" style="">
                        <input type="hidden" class="rowRecordId" value="cf80ad72-ea50-4c2a-9d30-d4351de13b65"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropfly01dtdown3" data-vivaldi-spatnav-clickable="1"><i class="material-icons">more_vert</i></a>
                        <ul id="dropfly01dtdown3" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('cf80ad72-ea50-4c2a-9d30-d4351de13b65')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('cf80ad72-ea50-4c2a-9d30-d4351de13b65')">Excluir</a></li>
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