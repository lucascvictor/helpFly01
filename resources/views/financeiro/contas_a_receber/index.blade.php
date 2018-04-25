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
						<a id="new" class="btn " href="{{ url('/financeiro/contasareceber/create') }}">Novo</a>
					</li>
					<li>
						<a id="new" class="btn " onclick="fnNovaRenegociacaoCR();">Renegociação</a>
					</li>
					<li>
						<a id="tour" class="btn " onclick="initTour();">Tour</a>
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
											@foreach($billsToReceive as $billToReceive)

<tr role="row" class="odd">
	<td class="sorting_1" tabindex="0" nowrap="nowrap"><span class="new badge orange left" data-badge-caption=" ">ABER</span></td>
	<td nowrap="nowrap">{{ $billToReceive->duedate }}</td>
	<td nowrap="nowrap">{{ $billToReceive->description }}</td>
	<td nowrap="nowrap">{{ $billToReceive->value }}</td>
	<td nowrap="nowrap">{{ $billToReceive->duedate }}</td>
	<td nowrap="nowrap">{{ $billToReceive->value }}</td>
	<td nowrap="nowrap">{{ $billToReceive->value }}</td>
	<td nowrap="nowrap">{{ $billToReceive->person }}</td>
	<td nowrap="nowrap">
		<input class="rowRecordId" value="1cc08ba4-d697-4730-b0b3-1e5d53621ed1" type="hidden"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropfly01dtdown0"><i class="material-icons">more_vert</i></a>
		<ul id="dropfly01dtdown0" class="dropdown-content">
		<li><a href="javascript:void(0)" onclick="fnEditar('1cc08ba4-d697-4730-b0b3-1e5d53621ed1')">Editar</a></li>
		<li><a href="javascript:void(0)" onclick="fnVisualizar('1cc08ba4-d697-4730-b0b3-1e5d53621ed1')">Visualizar</a></li>
		<li><a href="javascript:void(0)" onclick="fnExcluir('1cc08ba4-d697-4730-b0b3-1e5d53621ed1')">Excluir</a></li>
		<li><a href="javascript:void(0)" onclick="fnNovaBaixa('1cc08ba4-d697-4730-b0b3-1e5d53621ed1')">Nova baixa</a></li>
		</ul>
	</td>
</tr>
@endforeach
													
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