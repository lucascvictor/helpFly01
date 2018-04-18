@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
   <div id="headTop" class="z-depth-0-half pinned">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block" data-intro="Hello step one!">Fluxo de Caixa</h4>
               <ul class="right valign-wrapper fly01-buttons">
                  <li><a id="todo-list" class="btn" onCLick="atualizar();">Atualizar</a></li>
                  <li>
						<div class="fixed-action-btn"> 
							<a id="tour" class="btn pulse orange btn-medium" onclick="initTour();" style="border-radius: 80px;"><i class="material-icons small left"/>help</i>Iniciar Tour</a>
						</div>
			      </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="container" >
      <div class="row fly01areatotal">
         
        <form id="fly01frm" class="col s12" method="post" novalidate="novalidate">
        <div id="dataInicialField" class="input-field col s6 m3 l4">
            <a href="javascript:void(0)" class="" onclick="fly01._.dataInicial.open(event)"><i class="material-icons picking">date_range</i></a>
            <input id="dataInicial" name="dataInicial" class="datepicker date picker__input valid" value="21/03/2018" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataInicial_root" aria-invalid="false" type="text"><label class="truncate active" for="dataInicial" data-error="Digite uma data válida.">Data Inicial</label>
        </div>
        <div id="dataFinalField" class="input-field col s6 m3 l4">
            <a href="javascript:void(0)" class="" onclick="fly01._.dataFinal.open(event)"><i class="material-icons picking">date_range</i></a>
            <input id="dataFinal" name="dataFinal" class="datepicker date picker__input valid" value="30/04/2018" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataFinal_root" aria-invalid="false" type="text"><label class="truncate active" for="dataFinal">Data Final</label>
        </div>
        <div id="fly01btngrpField" class="input-field col s12 m6 l4">
            <label class="truncate active" for="fly01btngrp">Selecione o período</label>
            <div id="fly01btngrp" class="btn-group input-field">
            <?php $pagina = $_SERVER['PHP_SELF'];?>
            <a href="{{ url('/financeiro/fluxodecaixa/day') }}"   id="btnDia" name="btnDia" class="btn btn-default col s4 @if($pagina == '/index.php/financeiro/fluxodecaixa/day') active @endif" value="Dia">Dia</a>
            <a href="{{ url('/financeiro/fluxodecaixa/week') }}"  id="btnSemana" name="btnSemana" class="btn col s4 @if($pagina == '/index.php/financeiro/fluxodecaixa/week') active @endif" value="Semana" >Semana</a>
            <a href="{{ url('/financeiro/fluxodecaixa') }}"  id="btnMes" name="btnMes" class="btn col s4 @if($pagina == '/index.php/financeiro/fluxodecaixa') active @endif" value="Mês">Mês</a>
            </div>
        </div>
        </form>


		 <div class="col s12 m12" id="areageral">
         <div id="dfly01cardSaldo" class="col s12 m3 saldo_atual">
            <div class="card" id="fly01cardSaldo" data-color="orange">
               <div class="card-content white-text orange lighten-2">
                  <span class="card-title condensed">Saldo atual</span>
                  <h5 class="center">{{ $saldo[4] }}</h5>
               </div>
               <div class="card-action right-align orange lighten-1"><a href="{{ url('/financeiro/extrato') }}" class="white-text ">Ver mais</a></div>
            </div>
         </div>
         <div id="dfly01cardCP" class="col s12 m3" data-step="<h2>Descrição</h2> Um texto sugestivo para o conjunto de 'regras' do grupo tributário">
            <div class="card" id="fly01cardCP" data-color="red">
               <div class="card-content white-text red lighten-2">
                  <span class="card-title condensed">A pagar</span>
                  <h5 class="center">{{ ($pag[4]) }}</h5>
               </div>
               <div class="card-action right-align red lighten-1"><a href="{{ url('/financeiro/contasapagar') }}" class="white-text ">Ver mais</a></div>
            </div>
         </div>
         <div id="dfly01cardCR" class="col s12 m3">
            <div class="card" id="fly01cardCR" data-color="green">
               <div class="card-content white-text green lighten-2">
                  <span class="card-title condensed">A receber</span>
                  <h5 class="center">{{ $rec[4] }}</h5>
               </div>
               <div class="card-action right-align green lighten-1"><a href="{{ url('/financeiro/contasareceber') }}" class="white-text ">Ver mais</a></div>
            </div>
         </div>
		 <div id="dfly01cardSC" class="col s12 m3">
            <div class="card" id="fly01cardSC" data-color="blue">
                <div class="card-content white-text blue lighten-2">
                <span class="card-title condensed">Saldo Projetado</span>
                <h5 class="center">{{ $projetado }}</h5>
                </div>
                <div class="card-action right-align blue lighten-1">
            <a href="javascript:void(0)" class="white-text "></a>
            </div>
        </div>
        </div>
         </div>
         
        <div class="col m1 l1"> </div>
         <div id="dfly01chart" class="col s12 m10 l10">
            <div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor">
               <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                  <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
               </div>
               <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                  <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
               </div>
            </div>
            <h6></h6>
            <canvas id="fly01chart" style="display: block; width: 1142px; height: 571px;" width="1142" height="571" class="chartjs-render-monitor"></canvas>
         
         </div>
         <div class="col m1 l1"> </div>

         <div class="input-field col s12">
            <div id="fly01dt_wrapper" class="col s12">
               <div class=""></div>
               <div id="fly01dt_processing" class="dataTables_processing" style="display: none;"></div>
               <table class="display striped responsive nowrap dataTable dtr-inline" id="fly01dt" role="grid" aria-describedby="fly01dt_info" style="width: 100%;" width="100%">
                  <thead>
                     <tr id="columns" role="row">
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 202px;"><span>Data</span></th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 342px;"><span>Total Recebimentos</span></th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 314px;"><span>Total Pagamentos</span></th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 212px;"><span>Saldo Final</span></th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 12px;"><span></span></th>
                     </tr>
                  </thead>
                  <tfoot>
                     <tr>
                        <th rowspan="1" colspan="1"></th>
                        <th rowspan="1" colspan="1"></th>
                        <th rowspan="1" colspan="1"></th>
                        <th rowspan="1" colspan="1"></th>
                        <th rowspan="1" colspan="1"></th>
                     </tr>
                  </tfoot>
                  <tbody>
                     <tr role="row" class="odd">
                        <td tabindex="0">{{ date("d/m/y") }}</td>
                        <td>{{ $rec[0] }}</td>
                        <td>{{ $pag[0] }}</td>
                        <td>{{ $saldo[0] }}</td>
                        <td><input class="rowRecordId" value="undefined" type="hidden"></td>
                     </tr>
                     <tr role="row" class="even">
                        <td tabindex="0">{{ date("d/m/y") }}</td>
                        <td>{{ $rec[1] }}</td>
                        <td>{{ $pag[1] }}</td>
                        <td>{{ $saldo[1] }}</td>
                        <td><input class="rowRecordId" value="undefined" type="hidden"></td>
                     </tr>
                     <tr role="row" class="odd">
                        <td tabindex="0">{{ date("d/m/y") }}</td>
                        <td>{{ $rec[2] }}</td>
                        <td>{{ $pag[2] }}</td>
                        <td>{{ $saldo[2] }}</td>
                        <td><input class="rowRecordId" value="undefined" type="hidden"></td>
                     </tr>
                     <tr role="row" class="even">
                        <td tabindex="0">{{ date("d/m/y") }}</td>
                        <td>{{ $rec[3] }}</td>
                        <td>{{ $pag[3] }}</td>
                        <td>{{ $saldo[3] }}</td>
                        <td><input class="rowRecordId" value="undefined" type="hidden"></td>
                     </tr>
                     <tr role="row" class="odd">
                        <td tabindex="0">{{ date("d/m/y") }}</td>
                        <td>{{ $rec[4] }}</td>
                        <td>{{ $pag[4] }}</td>
                        <td>{{ $saldo[4] }}</td>
                        <td><input class="rowRecordId" value="undefined" type="hidden"></td>
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
   </div>
    @include('financeiro.fluxo_de_caixa.enjoyhint')
@endsection


@section('extrascript')

    @include('financeiro.fluxo_de_caixa.datachart')

    @include('financeiro.fluxo_de_caixa.tour')

@endsection
										