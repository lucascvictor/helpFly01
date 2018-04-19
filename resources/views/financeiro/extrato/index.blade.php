@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')

   <div id="headTop" class="z-depth-0-half pinned">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block fly01-main-title">Extrato</h4>
               <ul class="right valign-wrapper fly01-buttons">
                  <li><a id="save" class="btn " onclick="atualizar();">Atualizar</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <form id="fly01frm" class="col s12" method="post" novalidate="novalidate">
            <input id="contaBancariaId" name="contaBancariaId" type="hidden">
            <div id="dataInicialField" class="input-field col s6 m3 l4">
               <a href="javascript:void(0)" class="" onclick="fly01._.dataInicial.open(event)"><i class="material-icons picking">date_range</i></a>
               <input id="dataInicial" name="dataInicial" class="datepicker date picker__input" value="01/04/2018" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataInicial_root" type="text"><label class="truncate active" for="dataInicial">Data Inicial</label>
            </div>
            <div id="dataFinalField" class="input-field col s6 m3 l4">
               <a href="javascript:void(0)" class="" onclick="fly01._.dataFinal.open(event)"><i class="material-icons picking">date_range</i></a>
               <input id="dataFinal" name="dataFinal" class="datepicker date picker__input" value="05/04/2018" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataFinal_root" type="text"><label class="truncate active" for="dataFinal">Data Final</label>
            </div>
            <div id="fly01btngrpField" class="input-field col s12 m6 l4">
               <label class="truncate active" for="fly01btngrp">Selecione o período</label>
               <div id="fly01btngrp" class="btn-group input-field"><input id="btnDia" name="btnDia" class="btn col s4 " onclick="fnAtualizarPeriodo(&quot;0&quot;)" value="Dia" type="button"><input id="btnSemana" name="btnSemana" class="btn col s4 " onclick="fnAtualizarPeriodo(&quot;6&quot;)" value="Semana" type="button"><input id="btnMes" name="btnMes" class="btn col s4 active" onclick="fnAtualizarPeriodo(&quot;30&quot;)" value="Mês" type="button"></div>
            </div>
         </form>
         <div id="contasBancariasList_wrapper" class="col s12 m12 l4 DTS">
            <div class=""></div>
            <div id="contasBancariasList_processing" class="dataTables_processing" style="display: none;"></div>
            <div class="dataTables_scroll">
               <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px none; width: 100%;">
                  <div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 381.983px; padding-right: 13px;">
                     <table class="display striped responsive nowrap dataTable" role="grid" style="margin-left: 0px; width: 381.983px;" width="100%">
                        <thead>
                           <tr id="columns" role="row">
                              <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 381.983px;"><span>Contas Bancárias - Saldo Atual</span></th>
                           </tr>
                        </thead>
                     </table>
                  </div>
               </div>
               <div class="dataTables_scrollBody" style="position: relative; overflow: auto; height: 300px; width: 100%;">
                  <table class="display striped responsive nowrap dataTable dtr-inline" id="contasBancariasList" role="grid" aria-describedby="contasBancariasList_info" style="width: 100%; position: absolute; top: 0px; left: 0px;" width="100%">
                     <thead>
                        <tr id="columns" role="row" style="height: 0px;">
                           <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 381.983px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                              <div class="dataTables_sizing" style="height:0;overflow:hidden;"><span>Contas Bancárias - Saldo Atual</span></div>
                           </th>
                        </tr>
                     </thead>
                     <tfoot>
                        <tr style="height: 0px;">
                           <th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 381.983px;">
                              <div class="dataTables_sizing" style="height:0;overflow:hidden;"></div>
                           </th>
                        </tr>
                     </tfoot>
                     <tbody>
                     <tr role="row" class="odd">
                           <td tabindex="0" nowrap="nowrap">
                              <div class="tooltipped" data-position="top" data-tooltip="Representação: 100%" data-conta-id="">
                                 <span class="left">Todas as contas</span><strong class="right green-text">R$ resultado da soma</strong>
                                 <div class="progress">
                                    <div class="determinate" style="width: 100%"></div>
                                 </div>
                              </div>
                           </td>
                        </tr>
                     @foreach($banks as $bank)
                        <tr role="row" class="odd">
                           <td tabindex="0" nowrap="nowrap">
                              <div class="tooltipped" data-position="top" data-tooltip="Representação: 100%" data-conta-id="">
                                 <span class="left">{{ $bank->nomeConta }}</span><strong class="right green-text">R$ 0</strong>
                                 <div class="progress">
                                    <div class="determinate" style="width: 100%"></div>
                                 </div>
                              </div>
                           </td>
                        </tr>
                     @endforeach
                     </tbody>
                  </table>
                  <div style="position: relative; top: 0px; left: 0px; width: 1px; height: 458.5px;"></div>
               </div>
               <div class="dataTables_scrollFoot" style="overflow: hidden; border: 0px none; width: 100%;">
                  <div class="dataTables_scrollFootInner" style="width: 381.983px; padding-right: 13px;">
                     <table class="display striped responsive nowrap dataTable" role="grid" style="margin-left: 0px; width: 381.983px;" width="100%">
                        <tfoot>
                           <tr>
                              <th rowspan="1" colspan="1" style="width: 381.983px;"></th>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
               </div>
            </div>
            <div class="">
               <div class="dataTables_info" id="contasBancariasList_info" role="status" aria-live="polite" style="display: none;"></div>
               <div class="dataTables_paginate paging_simple_numbers" id="contasBancariasList_paginate" style="display: none;"><a class="paginate_button previous disabled" aria-controls="contasBancariasList" data-dt-idx="0" tabindex="0" id="contasBancariasList_previous">&lt;</a><span><a class="paginate_button current" aria-controls="contasBancariasList" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="contasBancariasList" data-dt-idx="2" tabindex="0" id="contasBancariasList_next">&gt;</a></div>
            </div>
         </div>
         <div id="dfly01chart" class="col s12 m12 l8">
            <div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor">
               <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                  <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
               </div>
               <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                  <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
               </div>
            </div>
            <h6></h6>
            <canvas id="fly01chart" style="display: block; width: 813px; height: 406px;" width="813" height="406" class="chartjs-render-monitor"></canvas>
         </div>
         <form id="fly01frm" class="col s12" method="post">
            <div id="btnNovoPagamentoField" class="input-field col s12 m4 l4"><input id="btnNovoPagamento" name="btnNovoPagamento" style="color:#FFF;" class="btn modal-trigger green" value="Novo pagamento" type="button" data-target="fly01frmNovoPgt"></div>
            <div id="btnNovoRecebimentoField" class="input-field col s12 m4 l4"><input id="btnNovoRecebimento" name="btnNovoRecebimento" style="color:#FFF;" class="btn modal-trigger green" value="Novo recebimento" type="button" data-target="fly01frmNovoReceb"></div>
            <div id="btnNovaTransferenciaField" class="input-field col s12 m4 l4"><input id="btnNovaTransferencia" name="btnNovaTransferencia" style="color:#FFF;" class="btn modal-trigger green" value="Nova transferência" type="button" data-target="fly01frmNovaTransf"></div>
         </form>
         <div id="dtExtratoDetalhe_wrapper" class="col s12">
            <div class=""></div>
            <div id="dtExtratoDetalhe_processing" class="dataTables_processing" style="display: none;"></div>
            <table class="display striped responsive nowrap dataTable dtr-inline" id="dtExtratoDetalhe" role="grid" aria-describedby="dtExtratoDetalhe_info" style="width: 100%;" width="100%">
               <thead>
                  <tr id="columns" role="row">
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 138px;"><span>Data</span></th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 356px;"><span>Lançamento</span></th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 259px;"><span>Cliente/Fornecedor</span></th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 280px;"><span>Conta Bancária</span></th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 145px;"><span>Valor</span></th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 6px;"><span></span></th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                  </tr>
               </tfoot>
               <tbody>
                  <tr role="row" class="odd">
                     <td tabindex="0" nowrap="nowrap">09/03/2018</td>
                     <td nowrap="nowrap">asdsadsdasd</td>
                     <td nowrap="nowrap"></td>
                     <td nowrap="nowrap">BANCO MODAL</td>
                     <td nowrap="nowrap">R$ 50,00</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="undefined" type="hidden"></td>
                  </tr>
                  <tr role="row" class="even">
                     <td tabindex="0" nowrap="nowrap">09/03/2018</td>
                     <td nowrap="nowrap">teste123</td>
                     <td nowrap="nowrap"></td>
                     <td nowrap="nowrap">BANCO MODAL</td>
                     <td nowrap="nowrap">-R$ 50,00</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="undefined" type="hidden"></td>
                  </tr>
                  <tr role="row" class="odd">
                     <td tabindex="0" nowrap="nowrap">09/03/2018</td>
                     <td nowrap="nowrap">Transf. de </td>
                     <td nowrap="nowrap"></td>
                     <td nowrap="nowrap">BANCO VOLVO</td>
                     <td nowrap="nowrap">R$ 50,00</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="undefined" type="hidden"></td>
                  </tr>
                  <tr role="row" class="even">
                     <td tabindex="0" nowrap="nowrap">09/03/2018</td>
                     <td nowrap="nowrap">Transf. para </td>
                     <td nowrap="nowrap"></td>
                     <td nowrap="nowrap">BANCO MODAL</td>
                     <td nowrap="nowrap">-R$ 50,00</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="undefined" type="hidden"></td>
                  </tr>
                  <tr role="row" class="odd">
                     <td tabindex="0" nowrap="nowrap">13/03/2018</td>
                     <td nowrap="nowrap">Comissão </td>
                     <td nowrap="nowrap">Vinícius Rocha Cunha</td>
                     <td nowrap="nowrap">BANCO CNH</td>
                     <td nowrap="nowrap">R$ 450,00</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="undefined" type="hidden"></td>
                  </tr>
                  <tr role="row" class="even">
                     <td tabindex="0" nowrap="nowrap">13/03/2018</td>
                     <td nowrap="nowrap">Teste</td>
                     <td nowrap="nowrap">FRAGA ALTERADO</td>
                     <td nowrap="nowrap">BANCO CNH</td>
                     <td nowrap="nowrap">R$ 33,34</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="undefined" type="hidden"></td>
                  </tr>
                  <tr role="row" class="odd">
                     <td tabindex="0" nowrap="nowrap">13/03/2018</td>
                     <td nowrap="nowrap">Estorno* Comissão </td>
                     <td nowrap="nowrap">Vinícius Rocha Cunha</td>
                     <td nowrap="nowrap">BANCO CNH</td>
                     <td nowrap="nowrap">-R$ 450,00</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="undefined" type="hidden"></td>
                  </tr>
                  <tr role="row" class="even">
                     <td tabindex="0" nowrap="nowrap">13/03/2018</td>
                     <td nowrap="nowrap">Comissão </td>
                     <td nowrap="nowrap">Vinícius Rocha Cunha</td>
                     <td nowrap="nowrap">BANCO VOLVO</td>
                     <td nowrap="nowrap">R$ 400,00</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="undefined" type="hidden"></td>
                  </tr>
                  <tr role="row" class="odd">
                     <td tabindex="0" nowrap="nowrap">14/03/2018</td>
                     <td nowrap="nowrap">INICIALIZACAO</td>
                     <td nowrap="nowrap"></td>
                     <td nowrap="nowrap">BANCO CNH</td>
                     <td nowrap="nowrap">-R$ 100,00</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="undefined" type="hidden"></td>
                  </tr>
                  <tr role="row" class="even">
                     <td tabindex="0" nowrap="nowrap">14/03/2018</td>
                     <td nowrap="nowrap">Aluguel</td>
                     <td nowrap="nowrap">TESTE</td>
                     <td nowrap="nowrap">BANCO CNH</td>
                     <td nowrap="nowrap">-R$ 1.000,00</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="undefined" type="hidden"></td>
                  </tr>
                  <tr role="row" class="odd">
                     <td tabindex="0" nowrap="nowrap">14/03/2018</td>
                     <td nowrap="nowrap">CATEGORIA RABBIT EXTRATO</td>
                     <td nowrap="nowrap"></td>
                     <td nowrap="nowrap">BANCO CNH</td>
                     <td nowrap="nowrap">R$ 1,00</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="undefined" type="hidden"></td>
                  </tr>
                  <tr role="row" class="even">
                     <td tabindex="0" nowrap="nowrap">14/03/2018</td>
                     <td nowrap="nowrap">INICIALIZACAO </td>
                     <td nowrap="nowrap"></td>
                     <td nowrap="nowrap">BANCO INICIALIZAÇÃO</td>
                     <td nowrap="nowrap">R$ 1.000,00</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="undefined" type="hidden"></td>
                  </tr>
                  <tr role="row" class="odd">
                     <td tabindex="0" nowrap="nowrap">15/03/2018</td>
                     <td nowrap="nowrap">Primeiro pagamento</td>
                     <td nowrap="nowrap">ABC ABC</td>
                     <td nowrap="nowrap">Minha</td>
                     <td nowrap="nowrap">R$ 9,00</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="undefined" type="hidden"></td>
                  </tr>
                  <tr role="row" class="even">
                     <td tabindex="0" nowrap="nowrap">15/03/2018</td>
                     <td nowrap="nowrap">SDFSDFDF</td>
                     <td nowrap="nowrap">Camila Silva</td>
                     <td nowrap="nowrap">BANCO MODAL</td>
                     <td nowrap="nowrap">-R$ 6,00</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="undefined" type="hidden"></td>
                  </tr>
                  <tr role="row" class="odd">
                     <td tabindex="0" nowrap="nowrap">15/03/2018</td>
                     <td nowrap="nowrap">Pagamento </td>
                     <td nowrap="nowrap"></td>
                     <td nowrap="nowrap">Minha</td>
                     <td nowrap="nowrap">-R$ 9,00</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="undefined" type="hidden"></td>
                  </tr>
                  <tr role="row" class="even">
                     <td tabindex="0" nowrap="nowrap">15/03/2018</td>
                     <td nowrap="nowrap">RENEGOCIADA</td>
                     <td nowrap="nowrap">TESTE</td>
                     <td nowrap="nowrap">BANCO CNH</td>
                     <td nowrap="nowrap">-R$ 200,00</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="undefined" type="hidden"></td>
                  </tr>
                  <tr role="row" class="odd">
                     <td tabindex="0" nowrap="nowrap">15/03/2018</td>
                     <td nowrap="nowrap">SDFSDFDF</td>
                     <td nowrap="nowrap">Camila Silva</td>
                     <td nowrap="nowrap">BANCO CNH</td>
                     <td nowrap="nowrap">-R$ 10,00</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="undefined" type="hidden"></td>
                  </tr>
               </tbody>
            </table>
            <div class="">
               <div class="dataTables_info" id="dtExtratoDetalhe_info" role="status" aria-live="polite"></div>
               <div class="dataTables_paginate paging_simple_numbers" id="dtExtratoDetalhe_paginate" style="display: none;"><a class="paginate_button previous disabled" aria-controls="dtExtratoDetalhe" data-dt-idx="0" tabindex="0" id="dtExtratoDetalhe_previous">&lt;</a><span><a class="paginate_button current" aria-controls="dtExtratoDetalhe" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="dtExtratoDetalhe" data-dt-idx="2" tabindex="0" id="dtExtratoDetalhe_next">&gt;</a></div>
            </div>
         </div>
      </div>
   </div>
   <div id="fly01frmNovoReceb" class="modal modal-fixed-footer" style="z-index: 1005; display: none; opacity: 0; transform: scaleX(0.7); top: 4%;">
      <div class="modal-header">
         <h5>Novo Recebimento</h5>
      </div>
      <div class="modal-content">
         <div class="row">
            <form id="fly01frmNovoReceb" class="col s12" method="post" novalidate="novalidate">
               <div id="contaBancariaDestinoIdRecebField" class="input-field col s12"><input class="autocomplete ui-autocomplete-input" id="contaBancariaDestinoNomeContaReceb" name="contaBancariaDestinoNomeConta" data-url="/AutoComplete/ContaBancariaBanco" data-url-post-modal="/ContaBancaria/FormModal" data-post-field="nomeConta" data-target="contaBancariaDestinoIdReceb" autocomplete="off" type="text"><input name="contaBancariaDestinoId" id="contaBancariaDestinoIdReceb" type="hidden"><label class="truncate" for="contaBancariaDestinoNomeContaReceb">Conta Bancária *</label></div>
               <div id="categoriaIdRecebField" class="input-field col s12"><input class="autocomplete ui-autocomplete-input" id="categoriaReceb" name="categoriaDescricao" data-url="/AutoComplete/CategoriaCR" data-url-post="/Extrato/NovaCategoriaReceita" data-target="categoriaIdReceb" autocomplete="off" type="text"><input name="categoriaId" id="categoriaIdReceb" type="hidden"><label class="truncate" for="categoriaReceb">Categoria *</label></div>
               <div id="dataRecebField" class="input-field col s12 m6">
                  <a href="javascript:void(0)" class="" onclick="fly01._.dataReceb.open(event)"><i class="material-icons picking">date_range</i></a>
                  <div class="picker" id="dataReceb_root" tabindex="0" aria-hidden="true">
                     <div class="picker__holder">
                        <div class="picker__frame">
                           <div class="picker__wrap">
                              <div class="picker__box">
                                 <div class="picker__date-display">
                                    <div class="picker__year-display">
                                       <div class="picker__year">2018</div>
                                    </div>
                                    <span class="picker__weekday-display">Qui, </span><span class="picker__day-display">5 </span><span class="picker__month-display">Abr</span>
                                 </div>
                                 <div class="picker__container__wrapper">
                                    <div class="picker__calendar-container">
                                       <div class="picker__header">
                                          <select class="picker__select--month browser-default" disabled="" aria-controls="dataReceb_table" title="Escolha um mês">
                                             <option value="0">Janeiro</option>
                                             <option value="1">Fevereiro</option>
                                             <option value="2">Março</option>
                                             <option value="3" selected="">Abril</option>
                                             <option value="4" disabled="">Maio</option>
                                             <option value="5" disabled="">Junho</option>
                                             <option value="6" disabled="">Julho</option>
                                             <option value="7" disabled="">Agosto</option>
                                             <option value="8" disabled="">Setembro</option>
                                             <option value="9" disabled="">Outubro</option>
                                             <option value="10" disabled="">Novembro</option>
                                             <option value="11" disabled="">Dezembro</option>
                                          </select>
                                          <select class="picker__select--year browser-default" disabled="" aria-controls="dataReceb_table" title="Escolha um ano">
                                             <option value="2008">2008</option>
                                             <option value="2009">2009</option>
                                             <option value="2010">2010</option>
                                             <option value="2011">2011</option>
                                             <option value="2012">2012</option>
                                             <option value="2013">2013</option>
                                             <option value="2014">2014</option>
                                             <option value="2015">2015</option>
                                             <option value="2016">2016</option>
                                             <option value="2017">2017</option>
                                             <option value="2018" selected="">2018</option>
                                          </select>
                                          <div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="dataReceb_table" title="Anterior"> </div>
                                          <div class="picker__nav--next picker__nav--disabled" data-nav="1" role="button" aria-controls="dataReceb_table" title="Proximo"> </div>
                                       </div>
                                       <table class="picker__table" id="dataReceb_table" role="grid" aria-controls="dataReceb" aria-readonly="true">
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
                                                   <div class="picker__day picker__day--infocus" data-pick="1522551600000" role="gridcell" aria-label="01/04/2018" tabindex="0">1</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus" data-pick="1522638000000" role="gridcell" aria-label="02/04/2018" tabindex="0">2</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus" data-pick="1522724400000" role="gridcell" aria-label="03/04/2018" tabindex="0">3</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus" data-pick="1522810800000" role="gridcell" aria-label="04/04/2018" tabindex="0">4</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1522897200000" role="gridcell" aria-label="05/04/2018" aria-activedescendant="true" tabindex="0">5</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1522983600000" role="gridcell" aria-label="06/04/2018" aria-disabled="true">6</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1523070000000" role="gridcell" aria-label="07/04/2018" aria-disabled="true">7</div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1523156400000" role="gridcell" aria-label="08/04/2018" aria-disabled="true">8</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1523242800000" role="gridcell" aria-label="09/04/2018" aria-disabled="true">9</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1523329200000" role="gridcell" aria-label="10/04/2018" aria-disabled="true">10</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1523415600000" role="gridcell" aria-label="11/04/2018" aria-disabled="true">11</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1523502000000" role="gridcell" aria-label="12/04/2018" aria-disabled="true">12</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1523588400000" role="gridcell" aria-label="13/04/2018" aria-disabled="true">13</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1523674800000" role="gridcell" aria-label="14/04/2018" aria-disabled="true">14</div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1523761200000" role="gridcell" aria-label="15/04/2018" aria-disabled="true">15</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1523847600000" role="gridcell" aria-label="16/04/2018" aria-disabled="true">16</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1523934000000" role="gridcell" aria-label="17/04/2018" aria-disabled="true">17</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1524020400000" role="gridcell" aria-label="18/04/2018" aria-disabled="true">18</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1524106800000" role="gridcell" aria-label="19/04/2018" aria-disabled="true">19</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1524193200000" role="gridcell" aria-label="20/04/2018" aria-disabled="true">20</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1524279600000" role="gridcell" aria-label="21/04/2018" aria-disabled="true">21</div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1524366000000" role="gridcell" aria-label="22/04/2018" aria-disabled="true">22</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1524452400000" role="gridcell" aria-label="23/04/2018" aria-disabled="true">23</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1524538800000" role="gridcell" aria-label="24/04/2018" aria-disabled="true">24</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1524625200000" role="gridcell" aria-label="25/04/2018" aria-disabled="true">25</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1524711600000" role="gridcell" aria-label="26/04/2018" aria-disabled="true">26</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1524798000000" role="gridcell" aria-label="27/04/2018" aria-disabled="true">27</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1524884400000" role="gridcell" aria-label="28/04/2018" aria-disabled="true">28</div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1524970800000" role="gridcell" aria-label="29/04/2018" aria-disabled="true">29</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1525057200000" role="gridcell" aria-label="30/04/2018" aria-disabled="true">30</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1525143600000" role="gridcell" aria-label="01/05/2018" aria-disabled="true">1</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1525230000000" role="gridcell" aria-label="02/05/2018" aria-disabled="true">2</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1525316400000" role="gridcell" aria-label="03/05/2018" aria-disabled="true">3</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1525402800000" role="gridcell" aria-label="04/05/2018" aria-disabled="true">4</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1525489200000" role="gridcell" aria-label="05/05/2018" aria-disabled="true">5</div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1525575600000" role="gridcell" aria-label="06/05/2018" aria-disabled="true">6</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1525662000000" role="gridcell" aria-label="07/05/2018" aria-disabled="true">7</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1525748400000" role="gridcell" aria-label="08/05/2018" aria-disabled="true">8</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1525834800000" role="gridcell" aria-label="09/05/2018" aria-disabled="true">9</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1525921200000" role="gridcell" aria-label="10/05/2018" aria-disabled="true">10</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1526007600000" role="gridcell" aria-label="11/05/2018" aria-disabled="true">11</div>
                                                </td>
                                                <td role="presentation">
                                                   <div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1526094000000" role="gridcell" aria-label="12/05/2018" aria-disabled="true">12</div>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                    <div class="picker__footer"><button class="picker__today btn-flat" type="button" data-pick="1522897200000" disabled="" aria-controls="dataReceb">Hoje</button><button class="picker__clear btn-flat" type="button" data-clear="1" disabled="" aria-controls="dataReceb">Limpar</button><button class="picker__close btn-flat" type="button" data-close="true" disabled="" aria-controls="dataReceb">Fechar</button></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <input id="dataReceb" name="data" class="datepicker date picker__input" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataReceb_root" type="text"><label class="truncate" for="dataReceb">Data *</label>
               </div>
               <div id="valorRecebField" class="input-field col s12 m6"><input id="valorReceb" name="valor" class="currency" style="text-align: right;" type="text"><label class="truncate" for="valorReceb">Valor *</label></div>
               <div id="descricaoRecebField" class="input-field col s12"><textarea id="descricaoReceb" name="descricao" class="materialize-textarea"></textarea><label class="truncate" for="descricaoReceb">Descrição *</label></div>
               <div id="Field" class="input-field col s12"><small>* Campos obrigatórios</small></div>
            </form>
         </div>
      </div>
      <div class="modal-footer"><a class="modal-action btn-flat modal-close">Cancelar</a><a class="modal-action btn" onclick="fnSalvarNovoRecebimento()">Confirmar</a></div>
   </div>
   <div id="fly01frmNovaTransf" class="modal modal-fixed-footer" style="z-index: 1009; display: none; opacity: 0; transform: scaleX(0.7); top: 4%;">
      <div class="modal-header">
         <h5>Nova Transferência</h5>
      </div>
      <div class="modal-content">
         <div class="row">
            <form id="fly01frmNovaTransf" class="col s12" method="post" novalidate="novalidate">
               <input id="descricaoDestino" name="descricaoDestino" type="hidden"><input id="descricao" name="descricao" type="hidden">
               <div id="contaBancariaOrigemIdTransfField" class="input-field col s12 m6"><input class="autocomplete ui-autocomplete-input" id="contaBancariaOrigemNomeContaTransf" name="contaBancariaOrigemNomeConta" data-url="/AutoComplete/ContaBancariaBanco" data-url-post-modal="/ContaBancaria/FormModal" data-post-field="nomeConta" data-target="contaBancariaOrigemIdTransf" autocomplete="off" type="text"><input name="contaBancariaOrigemId" id="contaBancariaOrigemIdTransf" type="hidden"><label class="truncate" for="contaBancariaOrigemNomeContaTransf">Conta Bancária Origem *</label></div>
               <div id="contaBancariaDestinoIdTransfField" class="input-field col s12 m6"><input class="autocomplete ui-autocomplete-input" id="contaBancariaDestinoNomeContaTransf" name="contaBancariaDestinoNomeConta" data-url="/AutoComplete/ContaBancariaBanco" data-url-post-modal="/ContaBancaria/FormModal" data-post-field="nomeConta" data-target="contaBancariaDestinoIdTransf" autocomplete="off" type="text"><input name="contaBancariaDestinoId" id="contaBancariaDestinoIdTransf" type="hidden"><label class="truncate" for="contaBancariaDestinoNomeContaTransf">Conta Bancária Destino *</label></div>
               <div id="categoriaIdTransfField" class="input-field col s12 m6"><input class="autocomplete ui-autocomplete-input" id="categoriaDescricaoTransf" name="categoriaDescricao" data-url="/AutoComplete/CategoriaCP" data-url-post="/Extrato/NovaCategoriaDespesa" data-target="categoriaIdTransf" autocomplete="off" type="text"><input name="categoriaId" id="categoriaIdTransf" type="hidden"><label class="truncate" for="categoriaDescricaoTransf">Categoria Origem *</label></div>
               <div id="categoriaDestinoIdTransfField" class="input-field col s12 m6"><input class="autocomplete ui-autocomplete-input" id="categoriaDestinoDescricaoTransf" name="categoriaDestinoDescricao" data-url="/AutoComplete/CategoriaCR" data-url-post="/Extrato/NovaCategoriaReceita" data-target="categoriaDestinoIdTransf" autocomplete="off" type="text"><input name="categoriaDestinoId" id="categoriaDestinoIdTransf" type="hidden"><label class="truncate" for="categoriaDestinoDescricaoTransf">Categoria Destino *</label></div>
               <div id="dataTransfField" class="input-field col s12 m6">
                  <a href="javascript:void(0)" class="" onclick="fly01._.dataTransf.open(event)"><i class="material-icons picking">date_range</i></a>
                 
                  <input id="dataTransf" name="data" class="datepicker date picker__input" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataTransf_root" type="text"><label class="truncate" for="dataTransf">Data *</label>
               </div>
               <div id="valorTransfField" class="input-field col s12 m6"><input id="valorTransf" name="valor" class="currency" style="text-align: right;" type="text"><label class="truncate" for="valorTransf">Valor *</label></div>
               <div id="Field" class="input-field col s12"><small>* Campos obrigatórios</small></div>
            </form>
         </div>
      </div>
      <div class="modal-footer"><a class="modal-action btn-flat modal-close">Cancelar</a><a class="modal-action btn" onclick="fnSalvarNovaTransferencia()">Confirmar</a></div>
   </div>
   <div id="fly01frmNovoPgt" class="modal modal-fixed-footer" style="z-index: 1011; display: none; opacity: 0; transform: scaleX(0.7); top: 4%;">
      <div class="modal-header">
         <h5>Novo Pagamento</h5>
      </div>
      <div class="modal-content">
         <div class="row">
            <form id="fly01frmNovoPgt" class="col s12" method="post" novalidate="novalidate">
               <div id="contaBancariaOrigemIdPgtoField" class="input-field col s12"><input class="autocomplete ui-autocomplete-input" id="contaBancariaOrigemNomeContaPgto" name="contaBancariaOrigemNomeConta" data-url="/AutoComplete/ContaBancariaBanco" data-url-post-modal="/ContaBancaria/FormModal" data-post-field="nomeConta" data-target="contaBancariaOrigemIdPgto" autocomplete="off" type="text"><input name="contaBancariaOrigemId" id="contaBancariaOrigemIdPgto" type="hidden"><label class="truncate" for="contaBancariaOrigemNomeContaPgto">Conta Bancária *</label></div>
               <div id="categoriaIdPgtoField" class="input-field col s12"><input class="autocomplete ui-autocomplete-input" id="categoriaPgto" name="categoriaDescricao" data-url="/AutoComplete/CategoriaCP" data-url-post="/Extrato/NovaCategoriaDespesa" data-target="categoriaIdPgto" autocomplete="off" type="text"><input name="categoriaId" id="categoriaIdPgto" type="hidden"><label class="truncate" for="categoriaPgto">Categoria *</label></div>
               <div id="dataPgtoField" class="input-field col s12 m6">
                  <a href="javascript:void(0)" class="" onclick="fly01._.dataPgto.open(event)"><i class="material-icons picking">date_range</i></a>
                  
                  <input id="dataPgto" name="data" class="datepicker date picker__input" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataPgto_root" type="text"><label class="truncate" for="dataPgto">Data *</label>
               </div>
               <div id="valorPgtoField" class="input-field col s12 m6"><input id="valorPgto" name="valor" class="currency" style="text-align: right;" type="text"><label class="truncate" for="valorPgto">Valor *</label></div>
               <div id="descricaoPgtoField" class="input-field col s12"><textarea id="descricaoPgto" name="descricao" class="materialize-textarea"></textarea><label class="truncate" for="descricaoPgto">Descrição *</label></div>
               <div id="Field" class="input-field col s12"><small>* Campos obrigatórios</small></div>
            </form>
         </div>
      </div>
      <div class="modal-footer"><a class="modal-action btn-flat modal-close">Cancelar</a><a class="modal-action btn" onclick="fnSalvarNovoPagamento()">Confirmar</a></div>
   </div>

    @include('financeiro.extrato.modals.index')

    @include('financeiro.extrato.modals.apagar')

    @include('financeiro.extrato.modals.areceber')

    @include('financeiro.extrato.modals.transf')


@endsection

@section('extrascript')

	@include('financeiro.extrato.datachart')

	@include('financeiro.extrato.tour')

    <script>

        $(document).ready(function(){
            $('.modal').modal();
            document.getElementById("modalIndex").click();
        });

    </script>

@endsection


