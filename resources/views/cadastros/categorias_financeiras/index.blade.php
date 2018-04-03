@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')

   <div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block">Categorias Financeiras</h4>
               <ul class="right valign-wrapper fly01-buttons">
                <li>
				  	<a id="new" class="btn "  href="{{ url('/cadastros/categoriasfinanceiras/create') }}">Novo</a>
				</li>
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
                     <th class="sorting_asc" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 163px;" aria-sort="ascending" aria-label="searchCódigo: Ordenar colunas de forma descendente">
                        <div id="codigoField" class="input-field fly01dt-filter "><input id="codigo" name="codigo" type="search"><i class="material-icons">search</i><label class="truncate" for="codigo">Código</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 169px;" aria-label="searchDescrição: Ordenar colunas de forma ascendente">
                        <div id="descricaoField" class="input-field fly01dt-filter "><input id="descricao" name="descricao" type="search" data-index="1"><i class="material-icons">search</i><label class="truncate" for="descricao">Descrição</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 163px;" aria-label="SintéticoAnalíticoClasse: Ordenar colunas de forma ascendente">
                        <div id="classeField" class="input-field fly01dt-select ">
                           <div class="select-wrapper initialized">
                              <span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-jmcrt0t" value="">
                              <ul id="select-options-jmcrt0t" class="dropdown-content select-dropdown" style="white-space: nowrap; position: absolute; top: 45px; left: 0px; display: none; opacity: 1;">
                                 <li class=""><span></span></li>
                                 <li class=""><span>Sintético</span></li>
                                 <li class=""><span>Analítico</span></li>
                              </ul>
                              <select id="classe" name="classe" data-index="2" data-select-id="jmcrt0t" class="initialized">
                                 <option value=""></option>
                                 <option value="Sintetico">Sintético</option>
                                 <option value="Analitico">Analítico</option>
                              </select>
                           </div>
                           <label class="truncate active" for="classe">Classe</label>
                        </div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 163px;" aria-label="searchCategoria Superior: Ordenar colunas de forma ascendente">
                        <div id="categoriaPai_descricaoField" class="input-field fly01dt-filter "><input id="categoriaPai_descricao" name="categoriaPai_descricao" type="search" data-index="3"><i class="material-icons">search</i><label class="truncate" for="categoriaPai_descricao">Categoria Superior</label></div>
                     </th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 24px;" aria-label=""><span></span></th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=0;?>
                  @foreach($categories as $category)
                  <tr role="row" class="odd" @if($category->classe == 1)id="CatSintVendas" @else id="CatAnalVendas" @endif>
                     <td class="sorting_1" tabindex="0" nowrap="nowrap">{{ $category->codigo }} </td>
                     <td nowrap="nowrap">{{ $category->descricao }} </td>
                     <td nowrap="nowrap">@if($category->classe == 1) Sintético @else Analítico @endif</td>
                     <td nowrap="nowrap">@if($category->classe == 1)  @else @foreach($categories as $cat)@if($cat->codigo == $category->categoriaPaiId){{ $cat->descricao }}@endif @endforeach @endif </td>
                     <td nowrap="nowrap">
                        <input type="hidden" class="rowRecordId" value="742babcc-f879-4193-a009-7b14237557f2"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown0"><i class="material-icons">more_vert</i></a>
                        <ul id="dropdown{{$category->id}}" class="dropdown-content">
                           <li><a href="{{ url('/') }}">Editar</a></li>
                           <li><a href="{{ url('/') }}">Excluir</a></li>
                        </ul>
                     </td>
                  </tr>
                  <?php $i++; ?>
                  @endforeach
               </tbody>
            </table>
            <div class="">
               <div class="dataTables_info" id="fly01dt_info" role="status" aria-live="polite"></div>
               <div class="dataTables_paginate paging_simple_numbers" id="fly01dt_paginate" style="display: none;"><a class="paginate_button previous disabled" aria-controls="fly01dt" data-dt-idx="0" tabindex="0" id="fly01dt_previous">Anterior</a><span><a class="paginate_button current" aria-controls="fly01dt" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="fly01dt" data-dt-idx="2" tabindex="0" id="fly01dt_next">Próximo</a></div>
            </div>
         </div>
      </div>
   </div>

<!-- Element Showed -->
<div class="fixed-action-btn">
<a id="menu" class="waves-effect waves-light btn-large btn-floating orange" ><i class="material-icons">menu</i></a>
</div>

<!-- Tap Target Structure -->
<div class="tap-target orange lighten-2" data-activates="menu">
      <div class="tap-target-content">
            <h5 style="color:black" class="right">Categorias Financeiras</h5>
            <p style="color:black" class="right">As categorias financeiras servem para proporcionar um melhor controle de suas despesas e receitas dentro do sistema, sempre que criado um título financeiro utribuímos a ele uma categoria.  <a onclick="initTour();" class="btn btn-small orange"> Clique aqui</a> para aprender como
            realizar o cadastro de uma categoria financeira.</p>
      </div>
</div>
@endsection


@section('extrascript')

@include('cadastros.categorias_financeiras.tourIndex')

<script>
window.onload = function()
{
      document.getElementById("menu").click();
}

$("#menu").click(function(){
      $('.tap-target').tapTarget('open');
});
      
</script>

					
@endsection
														