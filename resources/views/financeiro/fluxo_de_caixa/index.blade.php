@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
   <div id="headTop" class="z-depth-0-half pinned">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block" data-intro="Hello step one!">Fluxo de Caixa</h4>
               <ul class="right valign-wrapper fly01-buttons">
                  <li><a id="save" class="btn " onclick="fnAtualizar();">Atualizar</a></li>
				  <li><button class="btn new_btn">Tour</button></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <form id="fly01frm" class="col s12" method="post" novalidate="novalidate">
            <div id="dataInicialField" class="input-field col s6 m3 l4">
               <div class="picker" id="dataInicial_root" tabindex="0" aria-hidden="true">
                  <div class="picker__holder">
                     <div class="picker__frame">
                        <div class="picker__wrap">
                           <div class="picker__box">
                              <div class="picker__date-display">
                                 <div class="picker__year-display">
                                    <div>2018</div>
                                 </div>
                                 <span class="picker__weekday-display">Qua, </span><span class="picker__day-display">14 </span><span class="picker__month-display">Fev</span>
                              </div>
                              <div class="picker__container__wrapper">
                                 <div class="picker__calendar-container">
                                    <div class="picker__header">
                                       <div class="picker__month">Fevereiro</div>
                                       <div class="picker__year">2018</div>
                                       <div class="picker__nav--prev picker__nav--disabled" data-nav="-1" role="button" aria-controls="dataInicial_table" title="Anterior"> </div>
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
                                                <div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1517104800000" role="gridcell" aria-label="28/01/2018" aria-disabled="true">28</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1517191200000" role="gridcell" aria-label="29/01/2018" aria-disabled="true">29</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1517277600000" role="gridcell" aria-label="30/01/2018" aria-disabled="true">30</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1517364000000" role="gridcell" aria-label="31/01/2018" aria-disabled="true">31</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1517450400000" role="gridcell" aria-label="01/02/2018" aria-disabled="true">1</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1517536800000" role="gridcell" aria-label="02/02/2018" aria-disabled="true">2</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1517623200000" role="gridcell" aria-label="03/02/2018" aria-disabled="true">3</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1517709600000" role="gridcell" aria-label="04/02/2018" aria-disabled="true">4</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1517796000000" role="gridcell" aria-label="05/02/2018" aria-disabled="true">5</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1517882400000" role="gridcell" aria-label="06/02/2018" aria-disabled="true">6</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1517968800000" role="gridcell" aria-label="07/02/2018" aria-disabled="true">7</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1518055200000" role="gridcell" aria-label="08/02/2018" aria-disabled="true">8</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1518141600000" role="gridcell" aria-label="09/02/2018" aria-disabled="true">9</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1518228000000" role="gridcell" aria-label="10/02/2018" aria-disabled="true">10</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1518314400000" role="gridcell" aria-label="11/02/2018" aria-disabled="true">11</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1518400800000" role="gridcell" aria-label="12/02/2018" aria-disabled="true">12</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1518487200000" role="gridcell" aria-label="13/02/2018" aria-disabled="true">13</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus picker__day--today picker__day--selected picker__day--highlighted" data-pick="1518573600000" role="gridcell" aria-label="14/02/2018" aria-selected="true" aria-activedescendant="true" tabindex="0">14</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518660000000" role="gridcell" aria-label="15/02/2018" tabindex="0">15</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518746400000" role="gridcell" aria-label="16/02/2018" tabindex="0">16</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518832800000" role="gridcell" aria-label="17/02/2018" tabindex="0">17</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518922800000" role="gridcell" aria-label="18/02/2018" tabindex="0">18</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1519009200000" role="gridcell" aria-label="19/02/2018" tabindex="0">19</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1519095600000" role="gridcell" aria-label="20/02/2018" tabindex="0">20</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1519182000000" role="gridcell" aria-label="21/02/2018" tabindex="0">21</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1519268400000" role="gridcell" aria-label="22/02/2018" tabindex="0">22</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1519354800000" role="gridcell" aria-label="23/02/2018" tabindex="0">23</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1519441200000" role="gridcell" aria-label="24/02/2018" tabindex="0">24</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1519527600000" role="gridcell" aria-label="25/02/2018" tabindex="0">25</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1519614000000" role="gridcell" aria-label="26/02/2018" tabindex="0">26</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1519700400000" role="gridcell" aria-label="27/02/2018" tabindex="0">27</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1519786800000" role="gridcell" aria-label="28/02/2018" tabindex="0">28</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1519873200000" role="gridcell" aria-label="01/03/2018" tabindex="0">1</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1519959600000" role="gridcell" aria-label="02/03/2018" tabindex="0">2</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1520046000000" role="gridcell" aria-label="03/03/2018" tabindex="0">3</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1520132400000" role="gridcell" aria-label="04/03/2018" tabindex="0">4</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1520218800000" role="gridcell" aria-label="05/03/2018" tabindex="0">5</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1520305200000" role="gridcell" aria-label="06/03/2018" tabindex="0">6</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1520391600000" role="gridcell" aria-label="07/03/2018" tabindex="0">7</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1520478000000" role="gridcell" aria-label="08/03/2018" tabindex="0">8</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1520564400000" role="gridcell" aria-label="09/03/2018" tabindex="0">9</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1520650800000" role="gridcell" aria-label="10/03/2018" tabindex="0">10</div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="picker__footer"><button class="picker__today btn-flat" type="button" data-pick="1518573600000" disabled="" aria-controls="dataInicial">Hoje</button><button class="picker__clear btn-flat" type="button" data-clear="1" disabled="" aria-controls="dataInicial">Limpar</button><button class="picker__close btn-flat" type="button" data-close="true" disabled="" aria-controls="dataInicial">Fechar</button></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <input id="dataInicial" name="dataInicial" class="datepicker picker__input" value="14/02/2018" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataInicial_root" type="text"><label class="truncate active" for="dataInicial">Data Inicial</label>
            </div>
            <div id="dataFinalField" class="input-field col s6 m3 l4">
               <div class="picker" id="dataFinal_root" tabindex="0" aria-hidden="true">
                  <div class="picker__holder">
                     <div class="picker__frame">
                        <div class="picker__wrap">
                           <div class="picker__box">
                              <div class="picker__date-display">
                                 <div class="picker__year-display">
                                    <div>2018</div>
                                 </div>
                                 <span class="picker__weekday-display">Sex, </span><span class="picker__day-display">16 </span><span class="picker__month-display">Mar</span>
                              </div>
                              <div class="picker__container__wrapper">
                                 <div class="picker__calendar-container">
                                    <div class="picker__header">
                                       <div class="picker__month">Março</div>
                                       <div class="picker__year">2018</div>
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
                                                <div class="picker__day picker__day--infocus picker__day--selected picker__day--highlighted" data-pick="1521169200000" role="gridcell" aria-label="16/03/2018" aria-selected="true" aria-activedescendant="true" tabindex="0">16</div>
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
                                 <div class="picker__footer"><button class="picker__today btn-flat" type="button" data-pick="1518573600000" disabled="" aria-controls="dataFinal">Hoje</button><button class="picker__clear btn-flat" type="button" data-clear="1" disabled="" aria-controls="dataFinal">Limpar</button><button class="picker__close btn-flat" type="button" data-close="true" disabled="" aria-controls="dataFinal">Fechar</button></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <input id="dataFinal" name="dataFinal" class="datepicker picker__input" value="31/03/2018" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataFinal_root" type="text"><label class="truncate active" for="dataFinal">Data Final</label>
            </div>
            <div id="fly01btngrpField" class="input-field col s12 m6 l4">
               <label class="truncate active" for="fly01btngrp">Selecione o período</label>
               <div id="fly01btngrp" class="btn-group input-field"><input id="btnDia" name="btnDia" class="btn col s4 " onclick="fnAtualizarPeriodo(&quot;1&quot;)" value="Dia" type="button"><input id="btnSemana" name="btnSemana" class="btn col s4 " onclick="fnAtualizarPeriodo(&quot;7&quot;)" value="Semana" type="button"><input id="btnMes" name="btnMes" class="btn col s4 active" onclick="fnAtualizarPeriodo(&quot;30&quot;)" value="Mês" type="button"></div>
            </div>
         </form>
		 <div class="areageral">
         <div id="dfly01cardSaldo" class="col s12 m4 saldo_atual">
            <div class="card" id="fly01cardSaldo" data-color="orange">
               <div class="card-content white-text orange lighten-2">
                  <span class="card-title condensed">Saldo atual</span>
                  <h5 class="center">{{ $saldo[4] }}</h5>
               </div>
               <div class="card-action right-align orange lighten-1"><a href="javascript:void(0)" onclick="fly01.go(&quot;/Extrato/List&quot;)" class="white-text ">Ver mais</a></div>
            </div>
         </div>
         <div id="dfly01cardCP" class="col s12 m4" data-step="<h2>Descrição</h2> Um texto sugestivo para o conjunto de 'regras' do grupo tributário">
            <div class="card" id="fly01cardCP" data-color="red">
               <div class="card-content white-text red lighten-2">
                  <span class="card-title condensed">A pagar</span>
                  <h5 class="center">{{ ($pag[4]) }}</h5>
               </div>
               <div class="card-action right-align red lighten-1"><a href="javascript:void(0)" onclick="fly01.go(&quot;/ContaPagar/List&quot;)" class="white-text ">Ver mais</a></div>
            </div>
         </div>
         <div id="dfly01cardCR" class="col s12 m4">
            <div class="card" id="fly01cardCR" data-color="green">
               <div class="card-content white-text green lighten-2">
                  <span class="card-title condensed">A receber</span>
                  <h5 class="center">{{ $rec[4] }}</h5>
               </div>
               <div class="card-action right-align green lighten-1"><a href="javascript:void(0)" onclick="fly01.go(&quot;/ContaReceber/List&quot;)" class="white-text ">Ver mais</a></div>
            </div>
         </div>
		 </div>
         <div id="dfly01chart" class="col s12">
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
                        <td tabindex="0">31/01/2018</td>
                        <td>{{ $rec[0] }}</td>
                        <td>{{ $pag[0] }}</td>
                        <td>{{ $saldo[0] }}</td>
                        <td><input class="rowRecordId" value="undefined" type="hidden"></td>
                     </tr>
                     <tr role="row" class="even">
                        <td tabindex="0">11/02/2018</td>
                        <td>{{ $rec[1] }}</td>
                        <td>{{ $pag[1] }}</td>
                        <td>{{ $saldo[1] }}</td>
                        <td><input class="rowRecordId" value="undefined" type="hidden"></td>
                     </tr>
                     <tr role="row" class="odd">
                        <td tabindex="0">15/02/2018</td>
                        <td>{{ $rec[2] }}</td>
                        <td>{{ $pag[2] }}</td>
                        <td>{{ $saldo[2] }}</td>
                        <td><input class="rowRecordId" value="undefined" type="hidden"></td>
                     </tr>
                     <tr role="row" class="even">
                        <td tabindex="0">24/02/2018</td>
                        <td>{{ $rec[3] }}</td>
                        <td>{{ $pag[3] }}</td>
                        <td>{{ $saldo[3] }}</td>
                        <td><input class="rowRecordId" value="undefined" type="hidden"></td>
                     </tr>
                     <tr role="row" class="odd">
                        <td tabindex="0">27/02/2018</td>
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

