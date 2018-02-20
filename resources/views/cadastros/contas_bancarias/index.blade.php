@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
<div id="headTop" class="z-depth-0-half">
	<div class="container">
		<div class="row">
			<div class="col s12 fly01-main-header">
				<h4 class="thin inline-block">Contas Banc�rias</h4>
				<ul class="right valign-wrapper fly01-buttons">
					<li>
						<a id="new" class="btn " href="{{ url('/cadastros/contasbancarias/create') }}">Novo</a>
						<a id="new" class="btn pulse" href="">Tour</a>
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
						<th class="sorting_asc" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 128px;" aria-sort="ascending" aria-label="searchNome: Ordenar colunas de forma descendente">
							<div id="nomeContaField" class="input-field fly01dt-filter ">
								<input id="nomeConta" name="nomeConta" type="search">
									<i class="material-icons">search</i>
									<label class="truncate" for="nomeConta">Nome</label>
								</div>
							</th>
							<th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 131px;" aria-label="searchBanco: Ordenar colunas de forma ascendente">
								<div id="banco_nomeField" class="input-field fly01dt-filter ">
									<input id="banco_nome" name="banco_nome" type="search" data-index="1">
										<i class="material-icons">search</i>
										<label class="truncate" for="banco_nome">Banco</label>
									</div>
								</th>
								<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 24px;" aria-label="">
									<span/>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr role="row" class="odd">
								<td class="sorting_1" tabindex="0" nowrap="nowrap">CONTA 1</td>
								<td nowrap="nowrap">BANCO DO BRASIL S.A.</td>
								<td nowrap="nowrap">
									<input type="hidden" class="rowRecordId" value="d365c361-55d3-44f4-bdb5-d185486e27fe">
										<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown0">
											<i class="material-icons">more_vert</i>
										</a>
										<ul id="dropdown0" class="dropdown-content">
											<li>
												<a href="javascript:void(0)" onclick="fnEditar('d365c361-55d3-44f4-bdb5-d185486e27fe')">Editar</a>
											</li>
											<li>
												<a href="javascript:void(0)" onclick="fnExcluir('d365c361-55d3-44f4-bdb5-d185486e27fe')">Excluir</a>
											</li>
										</ul>
									</td>
								</tr>
								<tr role="row" class="even">
									<td class="sorting_1" tabindex="0" nowrap="nowrap">CONTA 2</td>
									<td nowrap="nowrap">BANCO DO BRASIL S.A.</td>
									<td nowrap="nowrap">
										<input type="hidden" class="rowRecordId" value="f5e2ee99-91e0-4c73-9a89-760c7074e5c2">
											<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown1">
												<i class="material-icons">more_vert</i>
											</a>
											<ul id="dropdown1" class="dropdown-content">
												<li>
													<a href="javascript:void(0)" onclick="fnEditar('f5e2ee99-91e0-4c73-9a89-760c7074e5c2')">Editar</a>
												</li>
												<li>
													<a href="javascript:void(0)" onclick="fnExcluir('f5e2ee99-91e0-4c73-9a89-760c7074e5c2')">Excluir</a>
												</li>
											</ul>
										</td>
									</tr>
									<tr role="row" class="odd">
										<td class="sorting_1" tabindex="0" nowrap="nowrap">Conta Demonstra��o</td>
										<td nowrap="nowrap">BANCO ITAUBANK S.A</td>
										<td nowrap="nowrap">
											<input type="hidden" class="rowRecordId" value="a67a7c28-173c-4922-98b6-a4f2b27e4398">
												<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown2">
													<i class="material-icons">more_vert</i>
												</a>
												<ul id="dropdown2" class="dropdown-content">
													<li>
														<a href="javascript:void(0)" onclick="fnEditar('a67a7c28-173c-4922-98b6-a4f2b27e4398')">Editar</a>
													</li>
													<li>
														<a href="javascript:void(0)" onclick="fnExcluir('a67a7c28-173c-4922-98b6-a4f2b27e4398')">Excluir</a>
													</li>
												</ul>
											</td>
										</tr>
										<tr role="row" class="even">
											<td class="sorting_1" tabindex="0" nowrap="nowrap">Conta Demontrativa</td>
											<td nowrap="nowrap">ITAU UNIBANCO S.A.</td>
											<td nowrap="nowrap">
												<input type="hidden" class="rowRecordId" value="a8682cd6-415c-46bc-adc1-b0a3b422159f">
													<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown3">
														<i class="material-icons">more_vert</i>
													</a>
													<ul id="dropdown3" class="dropdown-content">
														<li>
															<a href="javascript:void(0)" onclick="fnEditar('a8682cd6-415c-46bc-adc1-b0a3b422159f')">Editar</a>
														</li>
														<li>
															<a href="javascript:void(0)" onclick="fnExcluir('a8682cd6-415c-46bc-adc1-b0a3b422159f')">Excluir</a>
														</li>
													</ul>
												</td>
											</tr>
											<tr role="row" class="odd">
												<td class="sorting_1" tabindex="0" nowrap="nowrap">Conta Suporte</td>
												<td nowrap="nowrap">BANCO ITAU BBA S.A.</td>
												<td nowrap="nowrap">
													<input type="hidden" class="rowRecordId" value="2d4d453f-f9e6-44e9-9993-fe4e0003d02b">
														<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown4">
															<i class="material-icons">more_vert</i>
														</a>
														<ul id="dropdown4" class="dropdown-content">
															<li>
																<a href="javascript:void(0)" onclick="fnEditar('2d4d453f-f9e6-44e9-9993-fe4e0003d02b')">Editar</a>
															</li>
															<li>
																<a href="javascript:void(0)" onclick="fnExcluir('2d4d453f-f9e6-44e9-9993-fe4e0003d02b')">Excluir</a>
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
							