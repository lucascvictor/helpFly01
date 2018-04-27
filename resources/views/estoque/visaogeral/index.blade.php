@extends('layouts.default')

@section('title', 'Help Fly01')


@section('content')
   <div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block fly01-main-title">Visão Geral</h4>
               <ul class="right valign-wrapper fly01-buttons">
                  <li><a id="atualizar" class="btn " onclick="fnAtualizarPeriodo();">Atualizar</a></li>
                  <li><a id="posicaoatual" class="btn " onclick="fnPosicaoAtual();">Posição Atual</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <form id="fly01frm" class="col s12" method="post" novalidate="novalidate" data-vivaldi-spatnav-clickable="1">
            <div id="dataInicialField" class="input-field col s6 m3 l4">
               <a href="javascript:void(0)" class="" onclick="fly01._.dataInicial.open(event)"><i class="material-icons picking">date_range</i></a>
               <input id="dataInicial" type="text" name="dataInicial" class="datepicker date picker__input" value="31/03/2018" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataInicial_root"><label class="truncate active" for="dataInicial">Data Inicial</label>
            </div>
            <div id="dataFinalField" class="input-field col s6 m3 l4">
               <a href="javascript:void(0)" class="" onclick="fly01._.dataFinal.open(event)"><i class="material-icons picking">date_range</i></a>
               <input id="dataFinal" type="text" name="dataFinal" class="datepicker date picker__input" value="25/04/2018" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataFinal_root"><label class="truncate active" for="dataFinal">Data Final</label>
            </div>
            <div id="fly01btngrpField" class="input-field col s12 m6 l4">
               <label class="truncate active" for="fly01btngrp">Selecione o período</label>
               <div id="fly01btngrp" class="btn-group input-field" data-vivaldi-spatnav-clickable="1"><input id="btnDia" type="button" name="btnDia" class="btn col s4 " onclick="fnAtualizarPeriodo(&quot;dia&quot;)" value="Dia"><input id="btnSemana" type="button" name="btnSemana" class="btn col s4 " onclick="fnAtualizarPeriodo(&quot;semana&quot;)" value="Semana"><input id="btnMes" type="button" name="btnMes" class="btn col s4 active" onclick="fnAtualizarPeriodo(&quot;mes&quot;)" value="Mês"></div>
            </div>
         </form>
         <form id="fly01frm" class="col s12" method="post">
            <div id="sssField" class="input-field col s12">
               <h5 id="sss" class="thin-bordered">Produtos</h5>
            </div>
         </form>
         <div id="cardProdutosMaisMovimentados_wrapper" class="col s12 m6" data-vivaldi-spatnav-clickable="1">
            <div class=""></div>
            <div id="cardProdutosMaisMovimentados_processing" class="dataTables_processing" style="display: none;"></div>
            <table class="display striped responsive nowrap dataTable dtr-inline" width="100%" id="cardProdutosMaisMovimentados" role="grid" aria-describedby="cardProdutosMaisMovimentados_info" style="width: 100%;">
               <thead>
                  <tr id="columns" role="row">
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 343px;"><span>Mais movimentados</span></th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th rowspan="1" colspan="1"></th>
                  </tr>
               </tfoot>
               <tbody data-vivaldi-spatnav-clickable="1">
                  <tr role="row" class="odd">
                     <td nowrap="nowrap" tabindex="0">
                        <div><span class="left-align col m9 truncate">FONTE DE ALIMENTAÇÃO GENÉRICA 12V</span><strong class="col m3 right-align green-text">1</strong></div>
                     </td>
                  </tr>
               </tbody>
            </table>
            <div class="">
               <div class="dataTables_info" id="cardProdutosMaisMovimentados_info" role="status" aria-live="polite"></div>
               <div class="dataTables_paginate paging_simple_numbers" id="cardProdutosMaisMovimentados_paginate" style="display: none;"><a class="paginate_button previous disabled" aria-controls="cardProdutosMaisMovimentados" data-dt-idx="0" tabindex="0" id="cardProdutosMaisMovimentados_previous" data-vivaldi-spatnav-clickable="1">&lt;</a><span></span><a class="paginate_button next disabled" aria-controls="cardProdutosMaisMovimentados" data-dt-idx="1" tabindex="0" id="cardProdutosMaisMovimentados_next" data-vivaldi-spatnav-clickable="1">&gt;</a></div>
            </div>
         </div>
         <div id="cardProdutosMenosMovimentados_wrapper" class="col s12 m6" data-vivaldi-spatnav-clickable="1">
            <div class=""></div>
            <div id="cardProdutosMenosMovimentados_processing" class="dataTables_processing" style="display: none;"></div>
            <table class="display striped responsive nowrap dataTable dtr-inline" width="100%" id="cardProdutosMenosMovimentados" role="grid" aria-describedby="cardProdutosMenosMovimentados_info" style="width: 100%;">
               <thead>
                  <tr id="columns" role="row">
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 343px;"><span>Menos movimentados</span></th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th rowspan="1" colspan="1"></th>
                  </tr>
               </tfoot>
               <tbody data-vivaldi-spatnav-clickable="1">
                  <tr role="row" class="odd">
                     <td nowrap="nowrap" tabindex="0">
                        <div><span class="left-align col m9 truncate">FONTE DE ALIMENTAÇÃO GENÉRICA 12V</span><strong class="col m3 right-align green-text">1</strong></div>
                     </td>
                  </tr>
               </tbody>
            </table>
            <div class="">
               <div class="dataTables_info" id="cardProdutosMenosMovimentados_info" role="status" aria-live="polite"></div>
               <div class="dataTables_paginate paging_simple_numbers" id="cardProdutosMenosMovimentados_paginate" style="display: none;"><a class="paginate_button previous disabled" aria-controls="cardProdutosMenosMovimentados" data-dt-idx="0" tabindex="0" id="cardProdutosMenosMovimentados_previous" data-vivaldi-spatnav-clickable="1">&lt;</a><span></span><a class="paginate_button next disabled" aria-controls="cardProdutosMenosMovimentados" data-dt-idx="1" tabindex="0" id="cardProdutosMenosMovimentados_next" data-vivaldi-spatnav-clickable="1">&gt;</a></div>
            </div>
         </div>
         <div id="cardProdutosSaldoZerado_wrapper" class="col s12 m6" data-vivaldi-spatnav-clickable="1">
            <div class=""></div>
            <div id="cardProdutosSaldoZerado_processing" class="dataTables_processing" style="display: none;"></div>
            <table class="display striped responsive nowrap dataTable dtr-inline" width="100%" id="cardProdutosSaldoZerado" role="grid" aria-describedby="cardProdutosSaldoZerado_info" style="width: 100%;">
               <thead>
                  <tr id="columns" role="row">
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 343px;"><span>Saldo zerado</span></th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th rowspan="1" colspan="1"></th>
                  </tr>
               </tfoot>
               <tbody data-vivaldi-spatnav-clickable="1">
                  <tr role="row" class="odd">
                     <td nowrap="nowrap" tabindex="0">
                        <div><span class="left-align col m9 truncate">Produto de Insumo 01</span><strong class="col m3 right-align green-text">0</strong></div>
                     </td>
                  </tr>
                  <tr role="row" class="even">
                     <td nowrap="nowrap" tabindex="0">
                        <div><span class="left-align col m9 truncate">Neugebauer</span><strong class="col m3 right-align green-text">0</strong></div>
                     </td>
                  </tr>
               </tbody>
            </table>
            <div class="">
               <div class="dataTables_info" id="cardProdutosSaldoZerado_info" role="status" aria-live="polite"></div>
               <div class="dataTables_paginate paging_simple_numbers" id="cardProdutosSaldoZerado_paginate" style="display: none;"><a class="paginate_button previous disabled" aria-controls="cardProdutosSaldoZerado" data-dt-idx="0" tabindex="0" id="cardProdutosSaldoZerado_previous" data-vivaldi-spatnav-clickable="1">&lt;</a><span><a class="paginate_button current" aria-controls="cardProdutosSaldoZerado" data-dt-idx="1" tabindex="0" data-vivaldi-spatnav-clickable="1">1</a></span><a class="paginate_button next disabled" aria-controls="cardProdutosSaldoZerado" data-dt-idx="2" tabindex="0" id="cardProdutosSaldoZerado_next" data-vivaldi-spatnav-clickable="1">&gt;</a></div>
            </div>
         </div>
         <div id="cardProdutosSaldoAbaixoMinimo_wrapper" class="col s12 m6" data-vivaldi-spatnav-clickable="1">
            <div class=""></div>
            <div id="cardProdutosSaldoAbaixoMinimo_processing" class="dataTables_processing" style="display: none;"></div>
            <table class="display striped responsive nowrap dataTable dtr-inline" width="100%" id="cardProdutosSaldoAbaixoMinimo" role="grid" aria-describedby="cardProdutosSaldoAbaixoMinimo_info" style="width: 100%;">
               <thead>
                  <tr id="columns" role="row">
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 343px;"><span>Saldo abaixo do mínimo</span></th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th rowspan="1" colspan="1"></th>
                  </tr>
               </tfoot>
               <tbody data-vivaldi-spatnav-clickable="1">
                  <tr class="odd">
                     <td valign="top" colspan="1" class="dataTables_empty" nowrap="nowrap">Nenhum registro encontrado</td>
                  </tr>
               </tbody>
            </table>
            <div class="">
               <div class="dataTables_info" id="cardProdutosSaldoAbaixoMinimo_info" role="status" aria-live="polite"></div>
               <div class="dataTables_paginate paging_simple_numbers" id="cardProdutosSaldoAbaixoMinimo_paginate" style="display: none;"><a class="paginate_button previous disabled" aria-controls="cardProdutosSaldoAbaixoMinimo" data-dt-idx="0" tabindex="0" id="cardProdutosSaldoAbaixoMinimo_previous" data-vivaldi-spatnav-clickable="1">&lt;</a><span></span><a class="paginate_button next disabled" aria-controls="cardProdutosSaldoAbaixoMinimo" data-dt-idx="1" tabindex="0" id="cardProdutosSaldoAbaixoMinimo_next" data-vivaldi-spatnav-clickable="1">&gt;</a></div>
            </div>
         </div>
      </div>
   </div>
   @endsection