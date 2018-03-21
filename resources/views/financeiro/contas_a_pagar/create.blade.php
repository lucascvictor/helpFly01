@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
   <div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block fly01-main-title">Dados do título a pagar</h4>
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
         <form id="fly01frm" class="col s12" action="/ContaPagar/Create" method="post" novalidate="novalidate">
            <input id="id" name="id" type="hidden"><input id="statusContaBancaria" name="statusContaBancaria" type="hidden"><input id="descricaoParcela" name="descricaoParcela" type="hidden">
            <div id="descricaoField" class="input-field col s12 l6"><input id="descricao" name="descricao" type="text"><label class="truncate" for="descricao">Descrição *</label></div>
            <div id="pessoaIdField" class="input-field col s12 l6"><input class="autocomplete ui-autocomplete-input" id="pessoaNome" name="pessoaNome" data-url="/AutoComplete/Fornecedor" data-url-post="/ContaPagar/PostFornecedor" data-target="pessoaId" autocomplete="off" type="text"><input name="pessoaId" id="pessoaId" type="hidden"><label class="truncate" for="pessoaNome">Fornecedor *</label></div>
            <div id="valorPrevistoField" class="input-field col s6 l2"><input id="valorPrevisto" name="valorPrevisto" class="currency" value="0" style="text-align: right;" type="text"><label class="truncate active" for="valorPrevisto">Valor *</label></div>
            <div id="dataEmissaoField" class="input-field col s6 l2">
               <a href="javascript:void(0)" class="" onclick="fly01._.dataEmissao.open(event)"><i class="material-icons picking">date_range</i></a>
               <div class="picker" id="dataEmissao_root" tabindex="0" aria-hidden="true">
                  <div class="picker__holder">
                     <div class="picker__frame">
                        <div class="picker__wrap">
                           <div class="picker__box">
                              <div class="picker__date-display">
                                 <div class="picker__year-display">
                                    <div>2018</div>
                                 </div>
                                 <span class="picker__weekday-display">Qua, </span><span class="picker__day-display">21 </span><span class="picker__month-display">Mar</span>
                              </div>
                              <div class="picker__container__wrapper">
                                 <div class="picker__calendar-container">
                                    <div class="picker__header">
                                       <select class="picker__select--month browser-default" aria-controls="dataEmissao_table" title="Escolha um mês" disabled="disabled">
                                          <option value="0">Janeiro</option>
                                          <option value="1">Fevereiro</option>
                                          <option value="2" selected="">Março</option>
                                          <option value="3">Abril</option>
                                          <option value="4">Maio</option>
                                          <option value="5">Junho</option>
                                          <option value="6">Julho</option>
                                          <option value="7">Agosto</option>
                                          <option value="8">Setembro</option>
                                          <option value="9">Outubro</option>
                                          <option value="10">Novembro</option>
                                          <option value="11">Dezembro</option>
                                       </select>
                                       <select class="picker__select--year browser-default" aria-controls="dataEmissao_table" title="Escolha um ano" disabled="disabled">
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
                                                <div class="picker__day picker__day--outfocus" data-pick="1519527600000" role="gridcell" aria-label="25/02/2018" tabindex="0">25</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1519614000000" role="gridcell" aria-label="26/02/2018" tabindex="0">26</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1519700400000" role="gridcell" aria-label="27/02/2018" tabindex="0">27</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1519786800000" role="gridcell" aria-label="28/02/2018" tabindex="0">28</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1519873200000" role="gridcell" aria-label="01/03/2018" tabindex="0">1</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1519959600000" role="gridcell" aria-label="02/03/2018" tabindex="0">2</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520046000000" role="gridcell" aria-label="03/03/2018" tabindex="0">3</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520132400000" role="gridcell" aria-label="04/03/2018" tabindex="0">4</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520218800000" role="gridcell" aria-label="05/03/2018" tabindex="0">5</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520305200000" role="gridcell" aria-label="06/03/2018" tabindex="0">6</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520391600000" role="gridcell" aria-label="07/03/2018" tabindex="0">7</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520478000000" role="gridcell" aria-label="08/03/2018" tabindex="0">8</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520564400000" role="gridcell" aria-label="09/03/2018" tabindex="0">9</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520650800000" role="gridcell" aria-label="10/03/2018" tabindex="0">10</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520737200000" role="gridcell" aria-label="11/03/2018" tabindex="0">11</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520823600000" role="gridcell" aria-label="12/03/2018" tabindex="0">12</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520910000000" role="gridcell" aria-label="13/03/2018" tabindex="0">13</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520996400000" role="gridcell" aria-label="14/03/2018" tabindex="0">14</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521082800000" role="gridcell" aria-label="15/03/2018" tabindex="0">15</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521169200000" role="gridcell" aria-label="16/03/2018" tabindex="0">16</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521255600000" role="gridcell" aria-label="17/03/2018" tabindex="0">17</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521342000000" role="gridcell" aria-label="18/03/2018" tabindex="0">18</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521428400000" role="gridcell" aria-label="19/03/2018" tabindex="0">19</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521514800000" role="gridcell" aria-label="20/03/2018" tabindex="0">20</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus picker__day--today picker__day--selected picker__day--highlighted" data-pick="1521601200000" role="gridcell" aria-label="21/03/2018" aria-selected="true" aria-activedescendant="true" tabindex="0">21</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521687600000" role="gridcell" aria-label="22/03/2018" tabindex="0">22</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521774000000" role="gridcell" aria-label="23/03/2018" tabindex="0">23</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521860400000" role="gridcell" aria-label="24/03/2018" tabindex="0">24</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521946800000" role="gridcell" aria-label="25/03/2018" tabindex="0">25</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1522033200000" role="gridcell" aria-label="26/03/2018" tabindex="0">26</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1522119600000" role="gridcell" aria-label="27/03/2018" tabindex="0">27</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1522206000000" role="gridcell" aria-label="28/03/2018" tabindex="0">28</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1522292400000" role="gridcell" aria-label="29/03/2018" tabindex="0">29</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1522378800000" role="gridcell" aria-label="30/03/2018" tabindex="0">30</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1522465200000" role="gridcell" aria-label="31/03/2018" tabindex="0">31</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1522551600000" role="gridcell" aria-label="01/04/2018" tabindex="0">1</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1522638000000" role="gridcell" aria-label="02/04/2018" tabindex="0">2</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1522724400000" role="gridcell" aria-label="03/04/2018" tabindex="0">3</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1522810800000" role="gridcell" aria-label="04/04/2018" tabindex="0">4</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1522897200000" role="gridcell" aria-label="05/04/2018" tabindex="0">5</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1522983600000" role="gridcell" aria-label="06/04/2018" tabindex="0">6</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1523070000000" role="gridcell" aria-label="07/04/2018" tabindex="0">7</div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="picker__footer"><button class="picker__today btn-flat" type="button" data-pick="1521601200000" aria-controls="dataEmissao" disabled="disabled">Hoje</button><button class="picker__clear btn-flat" type="button" data-clear="1" aria-controls="dataEmissao" disabled="disabled">Limpar</button><button class="picker__close btn-flat" type="button" data-close="true" aria-controls="dataEmissao" disabled="disabled">Fechar</button></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <input id="dataEmissao" name="dataEmissao" class="datepicker date picker__input valid" value="21/03/2018" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataEmissao_root" aria-invalid="false" type="text"><label class="truncate active" for="dataEmissao">Emissão *</label>
            </div>
            <div id="dataVencimentoField" class="input-field col s12 l2">
               <a href="javascript:void(0)" class="" onclick="fly01._.dataVencimento.open(event)"><i class="material-icons picking">date_range</i></a>
               <div class="picker" id="dataVencimento_root" tabindex="0" aria-hidden="true">
                  <div class="picker__holder">
                     <div class="picker__frame">
                        <div class="picker__wrap">
                           <div class="picker__box">
                              <div class="picker__date-display">
                                 <div class="picker__year-display">
                                    <div class="picker__year">2018</div>
                                 </div>
                                 <span class="picker__weekday-display">Qua, </span><span class="picker__day-display">21 </span><span class="picker__month-display">Mar</span>
                              </div>
                              <div class="picker__container__wrapper">
                                 <div class="picker__calendar-container">
                                    <div class="picker__header">
                                       <select class="picker__select--month browser-default" disabled="" aria-controls="dataVencimento_table" title="Escolha um mês">
                                          <option value="0">Janeiro</option>
                                          <option value="1">Fevereiro</option>
                                          <option value="2" selected="">Março</option>
                                          <option value="3">Abril</option>
                                          <option value="4">Maio</option>
                                          <option value="5">Junho</option>
                                          <option value="6">Julho</option>
                                          <option value="7">Agosto</option>
                                          <option value="8">Setembro</option>
                                          <option value="9">Outubro</option>
                                          <option value="10">Novembro</option>
                                          <option value="11">Dezembro</option>
                                       </select>
                                       <select class="picker__select--year browser-default" disabled="" aria-controls="dataVencimento_table" title="Escolha um ano">
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
                                       <div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="dataVencimento_table" title="Anterior"> </div>
                                       <div class="picker__nav--next" data-nav="1" role="button" aria-controls="dataVencimento_table" title="Proximo"> </div>
                                    </div>
                                    <table class="picker__table" id="dataVencimento_table" role="grid" aria-controls="dataVencimento" aria-readonly="true">
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
                                                <div class="picker__day picker__day--outfocus" data-pick="1519527600000" role="gridcell" aria-label="25/02/2018" tabindex="0">25</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1519614000000" role="gridcell" aria-label="26/02/2018" tabindex="0">26</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1519700400000" role="gridcell" aria-label="27/02/2018" tabindex="0">27</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1519786800000" role="gridcell" aria-label="28/02/2018" tabindex="0">28</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1519873200000" role="gridcell" aria-label="01/03/2018" tabindex="0">1</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1519959600000" role="gridcell" aria-label="02/03/2018" tabindex="0">2</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520046000000" role="gridcell" aria-label="03/03/2018" tabindex="0">3</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520132400000" role="gridcell" aria-label="04/03/2018" tabindex="0">4</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520218800000" role="gridcell" aria-label="05/03/2018" tabindex="0">5</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520305200000" role="gridcell" aria-label="06/03/2018" tabindex="0">6</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520391600000" role="gridcell" aria-label="07/03/2018" tabindex="0">7</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520478000000" role="gridcell" aria-label="08/03/2018" tabindex="0">8</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520564400000" role="gridcell" aria-label="09/03/2018" tabindex="0">9</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520650800000" role="gridcell" aria-label="10/03/2018" tabindex="0">10</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520737200000" role="gridcell" aria-label="11/03/2018" tabindex="0">11</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520823600000" role="gridcell" aria-label="12/03/2018" tabindex="0">12</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520910000000" role="gridcell" aria-label="13/03/2018" tabindex="0">13</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520996400000" role="gridcell" aria-label="14/03/2018" tabindex="0">14</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521082800000" role="gridcell" aria-label="15/03/2018" tabindex="0">15</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521169200000" role="gridcell" aria-label="16/03/2018" tabindex="0">16</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521255600000" role="gridcell" aria-label="17/03/2018" tabindex="0">17</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521342000000" role="gridcell" aria-label="18/03/2018" tabindex="0">18</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521428400000" role="gridcell" aria-label="19/03/2018" tabindex="0">19</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521514800000" role="gridcell" aria-label="20/03/2018" tabindex="0">20</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1521601200000" role="gridcell" aria-label="21/03/2018" aria-activedescendant="true" tabindex="0">21</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521687600000" role="gridcell" aria-label="22/03/2018" tabindex="0">22</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521774000000" role="gridcell" aria-label="23/03/2018" tabindex="0">23</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521860400000" role="gridcell" aria-label="24/03/2018" tabindex="0">24</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521946800000" role="gridcell" aria-label="25/03/2018" tabindex="0">25</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1522033200000" role="gridcell" aria-label="26/03/2018" tabindex="0">26</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1522119600000" role="gridcell" aria-label="27/03/2018" tabindex="0">27</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1522206000000" role="gridcell" aria-label="28/03/2018" tabindex="0">28</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1522292400000" role="gridcell" aria-label="29/03/2018" tabindex="0">29</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1522378800000" role="gridcell" aria-label="30/03/2018" tabindex="0">30</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1522465200000" role="gridcell" aria-label="31/03/2018" tabindex="0">31</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1522551600000" role="gridcell" aria-label="01/04/2018" tabindex="0">1</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1522638000000" role="gridcell" aria-label="02/04/2018" tabindex="0">2</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1522724400000" role="gridcell" aria-label="03/04/2018" tabindex="0">3</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1522810800000" role="gridcell" aria-label="04/04/2018" tabindex="0">4</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1522897200000" role="gridcell" aria-label="05/04/2018" tabindex="0">5</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1522983600000" role="gridcell" aria-label="06/04/2018" tabindex="0">6</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1523070000000" role="gridcell" aria-label="07/04/2018" tabindex="0">7</div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="picker__footer"><button class="picker__today btn-flat" type="button" data-pick="1521601200000" disabled="" aria-controls="dataVencimento">Hoje</button><button class="picker__clear btn-flat" type="button" data-clear="1" disabled="" aria-controls="dataVencimento">Limpar</button><button class="picker__close btn-flat" type="button" data-close="true" disabled="" aria-controls="dataVencimento">Fechar</button></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <input id="dataVencimento" name="dataVencimento" class="datepicker date picker__input" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataVencimento_root" type="text"><label class="truncate" for="dataVencimento">Vencimento *</label>
            </div>
            <div id="formaPagamentoIdField" class="input-field col s12 l6"><input class="autocomplete ui-autocomplete-input" id="formaPagamentoDescricao" name="formaPagamentoDescricao" data-url="/AutoComplete/FormaPagamento" data-url-post-modal="/FormaPagamento/FormModal" data-post-field="descricao" data-target="formaPagamentoId" autocomplete="off" type="text"><input name="formaPagamentoId" id="formaPagamentoId" type="hidden"><label class="truncate" for="formaPagamentoDescricao">Forma Pagamento *</label></div>
            <div id="condicaoParcelamentoIdField" class="input-field col s12 l6"><input class="autocomplete ui-autocomplete-input" id="condicaoParcelamentoDescricao" name="condicaoParcelamentoDescricao" data-url="/AutoComplete/CondicaoParcelamento" data-url-post-modal="/CondicaoParcelamento/FormModal" data-post-field="descricao" data-target="condicaoParcelamentoId" autocomplete="off" type="text"><input name="condicaoParcelamentoId" id="condicaoParcelamentoId" type="hidden"><label class="truncate" for="condicaoParcelamentoDescricao">Condição Parcelamento *</label></div>
            <div id="categoriaIdField" class="input-field col s12 l6"><input class="autocomplete ui-autocomplete-input" id="categoriaDescricao" name="categoriaDescricao" data-url="/AutoComplete/CategoriaCP" data-url-post="/ContaPagar/NovaCategoriaDespesa" data-target="categoriaId" autocomplete="off" type="text"><input name="categoriaId" id="categoriaId" type="hidden"><label class="truncate" for="categoriaDescricao">Categoria Financeira *</label></div>
            <div id="observacaoField" class="input-field col s12"><textarea id="observacao" name="observacao" class="materialize-textarea"></textarea><label class="truncate" for="observacao">Observação</label></div>
            <div id="repetirField" class="input-field col s12"><input id="repetir" name="repetir" value="true" type="checkbox"><label class="truncate" for="repetir">Repetir</label></div>
            <div id="tipoPeriodicidadeField" class="input-field col s6 m3 l3" style="display: none;">
               <div class="select-wrapper">
                  <span class="caret">▼</span><input class="select-dropdown" readonly="true" data-activates="select-options-1d9m3k8" value="Mensal" data-constrainwidth="undefined" type="text">
                  <ul id="select-options-1d9m3k8" class="dropdown-content select-dropdown ">
                     <li class=""><span>Nenhuma</span></li>
                     <li class=""><span>Semanal</span></li>
                     <li class=""><span>Mensal</span></li>
                     <li class=""><span>Anual</span></li>
                  </ul>
                  <select id="tipoPeriodicidade" name="tipoPeriodicidade" data-select-id="1d9m3k8" class="initialized">
                     <option value="Nenhuma">Nenhuma</option>
                     <option value="Semanal">Semanal</option>
                     <option value="Mensal" selected="selected">Mensal</option>
                     <option value="Anual">Anual</option>
                  </select>
               </div>
               <label class="truncate active" for="tipoPeriodicidade">Periodicidade</label>
            </div>
            <div id="tipoRepeticaoField" class="input-field col s6 m3 l3" style="display: none;">
               <div class="select-wrapper">
                  <span class="caret">▼</span><input class="select-dropdown" readonly="true" data-activates="select-options-jg0ch49" value="Quantidade" data-constrainwidth="undefined" type="text">
                  <ul id="select-options-jg0ch49" class="dropdown-content select-dropdown ">
                     <li class=""><span>Quantidade</span></li>
                     <li class=""><span>Período</span></li>
                  </ul>
                  <select id="tipoRepeticao" name="tipoRepeticao" data-select-id="jg0ch49" class="initialized">
                     <option value="Q" selected="selected">Quantidade</option>
                     <option value="P">Período</option>
                  </select>
               </div>
               <label class="truncate active" for="tipoRepeticao">Repetição</label>
            </div>
            <div id="numeroRepeticoesField" class="input-field col s6 m3 l3" style="display: none;"><input id="numeroRepeticoes" name="numeroRepeticoes" type="text"><label class="truncate" for="numeroRepeticoes">Número de Repetições</label></div>
            <div id="periodoFimField" class="input-field col s6 m3 l3" style="display: none;">
               <a href="javascript:void(0)" class="" onclick="fly01._.periodoFim.open(event)"><i class="material-icons picking">date_range</i></a>
               <div class="picker" id="periodoFim_root" tabindex="0" aria-hidden="true">
                  <div class="picker__holder">
                     <div class="picker__frame">
                        <div class="picker__wrap">
                           <div class="picker__box">
                              <div class="picker__date-display">
                                 <div class="picker__year-display">
                                    <div class="picker__year">2018</div>
                                 </div>
                                 <span class="picker__weekday-display">Qua, </span><span class="picker__day-display">21 </span><span class="picker__month-display">Mar</span>
                              </div>
                              <div class="picker__container__wrapper">
                                 <div class="picker__calendar-container">
                                    <div class="picker__header">
                                       <select class="picker__select--month browser-default" disabled="" aria-controls="periodoFim_table" title="Escolha um mês">
                                          <option value="0">Janeiro</option>
                                          <option value="1">Fevereiro</option>
                                          <option value="2" selected="">Março</option>
                                          <option value="3">Abril</option>
                                          <option value="4">Maio</option>
                                          <option value="5">Junho</option>
                                          <option value="6">Julho</option>
                                          <option value="7">Agosto</option>
                                          <option value="8">Setembro</option>
                                          <option value="9">Outubro</option>
                                          <option value="10">Novembro</option>
                                          <option value="11">Dezembro</option>
                                       </select>
                                       <select class="picker__select--year browser-default" disabled="" aria-controls="periodoFim_table" title="Escolha um ano">
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
                                       <div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="periodoFim_table" title="Anterior"> </div>
                                       <div class="picker__nav--next" data-nav="1" role="button" aria-controls="periodoFim_table" title="Proximo"> </div>
                                    </div>
                                    <table class="picker__table" id="periodoFim_table" role="grid" aria-controls="periodoFim" aria-readonly="true">
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
                                                <div class="picker__day picker__day--outfocus" data-pick="1519527600000" role="gridcell" aria-label="25/02/2018" tabindex="0">25</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1519614000000" role="gridcell" aria-label="26/02/2018" tabindex="0">26</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1519700400000" role="gridcell" aria-label="27/02/2018" tabindex="0">27</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1519786800000" role="gridcell" aria-label="28/02/2018" tabindex="0">28</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1519873200000" role="gridcell" aria-label="01/03/2018" tabindex="0">1</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1519959600000" role="gridcell" aria-label="02/03/2018" tabindex="0">2</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520046000000" role="gridcell" aria-label="03/03/2018" tabindex="0">3</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520132400000" role="gridcell" aria-label="04/03/2018" tabindex="0">4</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520218800000" role="gridcell" aria-label="05/03/2018" tabindex="0">5</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520305200000" role="gridcell" aria-label="06/03/2018" tabindex="0">6</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520391600000" role="gridcell" aria-label="07/03/2018" tabindex="0">7</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520478000000" role="gridcell" aria-label="08/03/2018" tabindex="0">8</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520564400000" role="gridcell" aria-label="09/03/2018" tabindex="0">9</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520650800000" role="gridcell" aria-label="10/03/2018" tabindex="0">10</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520737200000" role="gridcell" aria-label="11/03/2018" tabindex="0">11</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520823600000" role="gridcell" aria-label="12/03/2018" tabindex="0">12</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520910000000" role="gridcell" aria-label="13/03/2018" tabindex="0">13</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1520996400000" role="gridcell" aria-label="14/03/2018" tabindex="0">14</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521082800000" role="gridcell" aria-label="15/03/2018" tabindex="0">15</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521169200000" role="gridcell" aria-label="16/03/2018" tabindex="0">16</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521255600000" role="gridcell" aria-label="17/03/2018" tabindex="0">17</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521342000000" role="gridcell" aria-label="18/03/2018" tabindex="0">18</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521428400000" role="gridcell" aria-label="19/03/2018" tabindex="0">19</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521514800000" role="gridcell" aria-label="20/03/2018" tabindex="0">20</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1521601200000" role="gridcell" aria-label="21/03/2018" aria-activedescendant="true" tabindex="0">21</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521687600000" role="gridcell" aria-label="22/03/2018" tabindex="0">22</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521774000000" role="gridcell" aria-label="23/03/2018" tabindex="0">23</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521860400000" role="gridcell" aria-label="24/03/2018" tabindex="0">24</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1521946800000" role="gridcell" aria-label="25/03/2018" tabindex="0">25</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1522033200000" role="gridcell" aria-label="26/03/2018" tabindex="0">26</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1522119600000" role="gridcell" aria-label="27/03/2018" tabindex="0">27</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1522206000000" role="gridcell" aria-label="28/03/2018" tabindex="0">28</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1522292400000" role="gridcell" aria-label="29/03/2018" tabindex="0">29</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1522378800000" role="gridcell" aria-label="30/03/2018" tabindex="0">30</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1522465200000" role="gridcell" aria-label="31/03/2018" tabindex="0">31</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1522551600000" role="gridcell" aria-label="01/04/2018" tabindex="0">1</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1522638000000" role="gridcell" aria-label="02/04/2018" tabindex="0">2</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1522724400000" role="gridcell" aria-label="03/04/2018" tabindex="0">3</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1522810800000" role="gridcell" aria-label="04/04/2018" tabindex="0">4</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1522897200000" role="gridcell" aria-label="05/04/2018" tabindex="0">5</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1522983600000" role="gridcell" aria-label="06/04/2018" tabindex="0">6</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1523070000000" role="gridcell" aria-label="07/04/2018" tabindex="0">7</div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="picker__footer"><button class="picker__today btn-flat" type="button" data-pick="1521601200000" disabled="" aria-controls="periodoFim">Hoje</button><button class="picker__clear btn-flat" type="button" data-clear="1" disabled="" aria-controls="periodoFim">Limpar</button><button class="picker__close btn-flat" type="button" data-close="true" disabled="" aria-controls="periodoFim">Fechar</button></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <input id="periodoFim" name="periodoFim" class="datepicker date picker__input" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="periodoFim_root" type="text"><label class="truncate" for="periodoFim">Fim</label>
            </div>
            <div id="Field" class="input-field col s12"><small>* Campos obrigatórios</small></div>
         </form>
      </div>
   </div>
 
@endsection

@section('extrascript')

@include('financeiro.contas_a_pagar.tour')

<script>

$('#repetir').click( function(){
    If ($('#repetir').val() == "false") {
        $('#tipoPeriodicidadeField').removeAttr('style');
        $('#tipoRepeticaoField').removeAttr('style');
        $('#numeroRepeticoesField').removeAttr('style');
    } else {
        $('#tipoPeriodicidadeField').attr('style',"display: none;");
        $('#tipoRepeticaoField').attr('style',"display: none;");
        $('#numeroRepeticoesField').attr('style', "display: none;");
    }
});

 $('#dataEmissao').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });

</script>

@endsection