@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
<div id="headTop" class="z-depth-0-half">
	<div class="container">
		<div class="row">
			<div class="col s12 fly01-main-header">
				<h4 class="thin inline-block">Contas a Receber</h4>
				<ul class="right valign-wrapper fly01-buttons">
					<li>
						<a id="new" class="btn " onclick="fnNovo();">Novo</a>
					</li>
					<li>
						<a id="new" class="btn " onclick="fnNovaRenegociacaoCR();">Renegocia��o</a>
					</li>
					<li>
						<a id="tour" class="btn " onclick="fnNovaRenegociacaoCR();">Tour</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div id="fly01dt_wrapper" class="col s12 no-footer">
			<div class=""/>
			<div id="fly01dt_processing" class="dataTables_processing" style="display: none;"/>
			<table class="display striped responsive nowrap dataTable no-footer dtr-inline collapsed" width="100%" id="fly01dt" role="grid" aria-describedby="fly01dt_info" style="width: 100%;">
				<thead>
					<tr id="columns" role="row">
						<th class="sorting_asc" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-sort="ascending" aria-label="Em abertoPagoRenegociadoBaixado ParcialmenteStatus: Ordenar colunas de forma descendente">
							<div id="statusContaBancariaField" class="input-field fly01dt-select ">
								<div class="select-wrapper initialized">
									<span class="caret">?</span>
									<input type="text" class="select-dropdown" readonly="true" data-activates="select-options-ld1qkxz" value="">
										<ul id="select-options-ld1qkxz" class="dropdown-content select-dropdown ">
											<li class="">
												<span/>
											</li>
											<li class="">
												<span>Em aberto</span>
											</li>
											<li class="">
												<span>Pago</span>
											</li>
											<li class="">
												<span>Renegociado</span>
											</li>
											<li class="">
												<span>Baixado Parcialmente</span>
											</li>
										</ul>
										<select id="statusContaBancaria" name="statusContaBancaria" data-select-id="ld1qkxz" class="initialized">
											<option value=""/>
											<option value="EmAberto">Em aberto</option>
											<option value="Pago">Pago</option>
											<option value="Renegociado">Renegociado</option>
											<option value="BaixadoParcialmente">Baixado Parcialmente</option>
										</select>
									</div>
									<label class="truncate" for="statusContaBancaria">Status</label>
								</div>
							</th>
							<th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Vencimento: Ordenar colunas de forma ascendente">
								<div id="dataVencimentoField" class="input-field fly01dt-filter ">
									<input id="dataVencimento" name="dataVencimento" type="text" class="masked date" data-index="1">
										<label class="truncate" for="dataVencimento">Vencimento</label>
									</div>
								</th>
								<th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 106px;" aria-label="searchDescri��o: Ordenar colunas de forma ascendente">
									<div id="descricaoField" class="input-field fly01dt-filter ">
										<input id="descricao" name="descricao" type="search" data-index="2">
											<i class="material-icons">search</i>
											<label class="truncate" for="descricao">Descri��o</label>
										</div>
									</th>
									<th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 33px; display: none;" aria-label="Valor: Ordenar colunas de forma ascendente">
										<div id="valorPrevistoField" class="input-field fly01dt-filter ">
											<input id="valorPrevisto" name="valorPrevisto" type="text" class="masked currency" data-index="3" style="text-align: right;">
												<label class="truncate" for="valorPrevisto">Valor</label>
											</div>
										</th>
										<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 59px; display: none;" aria-label="Saldo">
											<span>Saldo</span>
										</th>
										<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="searchForma">
											<div id="formaPagamento_descricaoField" class="input-field fly01dt-filter ">
												<input id="formaPagamento_descricao" name="formaPagamento_descricao" type="search" data-index="5">
													<i class="material-icons">search</i>
													<label class="truncate" for="formaPagamento_descricao">Forma</label>
												</div>
											</th>
											<th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="searchParcela: Ordenar colunas de forma ascendente">
												<div id="descricaoParcelaField" class="input-field fly01dt-filter ">
													<input id="descricaoParcela" name="descricaoParcela" type="search" data-index="6">
														<i class="material-icons">search</i>
														<label class="truncate" for="descricaoParcela">Parcela</label>
													</div>
												</th>
												<th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 132px;" aria-label="searchPagador: Ordenar colunas de forma ascendente">
													<div id="pessoa_nomeField" class="input-field fly01dt-filter ">
														<input id="pessoa_nome" name="pessoa_nome" type="search" data-index="7">
															<i class="material-icons">search</i>
															<label class="truncate" for="pessoa_nome">Pagador</label>
														</div>
													</th>
													<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 24px;" aria-label="">
														<span/>
													</th>
												</tr>
											</thead>
											<tbody>
												<tr role="row" class="odd">
													<td style="display: none;" class="sorting_1" tabindex="0" nowrap="nowrap">
														<span class="new badge orange left" data-badge-caption=" ">ABER</span>
													</td>
													<td style="display: none;" nowrap="nowrap">24/12/2017</td>
													<td nowrap="nowrap">Aluguel M�quina X</td>
													<td nowrap="nowrap" style="display: none;">R$200,00</td>
													<td nowrap="nowrap" style="display: none;">R$200,00</td>
													<td style="display: none;" nowrap="nowrap">CART�O</td>
													<td style="display: none;" nowrap="nowrap">01/01</td>
													<td nowrap="nowrap">Arnaldo Lima</td>
													<td nowrap="nowrap">
														<input type="hidden" class="rowRecordId" value="2f95bf55-8685-40a3-a9c8-0cac42a4d867">
															<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown0">
																<i class="material-icons">more_vert</i>
															</a>
															<ul id="dropdown0" class="dropdown-content">
																<li>
																	<a href="javascript:void(0)" onclick="fnEditar('2f95bf55-8685-40a3-a9c8-0cac42a4d867')">Editar</a>
																</li>
																<li>
																	<a href="javascript:void(0)" onclick="fnVisualizar('2f95bf55-8685-40a3-a9c8-0cac42a4d867')">Visualizar</a>
																</li>
																<li>
																	<a href="javascript:void(0)" onclick="fnExcluir('2f95bf55-8685-40a3-a9c8-0cac42a4d867')">Excluir</a>
																</li>
																<li>
																	<a href="javascript:void(0)" onclick="fnNovaBaixa('2f95bf55-8685-40a3-a9c8-0cac42a4d867')">Nova baixa</a>
																</li>
															</ul>
														</td>
													</tr>
													<tr role="row" class="even">
														<td style="display: none;" class="sorting_1" tabindex="0" nowrap="nowrap">
															<span class="new badge orange left" data-badge-caption=" ">ABER</span>
														</td>
														<td style="display: none;" nowrap="nowrap">24/03/2018</td>
														<td nowrap="nowrap">PESSOA Y</td>
														<td nowrap="nowrap" style="display: none;">R$200,00</td>
														<td nowrap="nowrap" style="display: none;">R$200,00</td>
														<td style="display: none;" nowrap="nowrap">CART�O</td>
														<td style="display: none;" nowrap="nowrap">01/01</td>
														<td nowrap="nowrap">FORNECEDOR E CLIENTE</td>
														<td nowrap="nowrap">
															<input type="hidden" class="rowRecordId" value="46300c73-3fa3-457a-95bc-3e0dac41a404">
																<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown1">
																	<i class="material-icons">more_vert</i>
																</a>
																<ul id="dropdown1" class="dropdown-content">
																	<li>
																		<a href="javascript:void(0)" onclick="fnEditar('46300c73-3fa3-457a-95bc-3e0dac41a404')">Editar</a>
																	</li>
																	<li>
																		<a href="javascript:void(0)" onclick="fnVisualizar('46300c73-3fa3-457a-95bc-3e0dac41a404')">Visualizar</a>
																	</li>
																	<li>
																		<a href="javascript:void(0)" onclick="fnExcluir('46300c73-3fa3-457a-95bc-3e0dac41a404')">Excluir</a>
																	</li>
																	<li>
																		<a href="javascript:void(0)" onclick="fnNovaBaixa('46300c73-3fa3-457a-95bc-3e0dac41a404')">Nova baixa</a>
																	</li>
																</ul>
															</td>
														</tr>
														<tr role="row" class="odd">
															<td style="display: none;" class="sorting_1" tabindex="0" nowrap="nowrap">
																<span class="new badge orange left" data-badge-caption=" ">ABER</span>
															</td>
															<td style="display: none;" nowrap="nowrap">24/01/2018</td>
															<td nowrap="nowrap">Tiru</td>
															<td nowrap="nowrap" style="display: none;">R$200,00</td>
															<td nowrap="nowrap" style="display: none;">R$200,00</td>
															<td style="display: none;" nowrap="nowrap">CART�O</td>
															<td style="display: none;" nowrap="nowrap">01/01</td>
															<td nowrap="nowrap">FORNECEDOR E CLIENTE</td>
															<td nowrap="nowrap">
																<input type="hidden" class="rowRecordId" value="3c38ccef-6be2-4d36-8514-4d607aa404bd">
																	<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown2">
																		<i class="material-icons">more_vert</i>
																	</a>
																	<ul id="dropdown2" class="dropdown-content">
																		<li>
																			<a href="javascript:void(0)" onclick="fnEditar('3c38ccef-6be2-4d36-8514-4d607aa404bd')">Editar</a>
																		</li>
																		<li>
																			<a href="javascript:void(0)" onclick="fnVisualizar('3c38ccef-6be2-4d36-8514-4d607aa404bd')">Visualizar</a>
																		</li>
																		<li>
																			<a href="javascript:void(0)" onclick="fnExcluir('3c38ccef-6be2-4d36-8514-4d607aa404bd')">Excluir</a>
																		</li>
																		<li>
																			<a href="javascript:void(0)" onclick="fnNovaBaixa('3c38ccef-6be2-4d36-8514-4d607aa404bd')">Nova baixa</a>
																		</li>
																	</ul>
																</td>
															</tr>
															<tr role="row" class="even">
																<td style="display: none;" class="sorting_1" tabindex="0" nowrap="nowrap">
																	<span class="new badge orange left" data-badge-caption=" ">ABER</span>
																</td>
																<td style="display: none;" nowrap="nowrap">24/04/2018</td>
																<td nowrap="nowrap">PESSOA Y</td>
																<td nowrap="nowrap" style="display: none;">R$200,00</td>
																<td nowrap="nowrap" style="display: none;">R$200,00</td>
																<td style="display: none;" nowrap="nowrap">CART�O</td>
																<td style="display: none;" nowrap="nowrap">01/01</td>
																<td nowrap="nowrap">FORNECEDOR E CLIENTE</td>
																<td nowrap="nowrap">
																	<input type="hidden" class="rowRecordId" value="40347c3f-04da-4fba-b373-6121208a7b5f">
																		<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown3">
																			<i class="material-icons">more_vert</i>
																		</a>
																		<ul id="dropdown3" class="dropdown-content">
																			<li>
																				<a href="javascript:void(0)" onclick="fnEditar('40347c3f-04da-4fba-b373-6121208a7b5f')">Editar</a>
																			</li>
																			<li>
																				<a href="javascript:void(0)" onclick="fnVisualizar('40347c3f-04da-4fba-b373-6121208a7b5f')">Visualizar</a>
																			</li>
																			<li>
																				<a href="javascript:void(0)" onclick="fnExcluir('40347c3f-04da-4fba-b373-6121208a7b5f')">Excluir</a>
																			</li>
																			<li>
																				<a href="javascript:void(0)" onclick="fnNovaBaixa('40347c3f-04da-4fba-b373-6121208a7b5f')">Nova baixa</a>
																			</li>
																		</ul>
																	</td>
																</tr>
																<tr role="row" class="odd">
																	<td style="display: none;" class="sorting_1" tabindex="0" nowrap="nowrap">
																		<span class="new badge orange left" data-badge-caption=" ">ABER</span>
																	</td>
																	<td style="display: none;" nowrap="nowrap">24/11/2017</td>
																	<td nowrap="nowrap">PESSOA Y</td>
																	<td nowrap="nowrap" style="display: none;">R$200,00</td>
																	<td nowrap="nowrap" style="display: none;">R$200,00</td>
																	<td style="display: none;" nowrap="nowrap">CART�O</td>
																	<td style="display: none;" nowrap="nowrap">01/01</td>
																	<td nowrap="nowrap">FORNECEDOR E CLIENTE</td>
																	<td nowrap="nowrap">
																		<input type="hidden" class="rowRecordId" value="8d02510f-c995-47b2-953f-670f42649b04">
																			<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown4">
																				<i class="material-icons">more_vert</i>
																			</a>
																			<ul id="dropdown4" class="dropdown-content">
																				<li>
																					<a href="javascript:void(0)" onclick="fnEditar('8d02510f-c995-47b2-953f-670f42649b04')">Editar</a>
																				</li>
																				<li>
																					<a href="javascript:void(0)" onclick="fnVisualizar('8d02510f-c995-47b2-953f-670f42649b04')">Visualizar</a>
																				</li>
																				<li>
																					<a href="javascript:void(0)" onclick="fnExcluir('8d02510f-c995-47b2-953f-670f42649b04')">Excluir</a>
																				</li>
																				<li>
																					<a href="javascript:void(0)" onclick="fnNovaBaixa('8d02510f-c995-47b2-953f-670f42649b04')">Nova baixa</a>
																				</li>
																			</ul>
																		</td>
																	</tr>
																	<tr role="row" class="even">
																		<td style="display: none;" class="sorting_1" tabindex="0" nowrap="nowrap">
																			<span class="new badge orange left" data-badge-caption=" ">ABER</span>
																		</td>
																		<td style="display: none;" nowrap="nowrap">11/01/2018</td>
																		<td nowrap="nowrap">Conta Demonstra��o</td>
																		<td nowrap="nowrap" style="display: none;">R$166,66</td>
																		<td nowrap="nowrap" style="display: none;">R$166,66</td>
																		<td style="display: none;" nowrap="nowrap">Dinheiro</td>
																		<td style="display: none;" nowrap="nowrap">02/03</td>
																		<td nowrap="nowrap">Allan Rogge</td>
																		<td nowrap="nowrap">
																			<input type="hidden" class="rowRecordId" value="80a8d27a-4f1e-429d-809b-6ce1bd071ed1">
																				<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown5">
																					<i class="material-icons">more_vert</i>
																				</a>
																				<ul id="dropdown5" class="dropdown-content">
																					<li>
																						<a href="javascript:void(0)" onclick="fnEditar('80a8d27a-4f1e-429d-809b-6ce1bd071ed1')">Editar</a>
																					</li>
																					<li>
																						<a href="javascript:void(0)" onclick="fnVisualizar('80a8d27a-4f1e-429d-809b-6ce1bd071ed1')">Visualizar</a>
																					</li>
																					<li>
																						<a href="javascript:void(0)" onclick="fnExcluir('80a8d27a-4f1e-429d-809b-6ce1bd071ed1')">Excluir</a>
																					</li>
																					<li>
																						<a href="javascript:void(0)" onclick="fnNovaBaixa('80a8d27a-4f1e-429d-809b-6ce1bd071ed1')">Nova baixa</a>
																					</li>
																				</ul>
																			</td>
																		</tr>
																		<tr role="row" class="odd">
																			<td style="display: none;" class="sorting_1" tabindex="0" nowrap="nowrap">
																				<span class="new badge orange left" data-badge-caption=" ">ABER</span>
																			</td>
																			<td style="display: none;" nowrap="nowrap">24/01/2018</td>
																			<td nowrap="nowrap">Aluguel M�quina X</td>
																			<td nowrap="nowrap" style="display: none;">R$200,00</td>
																			<td nowrap="nowrap" style="display: none;">R$200,00</td>
																			<td style="display: none;" nowrap="nowrap">CART�O</td>
																			<td style="display: none;" nowrap="nowrap">01/01</td>
																			<td nowrap="nowrap">Arnaldo Lima</td>
																			<td nowrap="nowrap">
																				<input type="hidden" class="rowRecordId" value="b1f7f600-ef4d-48da-946c-6ce2342d0e58">
																					<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown6">
																						<i class="material-icons">more_vert</i>
																					</a>
																					<ul id="dropdown6" class="dropdown-content">
																						<li>
																							<a href="javascript:void(0)" onclick="fnEditar('b1f7f600-ef4d-48da-946c-6ce2342d0e58')">Editar</a>
																						</li>
																						<li>
																							<a href="javascript:void(0)" onclick="fnVisualizar('b1f7f600-ef4d-48da-946c-6ce2342d0e58')">Visualizar</a>
																						</li>
																						<li>
																							<a href="javascript:void(0)" onclick="fnExcluir('b1f7f600-ef4d-48da-946c-6ce2342d0e58')">Excluir</a>
																						</li>
																						<li>
																							<a href="javascript:void(0)" onclick="fnNovaBaixa('b1f7f600-ef4d-48da-946c-6ce2342d0e58')">Nova baixa</a>
																						</li>
																					</ul>
																				</td>
																			</tr>
																			<tr role="row" class="even">
																				<td style="display: none;" class="sorting_1" tabindex="0" nowrap="nowrap">
																					<span class="new badge orange left" data-badge-caption=" ">ABER</span>
																				</td>
																				<td style="display: none;" nowrap="nowrap">24/09/2018</td>
																				<td nowrap="nowrap">PESSOA Y</td>
																				<td nowrap="nowrap" style="display: none;">R$200,00</td>
																				<td nowrap="nowrap" style="display: none;">R$200,00</td>
																				<td style="display: none;" nowrap="nowrap">CART�O</td>
																				<td style="display: none;" nowrap="nowrap">01/01</td>
																				<td nowrap="nowrap">FORNECEDOR E CLIENTE</td>
																				<td nowrap="nowrap">
																					<input type="hidden" class="rowRecordId" value="6816708a-4918-40bf-86af-6e0d51cc0c4c">
																						<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown7">
																							<i class="material-icons">more_vert</i>
																						</a>
																						<ul id="dropdown7" class="dropdown-content">
																							<li>
																								<a href="javascript:void(0)" onclick="fnEditar('6816708a-4918-40bf-86af-6e0d51cc0c4c')">Editar</a>
																							</li>
																							<li>
																								<a href="javascript:void(0)" onclick="fnVisualizar('6816708a-4918-40bf-86af-6e0d51cc0c4c')">Visualizar</a>
																							</li>
																							<li>
																								<a href="javascript:void(0)" onclick="fnExcluir('6816708a-4918-40bf-86af-6e0d51cc0c4c')">Excluir</a>
																							</li>
																							<li>
																								<a href="javascript:void(0)" onclick="fnNovaBaixa('6816708a-4918-40bf-86af-6e0d51cc0c4c')">Nova baixa</a>
																							</li>
																						</ul>
																					</td>
																				</tr>
																				<tr role="row" class="odd">
																					<td style="display: none;" class="sorting_1" tabindex="0" nowrap="nowrap">
																						<span class="new badge orange left" data-badge-caption=" ">ABER</span>
																					</td>
																					<td style="display: none;" nowrap="nowrap">24/08/2018</td>
																					<td nowrap="nowrap">PESSOA Y</td>
																					<td nowrap="nowrap" style="display: none;">R$200,00</td>
																					<td nowrap="nowrap" style="display: none;">R$200,00</td>
																					<td style="display: none;" nowrap="nowrap">CART�O</td>
																					<td style="display: none;" nowrap="nowrap">01/01</td>
																					<td nowrap="nowrap">FORNECEDOR E CLIENTE</td>
																					<td nowrap="nowrap">
																						<input type="hidden" class="rowRecordId" value="8527325f-bbee-4dc0-ba0c-8038cd984554">
																							<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown8">
																								<i class="material-icons">more_vert</i>
																							</a>
																							<ul id="dropdown8" class="dropdown-content">
																								<li>
																									<a href="javascript:void(0)" onclick="fnEditar('8527325f-bbee-4dc0-ba0c-8038cd984554')">Editar</a>
																								</li>
																								<li>
																									<a href="javascript:void(0)" onclick="fnVisualizar('8527325f-bbee-4dc0-ba0c-8038cd984554')">Visualizar</a>
																								</li>
																								<li>
																									<a href="javascript:void(0)" onclick="fnExcluir('8527325f-bbee-4dc0-ba0c-8038cd984554')">Excluir</a>
																								</li>
																								<li>
																									<a href="javascript:void(0)" onclick="fnNovaBaixa('8527325f-bbee-4dc0-ba0c-8038cd984554')">Nova baixa</a>
																								</li>
																							</ul>
																						</td>
																					</tr>
																					<tr role="row" class="even">
																						<td style="display: none;" class="sorting_1" tabindex="0" nowrap="nowrap">
																							<span class="new badge orange left" data-badge-caption=" ">ABER</span>
																						</td>
																						<td style="display: none;" nowrap="nowrap">24/03/2018</td>
																						<td nowrap="nowrap">Aluguel M�quina X</td>
																						<td nowrap="nowrap" style="display: none;">R$200,00</td>
																						<td nowrap="nowrap" style="display: none;">R$200,00</td>
																						<td style="display: none;" nowrap="nowrap">CART�O</td>
																						<td style="display: none;" nowrap="nowrap">01/01</td>
																						<td nowrap="nowrap">Arnaldo Lima</td>
																						<td nowrap="nowrap">
																							<input type="hidden" class="rowRecordId" value="78f0215f-7780-407a-b349-8064064c4128">
																								<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown9">
																									<i class="material-icons">more_vert</i>
																								</a>
																								<ul id="dropdown9" class="dropdown-content">
																									<li>
																										<a href="javascript:void(0)" onclick="fnEditar('78f0215f-7780-407a-b349-8064064c4128')">Editar</a>
																									</li>
																									<li>
																										<a href="javascript:void(0)" onclick="fnVisualizar('78f0215f-7780-407a-b349-8064064c4128')">Visualizar</a>
																									</li>
																									<li>
																										<a href="javascript:void(0)" onclick="fnExcluir('78f0215f-7780-407a-b349-8064064c4128')">Excluir</a>
																									</li>
																									<li>
																										<a href="javascript:void(0)" onclick="fnNovaBaixa('78f0215f-7780-407a-b349-8064064c4128')">Nova baixa</a>
																									</li>
																								</ul>
																							</td>
																						</tr>
																					</tbody>
																				</table>
																				<div class="">
																					<div class="dataTables_info" id="fly01dt_info" role="status" aria-live="polite"/>
																					<div class="dataTables_paginate paging_simple_numbers" id="fly01dt_paginate">
																						<a class="paginate_button previous disabled" aria-controls="fly01dt" data-dt-idx="0" tabindex="0" id="fly01dt_previous">Anterior</a>
																						<span>
																							<a class="paginate_button current" aria-controls="fly01dt" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="fly01dt" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="fly01dt" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="fly01dt" data-dt-idx="4" tabindex="0">4</a>
																						</span><a class="paginate_button next" aria-controls="fly01dt" data-dt-idx="5" tabindex="0" id="fly01dt_next">Pr�ximo</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
@endsection


@section('extrascript')

@include('financeiro.contas_a_receber.tour')

@endsection												