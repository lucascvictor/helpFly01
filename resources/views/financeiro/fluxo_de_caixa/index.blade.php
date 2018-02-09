@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
<div id="headTop" class="z-depth-0-half">
	<div class="container">
		<div class="row">
			<div class="col s12 fly01-main-header">
				<h4 class="thin inline-block">Fluxo de Caixa</h4>
				<ul class="right valign-wrapper fly01-buttons">
					<li>
						<a id="save" class="btn " onclick="fnAtualizar();">Atualizar</a>
					</li>
					<li>
						<a id="save" class="btn " onclick="fnAtualizar();">Iniciar Tour</a>
					</li>
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
										<span class="picker__weekday-display">Qua, </span>
										<span class="picker__day-display">24 </span>
										<span class="picker__month-display">Jan</span>
									</div>
									<div class="picker__container__wrapper">
										<div class="picker__calendar-container">
											<div class="picker__header">
												<div class="picker__month">Janeiro</div>
												<div class="picker__year">2018</div>
												<div class="picker__nav--prev picker__nav--disabled" data-nav="-1" role="button" aria-controls="dataInicial_table" title="Anterior"> </div>
												<div class="picker__nav--next" data-nav="1" role="button" aria-controls="dataInicial_table" title="Proximo"> </div>
											</div>
											<table class="picker__table" id="dataInicial_table" role="grid" aria-controls="dataInicial" aria-readonly="true">
												<thead>
													<tr>
														<th class="picker__weekday" scope="col" title="Domingo">D</th>
														<th class="picker__weekday" scope="col" title="Segunda">S</th>
														<th class="picker__weekday" scope="col" title="Ter�a">T</th>
														<th class="picker__weekday" scope="col" title="Quarta">Q</th>
														<th class="picker__weekday" scope="col" title="Quinta">Q</th>
														<th class="picker__weekday" scope="col" title="Sexta">S</th>
														<th class="picker__weekday" scope="col" title="S�bado">S</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td role="presentation">
															<div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1514685600000" role="gridcell" aria-label="31/12/2017" aria-disabled="true">31</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1514772000000" role="gridcell" aria-label="01/01/2018" aria-disabled="true">1</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1514858400000" role="gridcell" aria-label="02/01/2018" aria-disabled="true">2</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1514944800000" role="gridcell" aria-label="03/01/2018" aria-disabled="true">3</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1515031200000" role="gridcell" aria-label="04/01/2018" aria-disabled="true">4</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1515117600000" role="gridcell" aria-label="05/01/2018" aria-disabled="true">5</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1515204000000" role="gridcell" aria-label="06/01/2018" aria-disabled="true">6</div>
														</td>
													</tr>
													<tr>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1515290400000" role="gridcell" aria-label="07/01/2018" aria-disabled="true">7</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1515376800000" role="gridcell" aria-label="08/01/2018" aria-disabled="true">8</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1515463200000" role="gridcell" aria-label="09/01/2018" aria-disabled="true">9</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1515549600000" role="gridcell" aria-label="10/01/2018" aria-disabled="true">10</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1515636000000" role="gridcell" aria-label="11/01/2018" aria-disabled="true">11</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1515722400000" role="gridcell" aria-label="12/01/2018" aria-disabled="true">12</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1515808800000" role="gridcell" aria-label="13/01/2018" aria-disabled="true">13</div>
														</td>
													</tr>
													<tr>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1515895200000" role="gridcell" aria-label="14/01/2018" aria-disabled="true">14</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1515981600000" role="gridcell" aria-label="15/01/2018" aria-disabled="true">15</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1516068000000" role="gridcell" aria-label="16/01/2018" aria-disabled="true">16</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1516154400000" role="gridcell" aria-label="17/01/2018" aria-disabled="true">17</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1516240800000" role="gridcell" aria-label="18/01/2018" aria-disabled="true">18</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1516327200000" role="gridcell" aria-label="19/01/2018" aria-disabled="true">19</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1516413600000" role="gridcell" aria-label="20/01/2018" aria-disabled="true">20</div>
														</td>
													</tr>
													<tr>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1516500000000" role="gridcell" aria-label="21/01/2018" aria-disabled="true">21</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1516586400000" role="gridcell" aria-label="22/01/2018" aria-disabled="true">22</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1516672800000" role="gridcell" aria-label="23/01/2018" aria-disabled="true">23</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--today picker__day--selected picker__day--highlighted" data-pick="1516759200000" role="gridcell" aria-label="24/01/2018" aria-selected="true" aria-activedescendant="true" tabindex="0">24</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1516845600000" role="gridcell" aria-label="25/01/2018" tabindex="0">25</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1516932000000" role="gridcell" aria-label="26/01/2018" tabindex="0">26</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1517018400000" role="gridcell" aria-label="27/01/2018" tabindex="0">27</div>
														</td>
													</tr>
													<tr>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1517104800000" role="gridcell" aria-label="28/01/2018" tabindex="0">28</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1517191200000" role="gridcell" aria-label="29/01/2018" tabindex="0">29</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1517277600000" role="gridcell" aria-label="30/01/2018" tabindex="0">30</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1517364000000" role="gridcell" aria-label="31/01/2018" tabindex="0">31</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--outfocus" data-pick="1517450400000" role="gridcell" aria-label="01/02/2018" tabindex="0">1</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--outfocus" data-pick="1517536800000" role="gridcell" aria-label="02/02/2018" tabindex="0">2</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--outfocus" data-pick="1517623200000" role="gridcell" aria-label="03/02/2018" tabindex="0">3</div>
														</td>
													</tr>
													<tr>
														<td role="presentation">
															<div class="picker__day picker__day--outfocus" data-pick="1517709600000" role="gridcell" aria-label="04/02/2018" tabindex="0">4</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--outfocus" data-pick="1517796000000" role="gridcell" aria-label="05/02/2018" tabindex="0">5</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--outfocus" data-pick="1517882400000" role="gridcell" aria-label="06/02/2018" tabindex="0">6</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--outfocus" data-pick="1517968800000" role="gridcell" aria-label="07/02/2018" tabindex="0">7</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--outfocus" data-pick="1518055200000" role="gridcell" aria-label="08/02/2018" tabindex="0">8</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--outfocus" data-pick="1518141600000" role="gridcell" aria-label="09/02/2018" tabindex="0">9</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--outfocus" data-pick="1518228000000" role="gridcell" aria-label="10/02/2018" tabindex="0">10</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="picker__footer">
											<button class="picker__today btn-flat waves-effect" type="button" data-pick="1516759200000" disabled="" aria-controls="dataInicial">Hoje</button>
											<button class="picker__clear btn-flat waves-effect" type="button" data-clear="1" disabled="" aria-controls="dataInicial">Limpar</button>
											<button class="picker__close btn-flat waves-effect"
