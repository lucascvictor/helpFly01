@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
   
   <div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block fly01-main-title">Dados da renegociação</h4>
               <ul class="right valign-wrapper fly01-buttons">
                  <li><a id="cancel" class="btn " onclick="fnCancelar();">Cancelar</a></li>
                  <li><a id="save" class="btn " onclick="fnSalvar();">Salvar</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <form id="fly01frmCabecalho" class="col s12" method="post" novalidate="novalidate">
            <div id="renegociacaoPessoaIdField" class="input-field col s12 m10 l10"><input class="autocomplete ui-autocomplete-input valid" id="fornecedorNome" name="fornecedorNome" data-url="/AutoComplete/Fornecedor" data-target="renegociacaoPessoaId" autocomplete="off" aria-invalid="false" type="text"><input name="renegociacaoPessoaId" id="renegociacaoPessoaId" value="82e8f960-23d6-4bba-ad2e-b4ab3417f9b2" type="hidden"><label class="truncate active" for="fornecedorNome">Fornecedor *</label></div>
            {{ Form::open(['action' => ['SearchController@searchUser'], 'method' => 'GET']) }}
                {{ Form::text('q', '', ['id' =>  'q', 'placeholder' =>  'Enter name'])}}
                {{ Form::submit('Search', array('class' => 'button expand')) }}
            {{ Form::close() }}
            <div id="btnListaTitulosField" class="input-field col s12 m2 l2"><input id="btnListaTitulos" name="btnListaTitulos" class="btn undefined valid" value="Listar contas" aria-invalid="false" type="button"></div>
            <div id="selecaoTitulosLabelField" class="input-field col s12" style="">
               <h5 id="selecaoTitulosLabel" class="thin-bordered">Seleção das contas</h5>
            </div>
            <div id="Field" class="input-field col s12" style="display: none;"><small>* Campos obrigatórios</small></div>
         </form>
         <div id="datatableSelecaoTitulos_wrapper" class="col s12" style="">
            <div class=""></div>
            <div id="datatableSelecaoTitulos_processing" class="dataTables_processing" style="display: none;"></div>
            <table class="display striped responsive nowrap dataTable dtr-inline" id="datatableSelecaoTitulos" role="grid" aria-describedby="datatableSelecaoTitulos_info" style="width: 100%;" width="100%">
               <thead>
                  <tr id="columns" role="row">
                     <th class="sorting_asc" tabindex="0" aria-controls="datatableSelecaoTitulos" rowspan="1" colspan="1" style="width: 222px;" aria-sort="ascending" aria-label="Descrição: Ordenar colunas de forma descendente">
                        <div id="descricaoField" class="input-field fly01dt-filter "><input id="descricao" name="descricao" type="search"><label class="truncate" for="descricao">Descrição</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="datatableSelecaoTitulos" rowspan="1" colspan="1" style="width: 222px;" aria-label="Valor: Ordenar colunas de forma ascendente">
                        <div id="valorPrevistoField" class="input-field fly01dt-filter "><input id="valorPrevisto" name="valorPrevisto" class="currency" data-index="1" style="text-align: right;" type="text"><label class="truncate" for="valorPrevisto">Valor</label></div>
                     </th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 73px;" aria-label="Saldo"><span>Saldo</span></th>
                     <th class="sorting" tabindex="0" aria-controls="datatableSelecaoTitulos" rowspan="1" colspan="1" style="width: 222px;" aria-label="Parcelas: Ordenar colunas de forma ascendente">
                        <div id="descricaoParcelaField" class="input-field fly01dt-filter "><input id="descricaoParcela" name="descricaoParcela" data-index="3" type="search"><label class="truncate" for="descricaoParcela">Parcelas</label></div>
                     </th>
                     <th class="sorting" tabindex="0" aria-controls="datatableSelecaoTitulos" rowspan="1" colspan="1" style="width: 222px;" aria-label="Vencimento: Ordenar colunas de forma ascendente">
                        <div id="dataVencimentoField" class="input-field fly01dt-filter "><input id="dataVencimento" name="dataVencimento" class="date" data-index="4" type="text"><label class="truncate" for="dataVencimento">Vencimento</label></div>
                     </th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 109px;" aria-label="Dias Vencidos"><span>Dias Vencidos</span></th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 1px;" aria-label=""><span></span></th>
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
                     <th rowspan="1" colspan="1"></th>
                  </tr>
               </tfoot>
               <tbody>
                  <tr role="row" class="odd">
                     <td class="sorting_1" tabindex="0" nowrap="nowrap">A</td>
                     <td nowrap="nowrap">R$ 1,00</td>
                     <td nowrap="nowrap">R$ 1,00</td>
                     <td nowrap="nowrap">01/01</td>
                     <td nowrap="nowrap">15/03/2018</td>
                     <td nowrap="nowrap">28</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="c79728b8-50c4-490f-ad6c-9372dcd2b4ba" type="hidden"></td>
                  </tr>
                  <tr role="row" class="even">
                     <td class="sorting_1" tabindex="0" nowrap="nowrap">ABC ABC</td>
                     <td nowrap="nowrap">R$ 16,66</td>
                     <td nowrap="nowrap">R$ 16,66</td>
                     <td nowrap="nowrap">02/03</td>
                     <td nowrap="nowrap">26/04/2018</td>
                     <td nowrap="nowrap">0</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="5a8c7d37-3b0f-496a-aa62-118e76209fa8" type="hidden"></td>
                  </tr>
                  <tr role="row" class="odd">
                     <td class="sorting_1" tabindex="0" nowrap="nowrap">ABC ABC</td>
                     <td nowrap="nowrap">R$ 16,68</td>
                     <td nowrap="nowrap">R$ 16,68</td>
                     <td nowrap="nowrap">03/03</td>
                     <td nowrap="nowrap">26/05/2018</td>
                     <td nowrap="nowrap">0</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="bedfce77-3704-4ad5-945f-91e01cdc35c6" type="hidden"></td>
                  </tr>
                  <tr role="row" class="even">
                     <td class="sorting_1" tabindex="0" nowrap="nowrap">ABC ABC</td>
                     <td nowrap="nowrap">R$ 16,66</td>
                     <td nowrap="nowrap">R$ 16,66</td>
                     <td nowrap="nowrap">01/03</td>
                     <td nowrap="nowrap">26/03/2018</td>
                     <td nowrap="nowrap">17</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="09f1f29d-58a4-4d03-b335-c11de575f993" type="hidden"></td>
                  </tr>
                  <tr role="row" class="odd">
                     <td class="sorting_1" tabindex="0" nowrap="nowrap">LUZ</td>
                     <td nowrap="nowrap">R$ 333,33</td>
                     <td nowrap="nowrap">R$ 333,33</td>
                     <td nowrap="nowrap">02/03</td>
                     <td nowrap="nowrap">26/05/2018</td>
                     <td nowrap="nowrap">0</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="e364579a-4ae6-4b93-b6af-4afe4757d82a" type="hidden"></td>
                  </tr>
                  <tr role="row" class="even">
                     <td class="sorting_1" tabindex="0" nowrap="nowrap">LUZ</td>
                     <td nowrap="nowrap">R$ 333,34</td>
                     <td nowrap="nowrap">R$ 333,34</td>
                     <td nowrap="nowrap">03/03</td>
                     <td nowrap="nowrap">26/06/2018</td>
                     <td nowrap="nowrap">0</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="abfc1a1c-ca5f-469f-8a10-9be003209f1c" type="hidden"></td>
                  </tr>
                  <tr role="row" class="odd">
                     <td class="sorting_1" tabindex="0" nowrap="nowrap">LUZ</td>
                     <td nowrap="nowrap">R$ 333,33</td>
                     <td nowrap="nowrap">R$ 333,33</td>
                     <td nowrap="nowrap">01/03</td>
                     <td nowrap="nowrap">26/04/2018</td>
                     <td nowrap="nowrap">0</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="1b4053b7-ca03-4894-9b7b-d42a5b97a48c" type="hidden"></td>
                  </tr>
                  <tr role="row" class="even">
                     <td class="sorting_1" tabindex="0" nowrap="nowrap">SDFSDFDF</td>
                     <td nowrap="nowrap">R$ 16,66</td>
                     <td nowrap="nowrap">R$ 0,66</td>
                     <td nowrap="nowrap">01/03</td>
                     <td nowrap="nowrap">09/03/2018</td>
                     <td nowrap="nowrap">34</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="1ad34e6d-f093-44dd-8175-36fd4c68f5d9" type="hidden"></td>
                  </tr>
                  <tr role="row" class="odd">
                     <td class="sorting_1" tabindex="0" nowrap="nowrap">SDFSDFDF</td>
                     <td nowrap="nowrap">R$ 16,66</td>
                     <td nowrap="nowrap">R$ 16,66</td>
                     <td nowrap="nowrap">02/03</td>
                     <td nowrap="nowrap">09/04/2018</td>
                     <td nowrap="nowrap">3</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="9d7fd840-ec39-41fc-ac1a-51da44c29b12" type="hidden"></td>
                  </tr>
                  <tr role="row" class="even">
                     <td class="sorting_1" tabindex="0" nowrap="nowrap">SDFSDFDF</td>
                     <td nowrap="nowrap">R$ 16,68</td>
                     <td nowrap="nowrap">R$ 16,68</td>
                     <td nowrap="nowrap">03/03</td>
                     <td nowrap="nowrap">09/05/2018</td>
                     <td nowrap="nowrap">0</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="91d6996c-6be7-4cfa-a51b-d034522f1277" type="hidden"></td>
                  </tr>
               </tbody>
            </table>
            <div class="">
               <div class="dataTables_info" id="datatableSelecaoTitulos_info" role="status" aria-live="polite"></div>
               <div class="dataTables_paginate paging_simple_numbers" id="datatableSelecaoTitulos_paginate"><a class="paginate_button previous disabled" aria-controls="datatableSelecaoTitulos" data-dt-idx="0" tabindex="0" id="datatableSelecaoTitulos_previous">&lt;</a><span><a class="paginate_button current" aria-controls="datatableSelecaoTitulos" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="datatableSelecaoTitulos" data-dt-idx="2" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="datatableSelecaoTitulos" data-dt-idx="3" tabindex="0" id="datatableSelecaoTitulos_next">&gt;</a></div>
            </div>
         </div>
         <form id="fly01frm" class="col s12" action="/ContaPagar/IncluirRenegociacao" method="post" novalidate="novalidate">
            <input id="pessoaId" name="pessoaId" value="82e8f960-23d6-4bba-ad2e-b4ab3417f9b2" type="hidden"><input id="tipoContaFinanceira" name="tipoContaFinanceira" value="ContaPagar" type="hidden"><input id="contasFinanceirasIds" name="contasFinanceirasIds" value="" type="hidden">
            <div id="informacoesRenegociacaoLabelField" class="input-field col s12">
               <h5 id="informacoesRenegociacaoLabel" class="thin-bordered" style="">Informações da renegociação</h5>
            </div>
            <div id="motivoField" class="input-field col s12 m9 l9" style=""><input id="motivo" name="motivo" type="text"><label class="truncate" for="motivo">Motivo *</label></div>
            <div id="valorAcumuladoField" class="input-field col s12 m3 l3" style=""><input id="valorAcumulado" name="valorAcumulado" class="currency" readonly="readonly" style="text-align: right;" type="text"><label class="truncate active" for="valorAcumulado">Valor Acumulado</label></div>
            <div id="tipoRenegociacaoValorDiferencaField" class="input-field col s12 m3 l3" style="">
               <div class="select-wrapper">
                  <span class="caret">▼</span><input class="select-dropdown" readonly="true" data-activates="select-options-okgt1ey" value="Acréscimo" data-constrainwidth="undefined" type="text">
                  <ul id="select-options-okgt1ey" class="dropdown-content select-dropdown ">
                     <li class=""><span>Acréscimo</span></li>
                     <li class=""><span>Desconto</span></li>
                  </ul>
                  <select id="tipoRenegociacaoValorDiferenca" name="tipoRenegociacaoValorDiferenca" data-select-id="okgt1ey" class="initialized">
                     <option value="Acrescimo" selected="selected">Acréscimo</option>
                     <option value="Desconto">Desconto</option>
                  </select>
               </div>
               <label class="truncate active" for="tipoRenegociacaoValorDiferenca">Tipo do Valor Diferença</label>
            </div>
            <div id="tipoRenegociacaoCalculoField" class="input-field col s12 m3 l3" style="">
               <div class="select-wrapper">
                  <span class="caret">▼</span><input class="select-dropdown" readonly="true" data-activates="select-options-juo0b8k" value="Valor" data-constrainwidth="undefined" type="text">
                  <ul id="select-options-juo0b8k" class="dropdown-content select-dropdown ">
                     <li class=""><span>Valor</span></li>
                     <li class=""><span>Percentual</span></li>
                  </ul>
                  <select id="tipoRenegociacaoCalculo" name="tipoRenegociacaoCalculo" data-select-id="juo0b8k" class="initialized">
                     <option value="Valor" selected="selected">Valor</option>
                     <option value="Percentual">Percentual</option>
                  </select>
               </div>
               <label class="truncate active" for="tipoRenegociacaoCalculo">Tipo Cálculo Diferença</label>
            </div>
            <div id="valorDiferencaField" class="input-field col s12 m3 l3" style=""><input id="valorDiferenca" name="valorDiferenca" class="float" style="text-align: right;" type="text"><label class="truncate active" for="valorDiferenca">Valor Diferença  *</label></div>
            <div id="valorFinalField" class="input-field col s12 m3 l3" style=""><input id="valorFinal" name="valorFinal" class="currency" readonly="readonly" style="text-align: right;" type="text"><label class="truncate active" for="valorFinal">Valor Final </label></div>
            <div id="informacoesNovoTituloLabelField" class="input-field col s12" style="">
               <h5 id="informacoesNovoTituloLabel" class="thin-bordered">Informações da nova conta a pagar</h5>
            </div>
            <div id="descricaoRenegociacaoField" class="input-field col s12 m6 l6" style=""><input id="descricaoRenegociacao" name="descricaoRenegociacao" type="text"><label class="truncate" for="descricaoRenegociacao">Descrição *</label></div>
            <div id="dataEmissaoField" class="input-field col s12 m3 l3" style="">
               <a href="javascript:void(0)" class="" onclick="fly01._.dataEmissao.open(event)"><i class="material-icons picking">date_range</i></a>
               <div class="picker" id="dataEmissao_root" tabindex="0" aria-hidden="true">
                  <div class="picker__holder">
                     <div class="picker__frame">
                        <div class="picker__wrap">
                           <div class="picker__box">
                              <div class="picker__date-display">
                                 <div class="picker__year-display">
                                    <div class="picker__year">2018</div>
                                 </div>
                                 <span class="picker__weekday-display">Qui, </span><span class="picker__day-display">12 </span><span class="picker__month-display">Abr</span>
                              </div>
                              <div class="picker__container__wrapper">
                                 <div class="picker__calendar-container">
                                    <div class="picker__header">
                                       <select class="picker__select--month browser-default" disabled="" aria-controls="dataEmissao_table" title="Escolha um mês">
                                          <option value="0">Janeiro</option>
                                          <option value="1">Fevereiro</option>
                                          <option value="2">Março</option>
                                          <option value="3" selected="">Abril</option>
                                          <option value="4">Maio</option>
                                          <option value="5">Junho</option>
                                          <option value="6">Julho</option>
                                          <option value="7">Agosto</option>
                                          <option value="8">Setembro</option>
                                          <option value="9">Outubro</option>
                                          <option value="10">Novembro</option>
                                          <option value="11">Dezembro</option>
                                       </select>
                                       <select class="picker__select--year browser-default" disabled="" aria-controls="dataEmissao_table" title="Escolha um ano">
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
                                       <div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="dataEmissao_table" title="Anterior"> </div>
                                       <div class="picker__nav--next" data-nav="1" role="button" aria-controls="dataEmissao_table" title="Proximo"> </div>
                                    </div>
                                    <table class="picker__table" id="dataEmissao_table" role="grid" aria-controls="dataEmissao" aria-readonly="true">
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
                                                <div class="picker__day picker__day--infocus" data-pick="1522897200000" role="gridcell" aria-label="05/04/2018" tabindex="0">5</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1522983600000" role="gridcell" aria-label="06/04/2018" tabindex="0">6</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1523070000000" role="gridcell" aria-label="07/04/2018" tabindex="0">7</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1523156400000" role="gridcell" aria-label="08/04/2018" tabindex="0">8</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1523242800000" role="gridcell" aria-label="09/04/2018" tabindex="0">9</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1523329200000" role="gridcell" aria-label="10/04/2018" tabindex="0">10</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1523415600000" role="gridcell" aria-label="11/04/2018" tabindex="0">11</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1523502000000" role="gridcell" aria-label="12/04/2018" aria-activedescendant="true" tabindex="0">12</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1523588400000" role="gridcell" aria-label="13/04/2018" tabindex="0">13</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1523674800000" role="gridcell" aria-label="14/04/2018" tabindex="0">14</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1523761200000" role="gridcell" aria-label="15/04/2018" tabindex="0">15</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1523847600000" role="gridcell" aria-label="16/04/2018" tabindex="0">16</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1523934000000" role="gridcell" aria-label="17/04/2018" tabindex="0">17</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524020400000" role="gridcell" aria-label="18/04/2018" tabindex="0">18</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524106800000" role="gridcell" aria-label="19/04/2018" tabindex="0">19</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524193200000" role="gridcell" aria-label="20/04/2018" tabindex="0">20</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524279600000" role="gridcell" aria-label="21/04/2018" tabindex="0">21</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524366000000" role="gridcell" aria-label="22/04/2018" tabindex="0">22</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524452400000" role="gridcell" aria-label="23/04/2018" tabindex="0">23</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524538800000" role="gridcell" aria-label="24/04/2018" tabindex="0">24</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524625200000" role="gridcell" aria-label="25/04/2018" tabindex="0">25</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524711600000" role="gridcell" aria-label="26/04/2018" tabindex="0">26</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524798000000" role="gridcell" aria-label="27/04/2018" tabindex="0">27</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524884400000" role="gridcell" aria-label="28/04/2018" tabindex="0">28</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524970800000" role="gridcell" aria-label="29/04/2018" tabindex="0">29</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1525057200000" role="gridcell" aria-label="30/04/2018" tabindex="0">30</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1525143600000" role="gridcell" aria-label="01/05/2018" tabindex="0">1</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1525230000000" role="gridcell" aria-label="02/05/2018" tabindex="0">2</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1525316400000" role="gridcell" aria-label="03/05/2018" tabindex="0">3</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1525402800000" role="gridcell" aria-label="04/05/2018" tabindex="0">4</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1525489200000" role="gridcell" aria-label="05/05/2018" tabindex="0">5</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1525575600000" role="gridcell" aria-label="06/05/2018" tabindex="0">6</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1525662000000" role="gridcell" aria-label="07/05/2018" tabindex="0">7</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1525748400000" role="gridcell" aria-label="08/05/2018" tabindex="0">8</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1525834800000" role="gridcell" aria-label="09/05/2018" tabindex="0">9</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1525921200000" role="gridcell" aria-label="10/05/2018" tabindex="0">10</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1526007600000" role="gridcell" aria-label="11/05/2018" tabindex="0">11</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1526094000000" role="gridcell" aria-label="12/05/2018" tabindex="0">12</div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="picker__footer"><button class="picker__today btn-flat" type="button" data-pick="1523502000000" disabled="" aria-controls="dataEmissao">Hoje</button><button class="picker__clear btn-flat" type="button" data-clear="1" disabled="" aria-controls="dataEmissao">Limpar</button><button class="picker__close btn-flat" type="button" data-close="true" disabled="" aria-controls="dataEmissao">Fechar</button></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <input id="dataEmissao" name="dataEmissao" class="datepicker date picker__input" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataEmissao_root" type="text"><label class="truncate" for="dataEmissao">Emissão *</label>
            </div>
            <div id="dtVencimentoField" class="input-field col s12 m3 l3" style="">
               <a href="javascript:void(0)" class="" onclick="fly01._.dtVencimento.open(event)"><i class="material-icons picking">date_range</i></a>
               <div class="picker" id="dtVencimento_root" tabindex="0" aria-hidden="true">
                  <div class="picker__holder">
                     <div class="picker__frame">
                        <div class="picker__wrap">
                           <div class="picker__box">
                              <div class="picker__date-display">
                                 <div class="picker__year-display">
                                    <div class="picker__year">2018</div>
                                 </div>
                                 <span class="picker__weekday-display">Qui, </span><span class="picker__day-display">12 </span><span class="picker__month-display">Abr</span>
                              </div>
                              <div class="picker__container__wrapper">
                                 <div class="picker__calendar-container">
                                    <div class="picker__header">
                                       <select class="picker__select--month browser-default" disabled="" aria-controls="dtVencimento_table" title="Escolha um mês">
                                          <option value="0">Janeiro</option>
                                          <option value="1">Fevereiro</option>
                                          <option value="2">Março</option>
                                          <option value="3" selected="">Abril</option>
                                          <option value="4">Maio</option>
                                          <option value="5">Junho</option>
                                          <option value="6">Julho</option>
                                          <option value="7">Agosto</option>
                                          <option value="8">Setembro</option>
                                          <option value="9">Outubro</option>
                                          <option value="10">Novembro</option>
                                          <option value="11">Dezembro</option>
                                       </select>
                                       <select class="picker__select--year browser-default" disabled="" aria-controls="dtVencimento_table" title="Escolha um ano">
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
                                       <div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="dtVencimento_table" title="Anterior"> </div>
                                       <div class="picker__nav--next" data-nav="1" role="button" aria-controls="dtVencimento_table" title="Proximo"> </div>
                                    </div>
                                    <table class="picker__table" id="dtVencimento_table" role="grid" aria-controls="dtVencimento" aria-readonly="true">
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
                                                <div class="picker__day picker__day--infocus" data-pick="1522897200000" role="gridcell" aria-label="05/04/2018" tabindex="0">5</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1522983600000" role="gridcell" aria-label="06/04/2018" tabindex="0">6</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1523070000000" role="gridcell" aria-label="07/04/2018" tabindex="0">7</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1523156400000" role="gridcell" aria-label="08/04/2018" tabindex="0">8</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1523242800000" role="gridcell" aria-label="09/04/2018" tabindex="0">9</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1523329200000" role="gridcell" aria-label="10/04/2018" tabindex="0">10</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1523415600000" role="gridcell" aria-label="11/04/2018" tabindex="0">11</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1523502000000" role="gridcell" aria-label="12/04/2018" aria-activedescendant="true" tabindex="0">12</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1523588400000" role="gridcell" aria-label="13/04/2018" tabindex="0">13</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1523674800000" role="gridcell" aria-label="14/04/2018" tabindex="0">14</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1523761200000" role="gridcell" aria-label="15/04/2018" tabindex="0">15</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1523847600000" role="gridcell" aria-label="16/04/2018" tabindex="0">16</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1523934000000" role="gridcell" aria-label="17/04/2018" tabindex="0">17</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524020400000" role="gridcell" aria-label="18/04/2018" tabindex="0">18</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524106800000" role="gridcell" aria-label="19/04/2018" tabindex="0">19</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524193200000" role="gridcell" aria-label="20/04/2018" tabindex="0">20</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524279600000" role="gridcell" aria-label="21/04/2018" tabindex="0">21</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524366000000" role="gridcell" aria-label="22/04/2018" tabindex="0">22</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524452400000" role="gridcell" aria-label="23/04/2018" tabindex="0">23</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524538800000" role="gridcell" aria-label="24/04/2018" tabindex="0">24</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524625200000" role="gridcell" aria-label="25/04/2018" tabindex="0">25</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524711600000" role="gridcell" aria-label="26/04/2018" tabindex="0">26</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524798000000" role="gridcell" aria-label="27/04/2018" tabindex="0">27</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524884400000" role="gridcell" aria-label="28/04/2018" tabindex="0">28</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1524970800000" role="gridcell" aria-label="29/04/2018" tabindex="0">29</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1525057200000" role="gridcell" aria-label="30/04/2018" tabindex="0">30</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1525143600000" role="gridcell" aria-label="01/05/2018" tabindex="0">1</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1525230000000" role="gridcell" aria-label="02/05/2018" tabindex="0">2</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1525316400000" role="gridcell" aria-label="03/05/2018" tabindex="0">3</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1525402800000" role="gridcell" aria-label="04/05/2018" tabindex="0">4</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1525489200000" role="gridcell" aria-label="05/05/2018" tabindex="0">5</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1525575600000" role="gridcell" aria-label="06/05/2018" tabindex="0">6</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1525662000000" role="gridcell" aria-label="07/05/2018" tabindex="0">7</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1525748400000" role="gridcell" aria-label="08/05/2018" tabindex="0">8</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1525834800000" role="gridcell" aria-label="09/05/2018" tabindex="0">9</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1525921200000" role="gridcell" aria-label="10/05/2018" tabindex="0">10</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1526007600000" role="gridcell" aria-label="11/05/2018" tabindex="0">11</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1526094000000" role="gridcell" aria-label="12/05/2018" tabindex="0">12</div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="picker__footer"><button class="picker__today btn-flat" type="button" data-pick="1523502000000" disabled="" aria-controls="dtVencimento">Hoje</button><button class="picker__clear btn-flat" type="button" data-clear="1" disabled="" aria-controls="dtVencimento">Limpar</button><button class="picker__close btn-flat" type="button" data-close="true" disabled="" aria-controls="dtVencimento">Fechar</button></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <input id="dtVencimento" name="dtVencimento" class="datepicker date picker__input" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dtVencimento_root" type="text"><label class="truncate" for="dtVencimento">Vencimento *</label>
            </div>
            <div id="formaPagamentoIdField" class="input-field col s12 l6" style=""><input class="autocomplete ui-autocomplete-input" id="formaPagamentoDescricao" name="formaPagamentoDescricao" data-url="/AutoComplete/FormaPagamento" data-url-post-modal="/FormaPagamento/FormModal" data-post-field="descricao" data-target="formaPagamentoId" autocomplete="off" type="text"><input name="formaPagamentoId" id="formaPagamentoId" type="hidden"><label class="truncate" for="formaPagamentoDescricao">Forma Pagamento *</label></div>
            <div id="condicaoParcelamentoIdField" class="input-field col s12 l6" style=""><input class="autocomplete ui-autocomplete-input" id="condicaoParcelamentoDescricao" name="condicaoParcelamentoDescricao" data-url="/AutoComplete/CondicaoParcelamento" data-url-post-modal="/CondicaoParcelamento/FormModal" data-post-field="descricao" data-target="condicaoParcelamentoId" autocomplete="off" type="text"><input name="condicaoParcelamentoId" id="condicaoParcelamentoId" type="hidden"><label class="truncate" for="condicaoParcelamentoDescricao">Condição Parcelamento *</label></div>
            <div id="categoriaIdField" class="input-field col s12 l6" style=""><input class="autocomplete ui-autocomplete-input" id="categoriaDescricao" name="categoriaDescricao" data-url="/AutoComplete/CategoriaCP" data-url-post="/ContaPagar/NovaCategoriaDespesa" data-target="categoriaId" autocomplete="off" type="text"><input name="categoriaId" id="categoriaId" type="hidden"><label class="truncate" for="categoriaDescricao">Categoria Financeira *</label></div>
            <div id="Field" class="input-field col s12"><small>* Campos obrigatórios</small></div>
         </form>
      </div>
   </div>


@endsection

@section('extrascript')

@include('financeiro.contas_a_pagar.tour')

<script>
$(function()
{
	 $( "#q" ).autocomplete({
	  source: "search/autocomplete",
	  minLength: 3,
	  select: function(event, ui) {
	  	$('#q').val(ui.item.value);
	  }
	});
});
</script>

@endsection
																	