@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
<div id="headTop" class="z-depth-0-half">
	<div class="container">
		<div class="row">
			<div class="col s12 fly01-main-header">
				<h4 class="thin inline-block">DRE</h4>
				<ul class="right valign-wrapper fly01-buttons">
					<li>
						<a id="save" class="btn " onclick="fnAtualizar();">Atualizar</a>
					</li>
					<li>
						<a id="print" class="btn " onclick="fnImprimirDRE();">Imprimir</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<form id="fly01frm" class="col s12" method="post" novalidate="novalidate">
			<div id="dataInicialField" class="input-field col s6">
				<div class="picker" id="dataInicial_root" tabindex="0" aria-hidden="true">
					<div class="picker__holder">
						<div class="picker__frame">
							<div class="picker__wrap">
								<div class="picker__box">
									<div class="picker__date-display">
										<div class="picker__year-display">
											<div>2018</div>
										</div>
										<span class="picker__weekday-display">Seg, </span>
										<span class="picker__day-display">1 </span>
										<span class="picker__month-display">Jan</span>
									</div>
									<div class="picker__container__wrapper">
										<div class="picker__calendar-container">
											<div class="picker__header">
												<div class="picker__month">Janeiro</div>
												<div class="picker__year">2018</div>
												<div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="dataInicial_table" title="Anterior"> </div>
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
															<div class="picker__day picker__day--outfocus" data-pick="1514685600000" role="gridcell" aria-label="31/12/2017" tabindex="0">31</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--selected picker__day--highlighted" data-pick="1514772000000" role="gridcell" aria-label="01/01/2018" aria-selected="true" aria-activedescendant="true" tabindex="0">1</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1514858400000" role="gridcell" aria-label="02/01/2018" tabindex="0">2</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1514944800000" role="gridcell" aria-label="03/01/2018" tabindex="0">3</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1515031200000" role="gridcell" aria-label="04/01/2018" tabindex="0">4</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1515117600000" role="gridcell" aria-label="05/01/2018" tabindex="0">5</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1515204000000" role="gridcell" aria-label="06/01/2018" tabindex="0">6</div>
														</td>
													</tr>
													<tr>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1515290400000" role="gridcell" aria-label="07/01/2018" tabindex="0">7</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1515376800000" role="gridcell" aria-label="08/01/2018" tabindex="0">8</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1515463200000" role="gridcell" aria-label="09/01/2018" tabindex="0">9</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1515549600000" role="gridcell" aria-label="10/01/2018" tabindex="0">10</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1515636000000" role="gridcell" aria-label="11/01/2018" tabindex="0">11</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1515722400000" role="gridcell" aria-label="12/01/2018" tabindex="0">12</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1515808800000" role="gridcell" aria-label="13/01/2018" tabindex="0">13</div>
														</td>
													</tr>
													<tr>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1515895200000" role="gridcell" aria-label="14/01/2018" tabindex="0">14</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1515981600000" role="gridcell" aria-label="15/01/2018" tabindex="0">15</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1516068000000" role="gridcell" aria-label="16/01/2018" tabindex="0">16</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1516154400000" role="gridcell" aria-label="17/01/2018" tabindex="0">17</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1516240800000" role="gridcell" aria-label="18/01/2018" tabindex="0">18</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1516327200000" role="gridcell" aria-label="19/01/2018" tabindex="0">19</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1516413600000" role="gridcell" aria-label="20/01/2018" tabindex="0">20</div>
														</td>
													</tr>
													<tr>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1516500000000" role="gridcell" aria-label="21/01/2018" tabindex="0">21</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1516586400000" role="gridcell" aria-label="22/01/2018" tabindex="0">22</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus" data-pick="1516672800000" role="gridcell" aria-label="23/01/2018" tabindex="0">23</div>
														</td>
														<td role="presentation">
															<div class="picker__day picker__day--infocus picker__day--today" data-pick="1516759200000" role="gridcell" aria-label="24/01/2018" tabindex="0">24</div>
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
											<button class="picker__close btn-flat waves-effect" type="button" data-close="true" disabled="" aria-controls="dataInicial">Fechar</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<input id="dataInicial" type="text" name="dataInicial" class="datepicker picker__input" value="01/01/2018" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataInicial_root">
					<label class="truncate active" for="dataInicial">Data Inicial</label>
				</div>
				<div id="dataFinalField" class="input-field col s6">
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
											<span class="picker__day-display">24 </span>
											<span class="picker__month-display">Jan</span>
										</div>
										<div class="picker__container__wrapper">
											<div class="picker__calendar-container">
												<div class="picker__header">
													<div class="picker__month">Janeiro</div>
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
																<div class="picker__day picker__day--outfocus" data-pick="1514685600000" role="gridcell" aria-label="31/12/2017" tabindex="0">31</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1514772000000" role="gridcell" aria-label="01/01/2018" tabindex="0">1</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1514858400000" role="gridcell" aria-label="02/01/2018" tabindex="0">2</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1514944800000" role="gridcell" aria-label="03/01/2018" tabindex="0">3</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515031200000" role="gridcell" aria-label="04/01/2018" tabindex="0">4</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515117600000" role="gridcell" aria-label="05/01/2018" tabindex="0">5</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515204000000" role="gridcell" aria-label="06/01/2018" tabindex="0">6</div>
															</td>
														</tr>
														<tr>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515290400000" role="gridcell" aria-label="07/01/2018" tabindex="0">7</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515376800000" role="gridcell" aria-label="08/01/2018" tabindex="0">8</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515463200000" role="gridcell" aria-label="09/01/2018" tabindex="0">9</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515549600000" role="gridcell" aria-label="10/01/2018" tabindex="0">10</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515636000000" role="gridcell" aria-label="11/01/2018" tabindex="0">11</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515722400000" role="gridcell" aria-label="12/01/2018" tabindex="0">12</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515808800000" role="gridcell" aria-label="13/01/2018" tabindex="0">13</div>
															</td>
														</tr>
														<tr>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515895200000" role="gridcell" aria-label="14/01/2018" tabindex="0">14</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1515981600000" role="gridcell" aria-label="15/01/2018" tabindex="0">15</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1516068000000" role="gridcell" aria-label="16/01/2018" tabindex="0">16</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1516154400000" role="gridcell" aria-label="17/01/2018" tabindex="0">17</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1516240800000" role="gridcell" aria-label="18/01/2018" tabindex="0">18</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1516327200000" role="gridcell" aria-label="19/01/2018" tabindex="0">19</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1516413600000" role="gridcell" aria-label="20/01/2018" tabindex="0">20</div>
															</td>
														</tr>
														<tr>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1516500000000" role="gridcell" aria-label="21/01/2018" tabindex="0">21</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1516586400000" role="gridcell" aria-label="22/01/2018" tabindex="0">22</div>
															</td>
															<td role="presentation">
																<div class="picker__day picker__day--infocus" data-pick="1516672800000" role="gridcell" aria-label="23/01/2018" tabindex="0">23</div>
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
					<input id="dataFinal" type="text" name="dataFinal" class="datepicker picker__input" value="24/01/2018" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataFinal_root">
						<label class="truncate active" for="dataFinal">Data Final</label>
					</div>
				</form>
				<div id="dfly01cardReceitas" class="col s12 m4">
					<div class="card" id="fly01cardReceitas" data-color="orange">
						<div class="card-content white-text orange lighten-2">
							<span class="card-title condensed">Receitas</span>
							<h5 class="center">R$1.266,66</h5>
						</div>
						<div class="card-action right-align orange lighten-1">
							<a href="javascript:void(0)" onclick="fly01.go(&quot;/ContaReceber/List&quot;)" class="white-text ">Contas a receber</a>
						</div>
					</div>
				</div>
				<div id="dfly01cardDespesas" class="col s12 m4">
					<div class="card" id="fly01cardDespesas" data-color="red">
						<div class="card-content white-text red lighten-2">
							<span class="card-title condensed">Despesas</span>
							<h5 class="center">-R$1.200,00</h5>
						</div>
						<div class="card-action right-align red lighten-1">
							<a href="javascript:void(0)" onclick="fly01.go(&quot;/ContaPagar/List&quot;)" class="white-text ">Contas a pagar</a>
						</div>
					</div>
				</div>
				<div id="dfly01cardTotal" class="col s12 m4">
					<div class="card" id="fly01cardTotal" data-color="green">

						<div class="card-content white-text green lighten-2">
							<span class="card-title condensed">Total</span>
							<h5 class="center">R$66,66</h5>
						</div>
						<div class="card-action right-align green lighten-1">
							<a href="javascript:void(0)" class="white-text "/>
						</div>
					</div>
				</div>
				<div id="fly01dtreceitas_wrapper" class="col s12 no-footer">
					<div class=""/>
					<div id="fly01dtreceitas_processing" class="dataTables_processing" style="display: none;"/>
					<table class="display striped responsive nowrap dataTable no-footer dtr-inline" width="100%" id="fly01dtreceitas" role="grid" aria-describedby="fly01dtreceitas_info" style="width: 100%;">
						<thead>
							<tr id="columns" role="row">
								<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 91px;">
									<span>(+) RECEITAS</span>
								</th>
								<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 166px;">
									<span/>
								</th>
								<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 78px;">
									<span/>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr role="row" class="odd">
								<td tabindex="0" nowrap="nowrap">01</td>
								<td nowrap="nowrap">VERBA LIVRE</td>
								<td nowrap="nowrap">R$1.100,00</td>
							</tr>
							<tr role="row" class="even">
								<td tabindex="0" nowrap="nowrap">01.01</td>
								<td nowrap="nowrap">VERBA LIVRE ANALITICO</td>
								<td nowrap="nowrap">R$700,00</td>
							</tr>
							<tr role="row" class="odd">
								<td tabindex="0" nowrap="nowrap">01.02</td>
								<td nowrap="nowrap">TESTE 2</td>
								<td nowrap="nowrap">R$400,00</td>
							</tr>
							<tr role="row" class="even">
								<td tabindex="0" nowrap="nowrap">01.03</td>
								<td nowrap="nowrap">Aluguel M�quinas</td>
								<td nowrap="nowrap">R$0,00</td>
							</tr>
							<tr role="row" class="odd">
								<td tabindex="0" nowrap="nowrap">03</td>
								<td nowrap="nowrap">VENDAS</td>
								<td nowrap="nowrap">R$0,00</td>
							</tr>
							<tr role="row" class="even">
								<td tabindex="0" nowrap="nowrap">03.01</td>
								<td nowrap="nowrap">VENDAS ELETRONICOS</td>
								<td nowrap="nowrap">R$0,00</td>
							</tr>
							<tr role="row" class="odd">
								<td tabindex="0" nowrap="nowrap">03.02</td>
								<td nowrap="nowrap">VENDAS PERIF�RICOS</td>
								<td nowrap="nowrap">R$0,00</td>
							</tr>
							<tr role="row" class="even">
								<td tabindex="0" nowrap="nowrap">04</td>
								<td nowrap="nowrap">RECEITAS</td>
								<td nowrap="nowrap">R$166,66</td>
							</tr>
							<tr role="row" class="odd">
								<td tabindex="0" nowrap="nowrap">04.01</td>
								<td nowrap="nowrap">RECEITA DE COMISS�ES</td>
								<td nowrap="nowrap">R$0,00</td>
							</tr>
							<tr role="row" class="even">
								<td tabindex="0" nowrap="nowrap">04.02</td>
								<td nowrap="nowrap">Categoria demonstra��o</td>
								<td nowrap="nowrap">R$166,66</td>
							</tr>
						</tbody>
					</table>
					<div class="">
						<div class="dataTables_info" id="fly01dtreceitas_info" role="status" aria-live="polite"/>
						<div class="dataTables_paginate paging_simple_numbers" id="fly01dtreceitas_paginate" style="display: none;">
							<a class="paginate_button previous disabled" aria-controls="fly01dtreceitas" data-dt-idx="0" tabindex="0" id="fly01dtreceitas_previous">Anterior</a>
							<span>
								<a class="paginate_button current" aria-controls="fly01dtreceitas" data-dt-idx="1" tabindex="0">1</a>
							</span><a class="paginate_button next disabled" aria-controls="fly01dtreceitas" data-dt-idx="2" tabindex="0" id="fly01dtreceitas_next">Pr�ximo</a>
						</div>
					</div>
				</div>
				<div id="fly01dtdespesas_wrapper" class="col s12 no-footer">
					<div class=""/>
					<div id="fly01dtdespesas_processing" class="dataTables_processing" style="display: none;"/>
					<table class="display striped responsive nowrap dataTable no-footer dtr-inline" width="100%" id="fly01dtdespesas" role="grid" aria-describedby="fly01dtdespesas_info" style="width: 100%;">
						<thead>
							<tr id="columns" role="row">
								<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 70px;">
									<span>(-) DESPESAS</span>
								</th>
								<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 195px;">
									<span/>
								</th>
								<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 74px;">
									<span/>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr role="row" class="odd">
								<td tabindex="0" nowrap="nowrap">02</td>
								<td nowrap="nowrap">DESPESAS</td>
								<td nowrap="nowrap">-R$1.200,00</td>
							</tr>
							<tr role="row" class="even">
								<td tabindex="0" nowrap="nowrap">02.01</td>
								<td nowrap="nowrap">PRODUTOS DE LIMPEZA</td>
								<td nowrap="nowrap">R$0,00</td>
							</tr>
							<tr role="row" class="odd">
								<td tabindex="0" nowrap="nowrap">02.02</td>
								<td nowrap="nowrap">MATERIAIS ADMINISTRATIVOS</td>
								<td nowrap="nowrap">-R$1.200,00</td>
							</tr>
						</tbody>
					</table>
					<div class="">
						<div class="dataTables_info" id="fly01dtdespesas_info" role="status" aria-live="polite"/>
						<div class="dataTables_paginate paging_simple_numbers" id="fly01dtdespesas_paginate" style="display: none;">
							<a class="paginate_button previous disabled" aria-controls="fly01dtdespesas" data-dt-idx="0" tabindex="0" id="fly01dtdespesas_previous">Anterior</a>
							<span>
								<a class="paginate_button current" aria-controls="fly01dtdespesas" data-dt-idx="1" tabindex="0">1</a>
							</span><a class="paginate_button next disabled" aria-controls="fly01dtdespesas" data-dt-idx="2" tabindex="0" id="fly01dtdespesas_next">Pr�ximo</a>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
	