type="button" data-close="true" disabled="" aria-controls="dataInicial">Fechar</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<input id="dataInicial" type="text" name="dataInicial" class="datepicker picker__input" value="24/01/2018" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataInicial_root">
					<label class="truncate active" for="dataInicial">Data Inicial</label>
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
											<span class="picker__weekday-display">Qua, </span>
											<span class="picker__day-display">28 </span>
											<span class="picker__month-display">Fev</span>
										</div>
										<div class="picker__container__wrapper">
											<div class="picker__calendar-container">
												<div class="picker__header">
													<div class="picker__month">Fevereiro</div>
													<div class="picker__year">2018</div>
													<div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="dataFinal_table" title="Anterior"> </div>
													<div class="picker__nav--next" data-nav="1" role="button" aria-controls="dataFinal_table" title="Proximo"> </div>
												</div>
												<table class="picker__table" id="dataFinal_table" role="grid" aria-controls="dataFinal" aria-readonly="true">
													<thead>
														<tr>
															<th class="picker__weekday" scope="col" title="Domingo">D</th>
															<th class="picker__weekday" scope="col" title="Segunda">S</th>
															<th class="picker__weekday" scope="col" title="Ter�a">T</th>
															<th class="picker__weekday" scope="col" title="Quarta">Q</th>
															<th class="picker__weekday" scope="col" title="Quinta">Q</th>
															<th class="picker__weekday" scope="col" title="Sexta">S</th>
															<th class="picker__weekday" scope="col" title="S�bado">S</th>
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
																<div class="picker__day picker__day--infocus picker__day--selected picker__day--highlighted" data-pick="1519786800000" role="gridcell" aria-label="28/02/2018" aria-selected="true" aria-activedescendant="true" tabindex="0">28</div>
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
												<button class="picker__today btn-flat waves-effect" type="button" data-pick="1516759200000" disabled="" aria-controls="dataFinal">Hoje</button>
												<button class="picker__clear btn-flat waves-effect" type="button" data-clear="1" disabled="" aria-controls="dataFinal">Limpar</button>
												<button class="picker__close btn-flat waves-effect" type="button" data-close="true" disabled="" aria-controls="dataFinal">Fechar</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<input id="dataFinal" type="text" name="dataFinal" class="datepicker picker__input" value="28/02/2018" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataFinal_root">
						<label class="truncate active" for="dataFinal">Data Final</label>
					</div>
					<div id="fly01btngrpField" class="input-field col s12 m6 l4">
						<label class="truncate active" for="fly01btngrp">Selecione o per�odo</label>
						<div id="fly01btngrp" class="btn-group input-field">
							<input id="btnDia" type="button" name="btnDia" class="btn col s4 " onclick="fnAtualizarPeriodo(&quot;1&quot;)" value="Dia">
								<input id="btnSemana" type="button"
