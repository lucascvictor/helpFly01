@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')

   <div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block fly01-main-title">DRE</h4>
               <ul class="right valign-wrapper fly01-buttons">
                  <li><a id="save" class="btn " onclick="atualizar();">Atualizar</a></li>
                  <li><a id="print" class="btn " onclick="fnImprimirDRE();">Imprimir</a></li>
                  <li><div class="fixed-action-btn"> 
                        <a id="tour" class="btn pulse orange btn-medium" onclick="initTour();" style="border-radius: 80px;"><i class="material-icons small left"/>help</i>Iniciar Tour</a>
                  </div></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <form id="fly01frm" class="col s12" method="post" novalidate="novalidate">
            <div id="dataInicialField" class="input-field col s6">
               <a href="javascript:void(0)" class="" onclick="fly01._.dataInicial.open(event)"><i class="material-icons picking">date_range</i></a>
               <div class="picker" id="dataInicial_root" tabindex="0" aria-hidden="true">
               <input id="dataInicial" name="dataInicial" class="datepicker date picker__input" value="01/04/2018" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataInicial_root" type="text"><label class="truncate active" for="dataInicial">Data Inicial</label>
            </div>
            <div id="dataFinalField" class="input-field col s6">
               <a href="javascript:void(0)" class="" onclick="fly01._.dataFinal.open(event)"><i class="material-icons picking">date_range</i></a>
               <input id="dataFinal" name="dataFinal" class="datepicker date picker__input" value="02/04/2018" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataFinal_root" type="text"><label class="truncate active" for="dataFinal">Data Final</label>
            </div>
         </form>
         <div id="fly01Cards">
            <div id="dfly01cardReceitas" class="col s12 m4">
                <div class="card" id="fly01cardReceitas" data-color="orange">
                <div class="card-content white-text orange lighten-2">
                    <span class="card-title condensed">Receitas</span>
                    <h5 class="center">R$ 12000,00</h5>
                </div>
                <div class="card-action right-align orange lighten-1"><a href="javascript:void(0)" onclick="fly01.go(&quot;/ContaReceber/List&quot;)" class="white-text ">Contas a receber</a></div>
                </div>
            </div>
            <div id="dfly01cardDespesas" class="col s12 m4">
                <div class="card" id="fly01cardDespesas" data-color="red">
                <div class="card-content white-text red lighten-2">
                    <span class="card-title condensed">Despesas</span>
                    <h5 class="center">R$ 8000,00</h5>
                </div>
                <div class="card-action right-align red lighten-1"><a href="javascript:void(0)" onclick="fly01.go(&quot;/ContaPagar/List&quot;)" class="white-text ">Contas a pagar</a></div>
                </div>
            </div>
            <div id="dfly01cardTotal" class="col s12 m4">
                <div class="card" id="fly01cardTotal" data-color="green">
                <div class="card-content white-text green lighten-2">
                    <span class="card-title condensed">Total</span>
                    <h5 class="center">R$ 4000,00</h5>
                </div>
                <div class="card-action right-align green lighten-1"><a href="javascript:void(0)" class="white-text "></a></div>
                </div>
            </div>
        </div>
         <div id="fly01dtreceitas_wrapper" class="col s12">
            <div class=""></div>
            <div id="fly01dtreceitas_processing" class="dataTables_processing" style="display: none;"></div>
            <table class="display striped responsive nowrap dataTable dtr-inline" id="fly01dtreceitas" role="grid" aria-describedby="fly01dtreceitas_info" style="width: 100%;" width="100%">
               <thead>
                  <tr id="columns" role="row">
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 982px;"><span></span></th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 233px;"><span></span></th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                  </tr>
               </tfoot>
               <tbody>
                  <tr class="group group-start">
                     <td colspan="2" nowrap="nowrap">(+) RECEITAS</td>
                  </tr>

                  <tr role="row" class="even">
                     <td tabindex="0" nowrap="nowrap"><span class="root">Receita de prestação de serviços</span></td>
                     <td nowrap="nowrap"><span class="right">R$ 5000,00</span></td>
                  </tr>
                  <tr role="row" class="odd">
                     <td tabindex="0" nowrap="nowrap"><span class="children">Manutenção de equipamentos</span></td>
                     <td nowrap="nowrap"><span class="right">R$ 5000,00</span></td>
                  </tr>

                  <tr id="ReceitaVendas" role="row" class="even">
                     <td tabindex="0" nowrap="nowrap"><span class="root">Receita Vendas</span></td>
                     <td nowrap="nowrap"><span class="right">R$ 5000,00</span></td>
                  </tr>
                  <tr id="ReceitaVendasAlimentos" role="row" class="odd">
                     <td tabindex="0" nowrap="nowrap"><span class="children">Vendas Alimentos</span></td>
                     <td nowrap="nowrap"><span class="right">R$ 2000,00</span></td>
                  </tr>
                  <tr role="row" class="even">
                     <td id="ReceitaVendasEletrônicos" tabindex="0" nowrap="nowrap"><span class="children">Vendas Eletronicos</span></td>
                     <td nowrap="nowrap"><span class="right">R$ 3000,00</span></td>
                  </tr>
                  <tr role="row" class="odd">
                     <td tabindex="0" nowrap="nowrap"><span class="root">SEM CLASSIFICAÇÃO</span></td>
                     <td nowrap="nowrap"><span class="right">R$ 2000,00</span></td>
                  </tr>
                  <tr role="row" class="odd">
                     <td tabindex="0" nowrap="nowrap"><span class="children">Receitas gerais</span></td>
                     <td nowrap="nowrap"><span class="right">R$ 2000,00</span></td>
                  </tr>

               </tbody>
            </table>
            <div class="">
               <div class="dataTables_info" id="fly01dtreceitas_info" role="status" aria-live="polite"></div>
               <div class="dataTables_paginate paging_simple_numbers" id="fly01dtreceitas_paginate" style="display: none;"><a class="paginate_button previous disabled" aria-controls="fly01dtreceitas" data-dt-idx="0" tabindex="0" id="fly01dtreceitas_previous">&lt;</a><span></span><a class="paginate_button next disabled" aria-controls="fly01dtreceitas" data-dt-idx="1" tabindex="0" id="fly01dtreceitas_next">&gt;</a></div>
            </div>
         </div>
         <div id="fly01dtdespesas_wrapper" class="col s12">
            <div class=""></div>
            <div id="fly01dtdespesas_processing" class="dataTables_processing" style="display: none;"></div>
            <table class="display striped responsive nowrap dataTable dtr-inline" id="fly01dtdespesas" role="grid" aria-describedby="fly01dtdespesas_info" style="width: 100%;" width="100%">
               <thead>
                  <tr id="columns" role="row">
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 993px;"><span></span></th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 222px;"><span></span></th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                  </tr>
               </tfoot>
               <tbody>
                  <tr class="group group-start">
                     <td colspan="2" nowrap="nowrap">(-) DESPESAS</td>
                  </tr>
                  <tr role="row" class="even">
                     <td tabindex="0" nowrap="nowrap"><span class="root">CATEGORIA DESPESA</span></td>
                     <td nowrap="nowrap"><span class="right">R$ 3000,00</span></td>
                  </tr>
                  <tr role="row" class="odd">
                     <td tabindex="0" nowrap="nowrap"><span class="children">Despesas Transporte</span></td>
                     <td nowrap="nowrap"><span class="right">R$ 1000,00</span></td>
                  </tr>
                  <tr role="row" class="even">
                     <td tabindex="0" nowrap="nowrap"><span class="children">Outras Despesas</span></td>
                     <td nowrap="nowrap"><span class="right">R$ 2000,00</span></td>
                  </tr>
                  <tr role="row" class="even">
                     <td tabindex="0" nowrap="nowrap"><span class="root">PAGAMENTO A FORNECEDORES</span></td>
                     <td nowrap="nowrap"><span class="right">R$ 5000,00</span></td>
                  </tr>
                  <tr role="row" class="even">
                     <td tabindex="0" nowrap="nowrap"><span class="children">Importações</span></td>
                     <td nowrap="nowrap"><span class="right">R$ 4000,00</span></td>
                  </tr>
                  <tr role="row" class="even">
                     <td tabindex="0" nowrap="nowrap"><span class="children">Juros</span></td>
                     <td nowrap="nowrap"><span class="right">R$ 1000,00</span></td>
                  </tr>
               </tbody>
            </table>
            <div class="">
               <div class="dataTables_info" id="fly01dtdespesas_info" role="status" aria-live="polite"></div>
               <div class="dataTables_paginate paging_simple_numbers" id="fly01dtdespesas_paginate" style="display: none;"><a class="paginate_button previous disabled" aria-controls="fly01dtdespesas" data-dt-idx="0" tabindex="0" id="fly01dtdespesas_previous">&lt;</a><span></span><a class="paginate_button next disabled" aria-controls="fly01dtdespesas" data-dt-idx="1" tabindex="0" id="fly01dtdespesas_next">&gt;</a></div>
            </div>
         </div>
      </div>
   </div>
@endsection



@section('extrascript')

@include('financeiro.dre.tour')

@endsection