@endsection


@section('extrascript')

<script>
     var barChartData = {
            labels: ["31/01/2018", "11/02/2018", "15/02/2018", "24/02/2018", "27/02/2018"],
           datasets: [{
                type: 'bar',
                label: 'Recebimentos',
                backgroundColor: "#4BC0C0",
                data: [
					<?php $i = 0; ?>
                    @while($i <= 4)
                    {{ $vRec[$i] }},
					<?php $i++; ?>
                    @endwhile
                ]
            }, {
                type: 'bar',
                label: 'Pagamentos',
                backgroundColor: "#FF6384",
                data: [
					<?php $i = 0; ?>
                    @while($i <= 4)
                    {{ $vPag[$i] }},
					<?php $i++; ?>
                    @endwhile
                ]
            }, {
                type: 'line',
                label: 'Saldo',
                backgroundColor: "#000000",
                borderWidth: 3,
                borderColor: "#000000",
                fill: false,
                data: [
					<?php $i = 0; ?>
                    @while($i <= 4)
                    {{ $vSaldo[$i] }},
					<?php $i++; ?>
                    @endwhile
                ]
            }]
        };
            var ctx = document.getElementById("fly01chart");
            var myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    title:{
                        display:true,
                        text:"Fluxo de Caixa"
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false
                    },
                    responsive: true,
                    scales: {
                        xAxes: [{
                            stacked: true,
                        }],
                        yAxes: [{
                            stacked: true
                        }]
                    }
                }
            });
</script>

	<script>

		var enjoyhint_instance = new EnjoyHint({});


		var enjoyhint_script_steps = [
		{
			'click .areageral' : 'Clique aqui para iniciar o Tour'
		},
		{
			'click .saldo_atual': 'Este é o seu Saldo atual'
		}
		];


		enjoyhint_instance.set(enjoyhint_script_steps);


		enjoyhint_instance.run();

	</script>


@endsection
														