name="btnSemana" class="btn col s4 " onclick="fnAtualizarPeriodo(&quot;7&quot;)" value="Semana">
									<input id="btnMes" type="button" name="btnMes" class="btn col s4 active" onclick="fnAtualizarPeriodo(&quot;30&quot;)" value="M�s">
									</div>
								</div>
							</form>
							<div id="dfly01cardSaldo" class="col s12 m4">
								<div class="card" id="fly01cardSaldo" data-color="orange">
									<div class="card-content white-text orange lighten-2">
										<span class="card-title condensed">Saldo atual</span>
										<h5 class="center">R${{ $saldo[3] }},00</h5>
									</div>
									<div class="card-action right-align orange lighten-1">
										<a href="javascript:void(0)" onclick="fly01.go(&quot;/Extrato/List&quot;)" class="white-text ">Ver mais</a>
									</div>
								</div>
							</div>
							<div id="dfly01cardCP" class="col s12 m4">
								<div class="card" id="fly01cardCP" data-color="red">
									<div class="card-content white-text red lighten-2">
										<span class="card-title condensed">A pagar</span>
										<h5 class="center">R$1.200,00</h5>
									</div>
									<div class="card-action right-align red lighten-1">
										<a href="javascript:void(0)" onclick="fly01.go(&quot;/ContaPagar/List&quot;)" class="white-text ">Ver mais</a>
									</div>
								</div>
							</div>
							<div id="dfly01cardCR" class="col s12 m4">
								<div class="card" id="fly01cardCR" data-color="green">
									<div class="card-content white-text green lighten-2">
										<span class="card-title condensed">A receber</span>
										<h5 class="center">R$3.281,66</h5>
									</div>
									<div class="card-action right-align green lighten-1">
										<a href="javascript:void(0)" onclick="fly01.go(&quot;/ContaReceber/List&quot;)" class="white-text ">Ver mais</a>
									</div>
								</div>
							</div>

							<div id="dfly01chart" class="col s12">
								<div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
									<div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
										<div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"/>
									</div>
									<div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
										<div style="position:absolute;width:200%;height:200%;left:0; top:0"/>
									</div>
								</div>
								<h6/>
								<canvas id="fly01chart" width="360" height="180" class="chartjs-render-monitor" style="display: block; width: 360px; height: 180px;"/>
							</div>
							<div id="fly01dt_wrapper" class="col s12 no-footer">
								<div class=""/>
								<div id="fly01dt_processing" class="dataTables_processing" style="display: none;"/>
								<table class="display striped responsive nowrap dataTable no-footer dtr-inline collapsed" width="100%" id="fly01dt" role="grid" aria-describedby="fly01dt_info" style="width: 100%;">
									<thead>
										<tr id="columns" role="row">
											<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 109px;">
												<span>Data</span>
											</th>
											<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 136px;">
												<span>Total Recebimentos</span>
											</th>
											<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px; display: none;">
												<span>Total Pagamentos</span>
											</th>
											<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 81px;">
												<span>Saldo Final</span>
											</th>
											<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 1px;">
												<span/>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr role="row" class="odd">
											<td tabindex="0">24/01/2018</td>
											<td>R$1.081,66</td>
											<td>-R$1.200,00</td>
											<td>-R$2.776,68</td>
											<td>
												<input type="hidden" class="rowRecordId" value="undefined">
												</td>
											</tr>
											<tr role="row" class="even">
												<td tabindex="0">11/02/2018</td>
												<td>R$166,68</td>
												<td style="display: none;">R$0,00</td>
												<td>-R$2.610,00</td>
												<td>
													<input type="hidden" class="rowRecordId" value="undefined">
													</td>
												</tr>
												<tr role="row" class="odd">
													<td tabindex="0">15/02/2018</td>
													<td>R$0,00</td>
													<td style="display: none;">-R$1.200,00</td>
													<td>-R$3.810,00</td>
													<td>
														<input type="hidden" class="rowRecordId" value="undefined">
														</td>
													</tr>
												</tbody>
											</table>
											<div class="">
												<div class="dataTables_info" id="fly01dt_info" role="status" aria-live="polite"/>
												<div class="dataTables_paginate paging_simple_numbers" id="fly01dt_paginate" style="display: none;">
													<a class="paginate_button previous disabled" aria-controls="fly01dt" data-dt-idx="0" tabindex="0" id="fly01dt_previous">Anterior</a>
													<span>
														<a class="paginate_button current" aria-controls="fly01dt" data-dt-idx="1" tabindex="0">1</a>
													</span><a class="paginate_button next disabled" aria-controls="fly01dt" data-dt-idx="2" tabindex="0" id="fly01dt_next">Pr�ximo</a>
												</div>
											</div>
										</div>
									</div>
								</div>


								<!-- Tap Target Structure -->
								<div class="tap-target teal lighten-3" data-activates="mybtn">
									<div class="tap-target-content">
										<h5>Available: 24/7</h5>
										<p>Call us now to speak with someone about your matter.</p>
										<a href="#!" onclick="$('.tap-target').tapTarget('close')">Dismiss</a>
									</div>
								</div>
@endsection


@section('extrascript')

								<script>
     var barChartData = {
            labels: ["31/01/2018", "11/02/2018", "15/02/2018", "24/02/2018", "2702/2018"],
           datasets: [{
                type: 'bar',
                label: 'Recebimentos',
                backgroundColor: "#4BC0C0",
                data: [
									<?php $i = 0; ?>
                    @while($i <= 3)
                    {{ $rec[$i] }},
											<?php $i++; ?>
                    @endwhile
                ]
            }, {
                type: 'bar',
                label: 'Pagamentos',
                backgroundColor: "#FF6384",
                data: [
											<?php $i = 0; ?>
                    @while($i <= 3)
                    {{ $pag[$i] }},
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
                    @while($i <= 3)
                    {{ $saldo[$i] }},
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

@endsection
														