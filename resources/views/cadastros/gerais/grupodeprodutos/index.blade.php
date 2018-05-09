@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
   <div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block fly01-main-title">Grupo de Produtos</h4>
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
                     <th class="sorting_asc" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 689px;" aria-sort="ascending" aria-label="Descrição: Ordenar colunas de forma descendente">
                        <div id="descricaoField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="descricao" name="descricao" type="search"><label class="truncate" for="descricao">Descrição</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 0px;" aria-label="INSUMOPRODUTO FINALSERVIÇOOUTROSTipo de Produto: Ordenar colunas de forma ascendente">
                        <div id="tipoProdutoField" class="input-field fly01dt-select ">
                           <div class="select-wrapper initialized">
                              <span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-zg1pfzs" value="" data-constrainwidth="undefined">
                              <ul id="select-options-zg1pfzs" class="dropdown-content select-dropdown ">
                                 <li class="" data-vivaldi-spatnav-clickable="1"><span></span></li>
                                 <li class="" data-vivaldi-spatnav-clickable="1"><span>INSUMO</span></li>
                                 <li class="" data-vivaldi-spatnav-clickable="1"><span>PRODUTO FINAL</span></li>
                                 <li class="" data-vivaldi-spatnav-clickable="1"><span>SERVIÇO</span></li>
                                 <li class="" data-vivaldi-spatnav-clickable="1"><span>OUTROS</span></li>
                              </ul>
                              <select id="tipoProduto" name="tipoProduto" data-index="1" data-select-id="zg1pfzs" class="initialized">
                                 <option value=""></option>
                                 <option value="Insumo">INSUMO</option>
                                 <option value="ProdutoFinal">PRODUTO FINAL</option>
                                 <option value="Servico">SERVIÇO</option>
                                 <option value="Outros">OUTROS</option>
                              </select>
                           </div>
                           <label class="truncate" for="tipoProduto">Tipo de Produto</label>
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
                  </tr>
               </tfoot>
               <tbody data-vivaldi-spatnav-clickable="1">
                  <tr role="row" class="odd">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0">Cafés</td>
                     <td nowrap="nowrap" style=""><span class="new badge green left" data-badge-caption=" ">PRODUTO FINAL</span></td>
                     <td nowrap="nowrap" style="">
                        <input type="hidden" class="rowRecordId" value="4ef49b0a-d3c1-4c2a-85b2-22fa24962c38"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropfly01dtdown0" data-vivaldi-spatnav-clickable="1"><i class="material-icons">more_vert</i></a>
                        <ul id="dropfly01dtdown0" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('4ef49b0a-d3c1-4c2a-85b2-22fa24962c38')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('4ef49b0a-d3c1-4c2a-85b2-22fa24962c38')">Excluir</a></li>
                        </ul>
                     </td>
                  </tr>
                  <tr role="row" class="even">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0">Chocolate</td>
                     <td nowrap="nowrap" style=""><span class="new badge green left" data-badge-caption=" ">PRODUTO FINAL</span></td>
                     <td nowrap="nowrap" style="">
                        <input type="hidden" class="rowRecordId" value="162c40fe-0374-4e0d-b99f-2ad6016ce9cc"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropfly01dtdown1" data-vivaldi-spatnav-clickable="1"><i class="material-icons">more_vert</i></a>
                        <ul id="dropfly01dtdown1" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('162c40fe-0374-4e0d-b99f-2ad6016ce9cc')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('162c40fe-0374-4e0d-b99f-2ad6016ce9cc')">Excluir</a></li>
                        </ul>
                     </td>
                  </tr>
                  <tr role="row" class="odd">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0">Insumos Café</td>
                     <td nowrap="nowrap" style=""><span class="new badge orange left" data-badge-caption=" ">INSUMO</span></td>
                     <td nowrap="nowrap" style="">
                        <input type="hidden" class="rowRecordId" value="1d75f4a7-c37f-40a9-ad05-ea786554b914"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropfly01dtdown2" data-vivaldi-spatnav-clickable="1"><i class="material-icons">more_vert</i></a>
                        <ul id="dropfly01dtdown2" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('1d75f4a7-c37f-40a9-ad05-ea786554b914')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('1d75f4a7-c37f-40a9-ad05-ea786554b914')">Excluir</a></li>
                        </ul>
                     </td>
                  </tr>
                  <tr role="row" class="even">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0">Maquinário Café</td>
                     <td nowrap="nowrap" style=""><span class="new badge green left" data-badge-caption=" ">PRODUTO FINAL</span></td>
                     <td nowrap="nowrap" style="">
                        <input type="hidden" class="rowRecordId" value="6bb15fdf-1205-4f52-af4f-3d38d00a103e"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropfly01dtdown3" data-vivaldi-spatnav-clickable="1"><i class="material-icons">more_vert</i></a>
                        <ul id="dropfly01dtdown3" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('6bb15fdf-1205-4f52-af4f-3d38d00a103e')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('6bb15fdf-1205-4f52-af4f-3d38d00a103e')">Excluir</a></li>
                        </ul>
                     </td>
                  </tr>
                  <tr role="row" class="odd">
                     <td class="sorting_1" nowrap="nowrap" tabindex="0">Preparação Comidas</td>
                     <td nowrap="nowrap" style=""><span class="new badge orange left" data-badge-caption=" ">INSUMO</span></td>
                     <td nowrap="nowrap" style="">
                        <input type="hidden" class="rowRecordId" value="adafd92b-b785-4e1f-a478-e3be0483185d"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropfly01dtdown4" data-vivaldi-spatnav-clickable="1"><i class="material-icons">more_vert</i></a>
                        <ul id="dropfly01dtdown4" class="dropdown-content">
                           <li><a href="javascript:void(0)" onclick="fnEditar('adafd92b-b785-4e1f-a478-e3be0483185d')">Editar</a></li>
                           <li><a href="javascript:void(0)" onclick="fnExcluir('adafd92b-b785-4e1f-a478-e3be0483185d')">Excluir</a></li>
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