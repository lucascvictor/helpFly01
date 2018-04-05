

<div id="fly01frmNovoReceb" class="modal modal-fixed-footer hide" style="z-index: 1015; display: block; opacity: 1; transform: scaleX(1); top: 10%;">
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

