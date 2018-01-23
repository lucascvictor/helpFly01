@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')


<div id="headTop" class="z-depth-0-half">
  <div class="container">
    <div class="row"><div class="col s12 fly01-main-header">
      <h4 class="thin inline-block">Grupos de Produtos</h4>
      <ul class="right valign-wrapper fly01-buttons"><li>
        <a id="new" class="btn " onclick="fnNovo();">Novo</a>
      </li></ul></div></div></div></div><div class="container"><div class="row"><div id="fly01dt_wrapper" class="col s12 no-footer" data-vivaldi-spatnav-clickable="1">
        <div class=""></div><div id="fly01dt_processing" class="dataTables_processing" style="display: none;">
        </div>
        <table class="display striped responsive nowrap dataTable no-footer dtr-inline" width="100%" id="fly01dt" role="grid" aria-describedby="fly01dt_info" style="width: 100%;">
          <thead>
            <tr id="columns" role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 561px;" aria-sort="ascending" aria-label="searchCódigo: Ordenar colunas de forma descendente">
              <div id="idField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1">
                <input id="id" name="id" type="search">
              </input><i class="material-icons">search</i>
              <label class="truncate" for="id">Código</label>
            </div>
          </th>
          <th class="sorting" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 562px;" aria-label="searchDescrição: Ordenar colunas de forma ascendente"><div id="descriptionField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1"><input id="description" name="description" type="search" data-index="1"></input><i class="material-icons">search</i><label class="truncate" for="description">Descrição</label></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 81px;" aria-label=""><span></span></th></tr></thead><tbody data-vivaldi-spatnav-clickable="1"><tr role="row" class="odd"><td class="sorting_1" tabindex="0" nowrap="nowrap">0001</td><td nowrap="nowrap">GRUPO GERAL</td><td nowrap="nowrap"><input type="hidden" class="rowRecordId" value="0001"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown0" data-vivaldi-spatnav-clickable="1"><i class="material-icons">more_vert</i></a><ul id="dropdown0" class="dropdown-content"><li><a href="javascript:void(0)" onclick="fnEditar(&#39;0001&#39;)">Editar</a></li><li><a href="javascript:void(0)" onclick="fnExcluir(&#39;0001&#39;)">Excluir</a></li></ul></td></tr><tr role="row" class="even"><td class="sorting_1" tabindex="0" nowrap="nowrap">0002</td><td nowrap="nowrap">TESTE</td><td nowrap="nowrap"><input type="hidden" class="rowRecordId" value="0002"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown1" data-vivaldi-spatnav-clickable="1"><i class="material-icons">more_vert</i></a><ul id="dropdown1" class="dropdown-content"><li><a href="javascript:void(0)" onclick="fnEditar(&#39;0002&#39;)">Editar</a></li><li><a href="javascript:void(0)" onclick="fnExcluir(&#39;0002&#39;)">Excluir</a></li></ul></td></tr></tbody></table><div class=""><div class="dataTables_info" id="fly01dt_info" role="status" aria-live="polite"></div><div class="dataTables_paginate paging_simple_numbers" id="fly01dt_paginate" style="display: none;"><a class="paginate_button previous disabled" aria-controls="fly01dt" data-dt-idx="0" tabindex="0" id="fly01dt_previous" data-vivaldi-spatnav-clickable="1">Anterior</a><span><a class="paginate_button current" aria-controls="fly01dt" data-dt-idx="1" tabindex="0" data-vivaldi-spatnav-clickable="1">1</a></span><a class="paginate_button next disabled" aria-controls="fly01dt" data-dt-idx="2" tabindex="0" id="fly01dt_next" data-vivaldi-spatnav-clickable="1">Próximo</a></div></div></div></div></div>


@endsection
