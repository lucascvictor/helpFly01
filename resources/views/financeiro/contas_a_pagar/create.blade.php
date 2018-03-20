@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')

 <div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block">Dados do título a pagar</h4>
               <ul class="right valign-wrapper fly01-buttons">
                <li><a id="cancel" class="btn " href="{{ url('/voltar') }}">Cancelar</a></li>
                <li><a id="save" class="btn " onclick="fnSalvar();">Salvar</a></li>
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
   <div class="container">
      <div class="row">
         <form id="fly01frm" class="col s12" action="/ContaReceber/Create" method="post" novalidate="novalidate">
            <input id="id" type="hidden" name="id"><input id="statusContaBancaria" type="hidden" name="statusContaBancaria"><input id="descricaoParcela" type="hidden" name="descricaoParcela">
            <div id="descricaoField" class="input-field col s12 l6"><input id="descricao" type="text" name="descricao"><label class="truncate" for="descricao">Descrição</label></div>
            <div id="pessoaIdField" class="input-field col s12 l6"><input type="hidden" name="pessoaId" id="pessoaId"><input type="text" class="autocomplete ui-autocomplete-input" id="pessoaNome" name="pessoaNome" data-url="/AutoComplete/Pessoa" data-target="pessoaId" autocomplete="off"><label class="truncate" for="pessoaNome">Pagador</label></div>
            <div id="valorPrevistoField" class="input-field col s6 l2"><input id="valorPrevisto" type="text" name="valorPrevisto" class="masked currency" style="text-align: right;"><label class="truncate" for="valorPrevisto">Valor</label></div>
            <div id="dataEmissaoField" class="input-field col s6 l2">
               <div class="picker" id="dataEmissao_root" tabindex="0" aria-hidden="true">
                  <div class="picker__holder">
                     <div class="picker__frame">
                        <div class="picker__wrap">
                           <div class="picker__box">
                              <div class="picker__date-display">
                                 <div class="picker__year-display">
                                    <div class="picker__year">2018</div>
                                 </div>
                                 <span class="picker__weekday-display">Seg, </span><span class="picker__day-display">19 </span><span class="picker__month-display">Fev</span>
                              </div>
                              <div class="picker__container__wrapper">
                                 <div class="picker__calendar-container">
                                    <div class="picker__header">
                                       <div class="picker__month">Fevereiro</div>
                                       <div class="picker__year">2018</div>
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
                                                <div class="picker__day picker__day--outfocus" data-pick="1517104800000" role="gridcell" aria-label="28/01/2018" tabindex="0">28</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1517191200000" role="gridcell" aria-label="29/01/2018" tabindex="0">29</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1517277600000" role="gridcell" aria-label="30/01/2018" tabindex="0">30</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1517364000000" role="gridcell" aria-label="31/01/2018" tabindex="0">31</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1517450400000" role="gridcell" aria-label="01/02/2018" tabindex="0">1</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1517536800000" role="gridcell" aria-label="02/02/2018" tabindex="0">2</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1517623200000" role="gridcell" aria-label="03/02/2018" tabindex="0">3</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1517709600000" role="gridcell" aria-label="04/02/2018" tabindex="0">4</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1517796000000" role="gridcell" aria-label="05/02/2018" tabindex="0">5</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1517882400000" role="gridcell" aria-label="06/02/2018" tabindex="0">6</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1517968800000" role="gridcell" aria-label="07/02/2018" tabindex="0">7</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518055200000" role="gridcell" aria-label="08/02/2018" tabindex="0">8</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518141600000" role="gridcell" aria-label="09/02/2018" tabindex="0">9</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518228000000" role="gridcell" aria-label="10/02/2018" tabindex="0">10</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518314400000" role="gridcell" aria-label="11/02/2018" tabindex="0">11</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518400800000" role="gridcell" aria-label="12/02/2018" tabindex="0">12</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518487200000" role="gridcell" aria-label="13/02/2018" tabindex="0">13</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518573600000" role="gridcell" aria-label="14/02/2018" tabindex="0">14</div>
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
                                                <div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1519009200000" role="gridcell" aria-label="19/02/2018" aria-activedescendant="true" tabindex="0">19</div>
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
                                 <div class="picker__footer"><button class="picker__today btn-flat waves-effect" type="button" data-pick="1519009200000" disabled="" aria-controls="dataEmissao">Hoje</button><button class="picker__clear btn-flat waves-effect" type="button" data-clear="1" disabled="" aria-controls="dataEmissao">Limpar</button><button class="picker__close btn-flat waves-effect" type="button" data-close="true" disabled="" aria-controls="dataEmissao">Fechar</button></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <input id="dataEmissao" type="text" name="dataEmissao" class="datepicker picker__input" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataEmissao_root"><label class="truncate" for="dataEmissao">Emissão</label>
            </div>
            <div id="dataVencimentoField" class="input-field col s12 l2">
               <div class="picker" id="dataVencimento_root" tabindex="0" aria-hidden="true">
                  <div class="picker__holder">
                     <div class="picker__frame">
                        <div class="picker__wrap">
                           <div class="picker__box">
                              <div class="picker__date-display">
                                 <div class="picker__year-display">
                                    <div class="picker__year">2018</div>
                                 </div>
                                 <span class="picker__weekday-display">Seg, </span><span class="picker__day-display">19 </span><span class="picker__month-display">Fev</span>
                              </div>
                              <div class="picker__container__wrapper">
                                 <div class="picker__calendar-container">
                                    <div class="picker__header">
                                       <div class="picker__month">Fevereiro</div>
                                       <div class="picker__year">2018</div>
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
                                                <div class="picker__day picker__day--outfocus" data-pick="1517104800000" role="gridcell" aria-label="28/01/2018" tabindex="0">28</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1517191200000" role="gridcell" aria-label="29/01/2018" tabindex="0">29</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1517277600000" role="gridcell" aria-label="30/01/2018" tabindex="0">30</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1517364000000" role="gridcell" aria-label="31/01/2018" tabindex="0">31</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1517450400000" role="gridcell" aria-label="01/02/2018" tabindex="0">1</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1517536800000" role="gridcell" aria-label="02/02/2018" tabindex="0">2</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1517623200000" role="gridcell" aria-label="03/02/2018" tabindex="0">3</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1517709600000" role="gridcell" aria-label="04/02/2018" tabindex="0">4</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1517796000000" role="gridcell" aria-label="05/02/2018" tabindex="0">5</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1517882400000" role="gridcell" aria-label="06/02/2018" tabindex="0">6</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1517968800000" role="gridcell" aria-label="07/02/2018" tabindex="0">7</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518055200000" role="gridcell" aria-label="08/02/2018" tabindex="0">8</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518141600000" role="gridcell" aria-label="09/02/2018" tabindex="0">9</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518228000000" role="gridcell" aria-label="10/02/2018" tabindex="0">10</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518314400000" role="gridcell" aria-label="11/02/2018" tabindex="0">11</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518400800000" role="gridcell" aria-label="12/02/2018" tabindex="0">12</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518487200000" role="gridcell" aria-label="13/02/2018" tabindex="0">13</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518573600000" role="gridcell" aria-label="14/02/2018" tabindex="0">14</div>
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
                                                <div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1519009200000" role="gridcell" aria-label="19/02/2018" aria-activedescendant="true" tabindex="0">19</div>
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
                                 <div class="picker__footer"><button class="picker__today btn-flat waves-effect" type="button" data-pick="1519009200000" disabled="" aria-controls="dataVencimento">Hoje</button><button class="picker__clear btn-flat waves-effect" type="button" data-clear="1" disabled="" aria-controls="dataVencimento">Limpar</button><button class="picker__close btn-flat waves-effect" type="button" data-close="true" disabled="" aria-controls="dataVencimento">Fechar</button></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <input id="dataVencimento" type="text" name="dataVencimento" class="datepicker picker__input" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataVencimento_root"><label class="truncate" for="dataVencimento">Vencimento</label>
            </div>
            <div id="formaPagamentoIdField" class="input-field col s12 l6"><input type="hidden" name="formaPagamentoId" id="formaPagamentoId"><input type="text" class="autocomplete ui-autocomplete-input" id="formaPagamentoDescricao" name="formaPagamentoDescricao" data-url="/AutoComplete/FormaPagamento" data-target="formaPagamentoId" autocomplete="off"><label class="truncate" for="formaPagamentoDescricao">Forma Pagamento</label></div>
            <div id="condicaoParcelamentoIdField" class="input-field col s12 l6"><input type="hidden" name="condicaoParcelamentoId" id="condicaoParcelamentoId"><input type="text" class="autocomplete ui-autocomplete-input" id="condicaoParcelamentoDescricao" name="condicaoParcelamentoDescricao" data-url="/AutoComplete/CondicaoParcelamento" data-target="condicaoParcelamentoId" autocomplete="off"><label class="truncate" for="condicaoParcelamentoDescricao">Condição Parcelamento</label></div>
            <div id="categoriaFinanceiraIdField" class="input-field col s12 l6"><input type="hidden" name="categoriaFinanceiraId" id="categoriaFinanceiraId"><input type="text" class="autocomplete ui-autocomplete-input" id="categoriaFinanceiraDescricao" name="categoriaFinanceiraDescricao" data-url="/AutoComplete/CategoriaFinanceiraCR" data-target="categoriaFinanceiraId" autocomplete="off"><label class="truncate" for="categoriaFinanceiraDescricao">Categoria Financeira</label></div>
            <div id="observacaoField" class="input-field col s12"><textarea id="observacao" name="observacao" class="materialize-textarea"></textarea><label class="truncate" for="observacao">Observação</label></div>
            <div id="repetirField" class="input-field col s12">
               <p><input id="repetir" type="checkbox" name="repetir" value="false"><label class="truncate" for="repetir">Repetir</label></p>
            </div>
            <div id="tipoPeriodicidadeField" class="input-field col s6 m3 l3" style="display: none;">
               <div class="select-wrapper">
                  <span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-8530wd7" value="Mensal">
                  <ul id="select-options-8530wd7" class="dropdown-content select-dropdown ">
                     <li class=""><span>Nenhuma</span></li>
                     <li class=""><span>Semanal</span></li>
                     <li class=""><span>Mensal</span></li>
                     <li class=""><span>Anual</span></li>
                  </ul>
                  <select id="tipoPeriodicidade" name="tipoPeriodicidade" data-select-id="8530wd7" class="initialized">
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
                  <span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-q986yb1" value="Quantidade">
                  <ul id="select-options-q986yb1" class="dropdown-content select-dropdown ">
                     <li class=""><span>Quantidade</span></li>
                     <li class=""><span>Período</span></li>
                  </ul>
                  <select id="tipoRepeticao" name="tipoRepeticao" data-select-id="q986yb1" class="initialized">
                     <option value="Q" selected="selected">Quantidade</option>
                     <option value="P">Período</option>
                  </select>
               </div>
               <label class="truncate active" for="tipoRepeticao">Repetição</label>
            </div>
            <div id="numeroRepeticoesField" class="input-field col s6 m3 l3" style="display: none;"><input id="numeroRepeticoes" type="text" name="numeroRepeticoes"><label class="truncate" for="numeroRepeticoes">Número de Repetições</label></div>
            <div id="periodoFimField" class="input-field col s6 m3 l3" style="display: none;">
               <div class="picker" id="periodoFim_root" tabindex="0" aria-hidden="true">
                  <div class="picker__holder">
                     <div class="picker__frame">
                        <div class="picker__wrap">
                           <div class="picker__box">
                              <div class="picker__date-display">
                                 <div class="picker__year-display">
                                    <div class="picker__year">2018</div>
                                 </div>
                                 <span class="picker__weekday-display">Seg, </span><span class="picker__day-display">19 </span><span class="picker__month-display">Fev</span>
                              </div>
                              <div class="picker__container__wrapper">
                                 <div class="picker__calendar-container">
                                    <div class="picker__header">
                                       <div class="picker__month">Fevereiro</div>
                                       <div class="picker__year">2018</div>
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
                                                <div class="picker__day picker__day--outfocus" data-pick="1517104800000" role="gridcell" aria-label="28/01/2018" tabindex="0">28</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1517191200000" role="gridcell" aria-label="29/01/2018" tabindex="0">29</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1517277600000" role="gridcell" aria-label="30/01/2018" tabindex="0">30</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--outfocus" data-pick="1517364000000" role="gridcell" aria-label="31/01/2018" tabindex="0">31</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1517450400000" role="gridcell" aria-label="01/02/2018" tabindex="0">1</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1517536800000" role="gridcell" aria-label="02/02/2018" tabindex="0">2</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1517623200000" role="gridcell" aria-label="03/02/2018" tabindex="0">3</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1517709600000" role="gridcell" aria-label="04/02/2018" tabindex="0">4</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1517796000000" role="gridcell" aria-label="05/02/2018" tabindex="0">5</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1517882400000" role="gridcell" aria-label="06/02/2018" tabindex="0">6</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1517968800000" role="gridcell" aria-label="07/02/2018" tabindex="0">7</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518055200000" role="gridcell" aria-label="08/02/2018" tabindex="0">8</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518141600000" role="gridcell" aria-label="09/02/2018" tabindex="0">9</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518228000000" role="gridcell" aria-label="10/02/2018" tabindex="0">10</div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518314400000" role="gridcell" aria-label="11/02/2018" tabindex="0">11</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518400800000" role="gridcell" aria-label="12/02/2018" tabindex="0">12</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518487200000" role="gridcell" aria-label="13/02/2018" tabindex="0">13</div>
                                             </td>
                                             <td role="presentation">
                                                <div class="picker__day picker__day--infocus" data-pick="1518573600000" role="gridcell" aria-label="14/02/2018" tabindex="0">14</div>
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
                                                <div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1519009200000" role="gridcell" aria-label="19/02/2018" aria-activedescendant="true" tabindex="0">19</div>
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
                                 <div class="picker__footer"><button class="picker__today btn-flat waves-effect" type="button" data-pick="1519009200000" disabled="" aria-controls="periodoFim">Hoje</button><button class="picker__clear btn-flat waves-effect" type="button" data-clear="1" disabled="" aria-controls="periodoFim">Limpar</button><button class="picker__close btn-flat waves-effect" type="button" data-close="true" disabled="" aria-controls="periodoFim">Fechar</button></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <input id="periodoFim" type="text" name="periodoFim" class="datepicker picker__input" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="periodoFim_root"><label class="truncate" for="periodoFim">Fim</label>
            </div>
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

</script>

@endsection