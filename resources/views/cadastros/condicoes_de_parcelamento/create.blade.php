@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
								<div id="headTop" class="z-depth-0-half">
									<div class="container">
										<div class="row">
											<div class="col s12 fly01-main-header">
												<h4 class="thin inline-block">Dados da condição de parcelamento</h4>
												<ul class="right valign-wrapper fly01-buttons">
													<li>
														<a id="cancel" class="btn " onclick="fnCancelar();">Cancelar</a>
													</li>
													<li>
														<a id="save" class="btn " onclick="fnSalvar();">Salvar</a>
														<div class="fixed-action-btn"> 
														<a href="#" id="tour" class="btn pulse orange btn-medium" onclick="initTour();" style="border-radius: 80px;"><i class="material-icons small left">help</i>Iniciar Tour</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="container">
									<div class="row">
										<form id="fly01frm" class="col s12" action="https://novofinanceiro.fly01.com.br/CondicaoParcelamento/Create" method="post" novalidate="novalidate" data-vivaldi-spatnav-clickable="1">
											<div id="dadosCondParc">
											<input id="id" type="hidden" name="id"/>
											<div id="descricaoField" class="input-field col s6 l9">
												<input id="descricao" type="text" name="descricao"/>
												<label class="truncate" for="descricao">Descrição</label>
											</div>
											<div id="TipoSimulacaoField" class="input-field col s6 l3">
												<div class="select-wrapper initialized">
													<span class="caret">▼</span>
													<input type="text" class="select-dropdown" readonly="true" data-activates="select-options-x0azzr0" value="Quantidade de parcelas">
														<ul id="select-options-x0azzr0" class="dropdown-content select-dropdown ">
															<li class="" data-vivaldi-spatnav-clickable="1">
																<span>Quantidade de parcelas</span>
															</li>
															<li class="" data-vivaldi-spatnav-clickable="1">
																<span>Cond. Parcelamento</span>
															</li>
														</ul>
														<select id="TipoSimulacao" name="TipoSimulacao" data-select-id="x0azzr0" class="initialized">
															<option value="QtdParcelas">Quantidade de parcelas</option>
															<option value="CondParcelamento">Cond. Parcelamento</option>
														</select>
													</div>
													<label class="truncate active" for="TipoSimulacao">Tipo de Simulação</label>
												</div>
												<div id="qtdParcelasField" class="input-field col s6 l4">
													<input id="qtdParcelas" type="text" name="qtdParcelas" class="masked numbers" style="text-align: right;"/>
													<label class="truncate" for="qtdParcelas">Quantidade de Parcelas</label>
												</div>
												<div id="condicoesParcelamentoField" class="input-field col s6 l8">
													<input id="condicoesParcelamento" type="text" name="condicoesParcelamento" disabled="disabled"/>
													<label class="truncate" for="condicoesParcelamento">Intervalo de dias</label>
												</div>
										</div>
												<div id="simulatorLabelField" class="input-field col s12">
													<h5 id="simulatorLabel" class="thin-bordered">Simular Condição de Parcelamento</h5>
												</div>
												<div id="valorReferenciaField" class="input-field col s6 l5">
													<input id="valorReferencia" type="text" name="valorReferencia" class="masked currency" style="text-align: right;"/>
													<label class="truncate" for="valorReferencia">Valor Referência</label>
												</div>
												<div id="dataReferenciaField" class="input-field col s6 l5">
													<div class="picker" id="dataReferencia_root" tabindex="0" data-vivaldi-spatnav-clickable="1" aria-hidden="true">
														<div class="picker__holder">
															<div class="picker__frame">
																<div class="picker__wrap">
																	<div class="picker__box">
																		<div class="picker__date-display">
																			<div class="picker__year-display">
																				<div class="picker__year">2018</div>
																			</div>
																			<span class="picker__weekday-display">Seg, </span>
																			<span class="picker__day-display">12 </span>
																			<span class="picker__month-display">Fev</span>
																		</div>
																		<div class="picker__container__wrapper">
																			<div class="picker__calendar-container">
																				<div class="picker__header">
																					<div class="picker__month">Fevereiro</div>
																					<div class="picker__year">2018</div>
																					<div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="dataReferencia_table" title="Anterior"> </div>
																					<div class="picker__nav--next" data-nav="1" role="button" aria-controls="dataReferencia_table" title="Proximo"> </div>
																				</div>
																				<table class="picker__table" id="dataReferencia_table" role="grid" aria-controls="dataReferencia" aria-readonly="true">
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
																								<div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1518400800000" role="gridcell" aria-label="12/02/2018" aria-activedescendant="true" tabindex="0">12</div>
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
																			<div class="picker__footer">
																				<button class="picker__today btn-flat waves-effect" type="button" data-pick="1518400800000" disabled="" aria-controls="dataReferencia">Hoje</button>
																				<button class="picker__clear btn-flat waves-effect" type="button" data-clear="1" disabled="" aria-controls="dataReferencia">Limpar</button>
																				<button class="picker__close btn-flat waves-effect" type="button" data-close="true" disabled="" aria-controls="dataReferencia">Fechar</button>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<input id="dataReferencia" type="text" name="dataReferencia" class="datepicker picker__input" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataReferencia_root"/>
													<label class="truncate" for="dataReferencia">Data Referência</label>
												</div>
												<div id="btnRefreshField" class="input-field col s12 l2">
													<input id="btnRefresh" type="button" name="btnRefresh" class="btn undefined" value="Simular"/>
												</div>
												<div id="simulatorDataTableField" class="input-field col s12">
													<table class="display striped responsive nowrap" width="100%" id="simulatorDataTable">
														<thead>
															<tr id="columns">
																<th>Parcela</th>
																<th>Data</th>
																<th>Valor</th>
															</tr>
														</thead>
													</table>
												</div>
											</form>
										</div>
									</div>
@endsection

@section('extrascript')

@include('cadastros.condicoes_de_parcelamento.tour')

@endsection