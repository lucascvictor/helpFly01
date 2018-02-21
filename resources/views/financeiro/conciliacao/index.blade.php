@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
<div id="headTop" class="z-depth-0-half">
	<div class="container">
		<div class="row">
			<div class="col s12 fly01-main-header">
				<h4 class="thin inline-block">Concilia��o Banc�ria</h4>
				<ul class="right valign-wrapper fly01-buttons">
					<li>
						<a id="new" class="btn " onclick="fnNovo();">Novo</a>
					</li>
					<li>
						<a id="tour" class="btn pulse" onclick="fnNovo();">Tour</a>
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
			<table class="display striped responsive nowrap dataTable no-footer dtr-inline" width="100%" id="fly01dt" role="grid" aria-describedby="fly01dt_info" style="width: 100%;">
				<thead>
					<tr id="columns" role="row">
						<th class="sorting_asc" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 49px;" aria-sort="ascending" aria-label="searchConta nome: Ordenar colunas de forma descendente">
							<div id="contaBancaria_nomeContaField" class="input-field fly01dt-filter ">
								<input id="contaBancaria_nomeConta" name="contaBancaria_nomeConta" type="search">
									<i class="material-icons">search</i>
									<label class="truncate" for="contaBancaria_nomeConta">Conta nome</label>
								</div>
							</th>
							<th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 46px;" aria-label="searchBanco: Ordenar colunas de forma ascendente">
								<div id="contaBancaria_banco_codigoField" class="input-field fly01dt-filter ">
									<input id="contaBancaria_banco_codigo" name="contaBancaria_banco_codigo" type="search" data-index="1">
										<i class="material-icons">search</i>
										<label class="truncate" for="contaBancaria_banco_codigo">Banco</label>
									</div>
								</th>
								<th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 47px;" aria-label="searchAg�ncia: Ordenar colunas de forma ascendente">
									<div id="contaBancaria_agenciaField" class="input-field fly01dt-filter ">
										<input id="contaBancaria_agencia" name="contaBancaria_agencia" type="search" data-index="2">
											<i class="material-icons">search</i>
											<label class="truncate" for="contaBancaria_agencia">Ag�ncia</label>
										</div>
									</th>
									<th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 49px;" aria-label="searchConta: Ordenar colunas de forma ascendente">
										<div id="contaBancaria_contaField" class="input-field fly01dt-filter ">
											<input id="contaBancaria_conta" name="contaBancaria_conta" type="search" data-index="3">
												<i class="material-icons">search</i>
												<label class="truncate" for="contaBancaria_conta">Conta</label>
											</div>
										</th>
										<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 24px;" aria-label="">
											<span/>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr role="row" class="odd">
										<td class="sorting_1" tabindex="0" nowrap="nowrap">CONTA 2</td>
										<td nowrap="nowrap">001</td>
										<td nowrap="nowrap">1234</td>
										<td nowrap="nowrap">123535</td>
										<td nowrap="nowrap">
											<input type="hidden" class="rowRecordId" value="efc1903d-2da3-48b5-92ec-8b3f6899d311">
												<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown0">
													<i class="material-icons">more_vert</i>
												</a>
												<ul id="dropdown0" class="dropdown-content">
													<li>
														<a href="javascript:void(0)" onclick="fnEditar('efc1903d-2da3-48b5-92ec-8b3f6899d311')">Editar</a>
													</li>
												</ul>
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
@endsection


@section('extrascript')

@include('financeiro.conciliacao.tour')

@endsection	