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
         <div class="picker__holder">
            <div class="picker__frame">
               <div class="picker__wrap">
                  <div class="picker__box">
                     <div class="picker__date-display">
                        <div class="picker__year-display">
                           <div>2018</div>
                        </div>
                        <span class="picker__weekday-display">Ter, </span><span class="picker__day-display">1 </span><span class="picker__month-display">Mai</span>
                     </div>
                     <div class="picker__container__wrapper">
                        <div class="picker__calendar-container">
                           <div class="picker__header">
                              <select class="picker__select--month browser-default" disabled="" aria-controls="dataInicial_table" title="Escolha um mês">
                                 <option value="0">Janeiro</option>
                                 <option value="1">Fevereiro</option>
                                 <option value="2">Março</option>
                                 <option value="3">Abril</option>
                                 <option value="4" selected="">Maio</option>
                                 <option value="5">Junho</option>
                                 <option value="6">Julho</option>
                                 <option value="7">Agosto</option>
                                 <option value="8">Setembro</option>
                                 <option value="9">Outubro</option>
                                 <option value="10">Novembro</option>
                                 <option value="11">Dezembro</option>
                              </select>
                              <select class="picker__select--year browser-default" disabled="" aria-controls="dataInicial_table" title="Escolha um ano">
                                 <option value="2013">2013</option>
                                 <option value="2014">2014</option>
                                 <option value="2015">2015</option>
                                 <option value="2016">2016</option>
                                 <option value="2017">2017</option>
                                 <option value="2018" selected="">2018</option>
                                 <option value="2019">2019</option>
                                 <option value="2020">2020</option>
                                 <option value="2021">2021</option>
                                 <option value="2022">2022</option>
                                 <option value="2023">2023</option>
                              </select>
                              <div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="dataInicial_table" title="Anterior"> </div>
                              <div class="picker__nav--next" data-nav="1" role="button" aria-controls="dataInicial_table" title="Proximo"> </div>
                           </div>
                           <table class="picker__table" id="dataInicial_table" role="grid" aria-controls="dataInicial" aria-readonly="true">
                              <thead>
                                 <tr>
                                    <th class="picker__weekday" scope="col" title="Domingo">D</th>
                                    <th class="picker__weekday" scope="col" title="Segunda">S</th>
                                    <th class="picker__weekday" scope="col" title="Terça">T</th>
                                    <th class="picker__weekday" scope="col" title="Quarta">Q</th>
                                    <th class="picker__weekday" scope="col" title="Quinta">Q</th>
                                    <th class="picker__weekday" scope="col" title="Sexta">S</th>
                                    <th class="picker__weekday" scope="col" title="Sábado">S</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--outfocus" data-pick="1524970800000" role="gridcell" aria-label="29/04/2018" tabindex="0">29</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--outfocus" data-pick="1525057200000" role="gridcell" aria-label="30/04/2018" tabindex="0">30</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus picker__day--selected picker__day--highlighted" data-pick="1525143600000" role="gridcell" aria-label="01/05/2018" aria-selected="true" aria-activedescendant="true" tabindex="0">1</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1525230000000" role="gridcell" aria-label="02/05/2018" tabindex="0">2</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1525316400000" role="gridcell" aria-label="03/05/2018" tabindex="0">3</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1525402800000" role="gridcell" aria-label="04/05/2018" tabindex="0">4</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1525489200000" role="gridcell" aria-label="05/05/2018" tabindex="0">5</div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1525575600000" role="gridcell" aria-label="06/05/2018" tabindex="0">6</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1525662000000" role="gridcell" aria-label="07/05/2018" tabindex="0">7</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1525748400000" role="gridcell" aria-label="08/05/2018" tabindex="0">8</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1525834800000" role="gridcell" aria-label="09/05/2018" tabindex="0">9</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1525921200000" role="gridcell" aria-label="10/05/2018" tabindex="0">10</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1526007600000" role="gridcell" aria-label="11/05/2018" tabindex="0">11</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1526094000000" role="gridcell" aria-label="12/05/2018" tabindex="0">12</div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1526180400000" role="gridcell" aria-label="13/05/2018" tabindex="0">13</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1526266800000" role="gridcell" aria-label="14/05/2018" tabindex="0">14</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1526353200000" role="gridcell" aria-label="15/05/2018" tabindex="0">15</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1526439600000" role="gridcell" aria-label="16/05/2018" tabindex="0">16</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1526526000000" role="gridcell" aria-label="17/05/2018" tabindex="0">17</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1526612400000" role="gridcell" aria-label="18/05/2018" tabindex="0">18</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1526698800000" role="gridcell" aria-label="19/05/2018" tabindex="0">19</div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1526785200000" role="gridcell" aria-label="20/05/2018" tabindex="0">20</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus picker__day--today" data-pick="1526871600000" role="gridcell" aria-label="21/05/2018" tabindex="0">21</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1526958000000" role="gridcell" aria-label="22/05/2018" tabindex="0">22</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1527044400000" role="gridcell" aria-label="23/05/2018" tabindex="0">23</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1527130800000" role="gridcell" aria-label="24/05/2018" tabindex="0">24</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1527217200000" role="gridcell" aria-label="25/05/2018" tabindex="0">25</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1527303600000" role="gridcell" aria-label="26/05/2018" tabindex="0">26</div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1527390000000" role="gridcell" aria-label="27/05/2018" tabindex="0">27</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1527476400000" role="gridcell" aria-label="28/05/2018" tabindex="0">28</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1527562800000" role="gridcell" aria-label="29/05/2018" tabindex="0">29</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1527649200000" role="gridcell" aria-label="30/05/2018" tabindex="0">30</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--infocus" data-pick="1527735600000" role="gridcell" aria-label="31/05/2018" tabindex="0">31</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--outfocus" data-pick="1527822000000" role="gridcell" aria-label="01/06/2018" tabindex="0">1</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--outfocus" data-pick="1527908400000" role="gridcell" aria-label="02/06/2018" tabindex="0">2</div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--outfocus" data-pick="1527994800000" role="gridcell" aria-label="03/06/2018" tabindex="0">3</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--outfocus" data-pick="1528081200000" role="gridcell" aria-label="04/06/2018" tabindex="0">4</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--outfocus" data-pick="1528167600000" role="gridcell" aria-label="05/06/2018" tabindex="0">5</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--outfocus" data-pick="1528254000000" role="gridcell" aria-label="06/06/2018" tabindex="0">6</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--outfocus" data-pick="1528340400000" role="gridcell" aria-label="07/06/2018" tabindex="0">7</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--outfocus" data-pick="1528426800000" role="gridcell" aria-label="08/06/2018" tabindex="0">8</div>
                                    </td>
                                    <td role="presentation">
                                       <div class="picker__day picker__day--outfocus" data-pick="1528513200000" role="gridcell" aria-label="09/06/2018" tabindex="0">9</div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <div class="picker__footer"><button class="picker__today btn-flat" type="button" data-pick="1526871600000" disabled="" aria-controls="dataInicial">Hoje</button><button class="picker__clear btn-flat" type="button" data-clear="1" disabled="" aria-controls="dataInicial">Limpar</button><button class="picker__close btn-flat" type="button" data-close="true" disabled="" aria-controls="dataInicial">Fechar</button></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <input id="dataInicial" name="dataInicial" class="datepicker date picker__input masked" value="01/05/2018" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataInicial_root" type="text"><label class="truncate active" for="dataInicial">Data Inicial</label>
   </div>
   <div id="dataFinalField" class="input-field col s6">
      <a href="javascript:void(0)" class="" onclick="fly01._.dataFinal.open(event)"><i class="material-icons picking">date_range</i></a>
      <input id="dataFinal" name="dataFinal" class="datepicker date picker__input masked" value="21/05/2018" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataFinal_root" type="text"><label class="truncate active" for="dataFinal">Data Final</label>
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