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
               <div class="picker" id="dataInicial_root" tabindex="0" data-vivaldi-spatnav-clickable="1" aria-hidden="true">
                  <div class="picker__holder">
                     <div class="picker__frame">
                        <div class="picker__wrap">
                           <div class="picker__box">
                              <div class="picker__date-display">
                                 <div class="picker__year-display">
                                    <div>2018</div>
                                 </div>
                                 <span class="picker__weekday-display">Dom, </span><span class="picker__day-display">25 </span><span class="picker__month-display">Mar</span>
                              </div>
                              <div class="picker__container__wrapper">
                                 <div class="picker__calendar-container">
                                    <div class="picker__header">
                                       <select class="picker__select--month browser-default" disabled="" aria-controls="dataInicial_table" title="Escolha um mês">
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
                                                <div class="picker__day picker__day--infocus" data-pick="1521601200000" role="gridcell" aria-label="21/03/2018" tabindex="0">21</div>
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
                                                <div class="picker__day picker__day--infocus picker__day--selected picker__day--highlighted" data-pick="1521946800000" role="gridcell" aria-label="25/03/2018" aria-selected="true" aria-activedescendant="true" tabindex="0">25</div>
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
                                 <div class="picker__footer"><button class="picker__today btn-flat" type="button" data-pick="1524625200000" disabled="" aria-controls="dataInicial">Hoje</button><button class="picker__clear btn-flat" type="button" data-clear="1" disabled="" aria-controls="dataInicial">Limpar</button><button class="picker__close btn-flat" type="button" data-close="true" disabled="" aria-controls="dataInicial">Fechar</button></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <input id="dataInicial" type="text" name="dataInicial" class="datepicker date picker__input" value="31/03/2018" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataInicial_root"><label class="truncate active" for="dataInicial">Data Inicial</label>
            </div>
            <div id="dataFinalField" class="input-field col s6 m3 l4">
               <a href="javascript:void(0)" class="" onclick="fly01._.dataFinal.open(event)"><i class="material-icons picking">date_range</i></a>
               <div class="picker" id="dataFinal_root" tabindex="0" data-vivaldi-spatnav-clickable="1" aria-hidden="true">
                  <div class="picker__holder">
                     <div class="picker__frame">
                        <div class="picker__wrap">
                           <div class="picker__box">
                              <div class="picker__date-display">
                                 <div class="picker__year-display">
                                    <div>2018</div>
                                 </div>
                                 <span class="picker__weekday-display">Qua, </span><span class="picker__day-display">25 </span><span class="picker__month-display">Abr</span>
                              </div>
                              <div class="picker__container__wrapper">
                                 <div class="picker__calendar-container">
                                    <div class="picker__header">
                                       <select class="picker__select--month browser-default" disabled="" aria-controls="dataFinal_table" title="Escolha um mês">
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
                                       <select class="picker__select--year browser-default" disabled="" aria-controls="dataFinal_table" title="Escolha um ano">
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
                                       <div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="dataFinal_table" title="Anterior"> </div>
                                       <div class="picker__nav--next" data-nav="1" role="button" aria-controls="dataFinal_table" title="Proximo"> </div>
                                    </div>
                                    <table class="picker__table" id="dataFinal_table" role="grid" aria-controls="dataFinal" aria-readonly="true">
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
                                                <div class="picker__day picker__day--infocus" data-pick="1523502000000" role="gridcell" aria-label="12/04/2018" tabindex="0">12</div>
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
                                                <div class="picker__day picker__day--infocus picker__day--today picker__day--selected picker__day--highlighted" data-pick="1524625200000" role="gridcell" aria-label="25/04/2018" aria-selected="true" aria-activedescendant="true" tabindex="0">25</div>
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
                                 <div class="picker__footer"><button class="picker__today btn-flat" type="button" data-pick="1524625200000" disabled="" aria-controls="dataFinal">Hoje</button><button class="picker__clear btn-flat" type="button" data-clear="1" disabled="" aria-controls="dataFinal">Limpar</button><button class="picker__close btn-flat" type="button" data-close="true" disabled="" aria-controls="dataFinal">Fechar</button></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
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