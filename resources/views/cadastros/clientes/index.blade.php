@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')

<div id="headTop" class="z-depth-0-half">
	<div class="container">
		<div class="row">
			<div class="col s12 fly01-main-header">
				<h4 class="thin inline-block">Clientes</h4>
				<ul class="right valign-wrapper fly01-buttons">
					<li>
						<a id="new" class="btn " href="{{ url('/cadastros/clientes/new') }}">Novo</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div id="fly01dt_wrapper" class="col s12 no-footer" data-vivaldi-spatnav-clickable="1">
			<div class=""/>
			<div id="fly01dt_processing" class="dataTables_processing" style="display: none;"/>
			<table class="display striped responsive nowrap dataTable no-footer dtr-inline" width="100%" id="fly01dt" role="grid" aria-describedby="fly01dt_info" style="width: 100%;">
				<thead>
					<tr id="columns" role="row">
						<th class="sorting_asc" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 337px;" aria-sort="ascending" aria-label="searchCódigo: Ordenar colunas de forma descendente">
							<div id="idField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1">
								<input id="id" name="id" type="search"/>
								<i class="material-icons">search</i>
								<label class="truncate" for="id">Código</label>
							</div>
						</th>
						<th class="sorting" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 448px;" aria-label="searchCliente: Ordenar colunas de forma ascendente">
							<div id="nameField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1">
								<input id="name" name="name" type="search" data-index="1"/>
								<i class="material-icons">search</i>
								<label class="truncate" for="name">Cliente</label>
							</div>
						</th>
						<th class="sorting" tabindex="0" aria-controls="fly01dt" data-vivaldi-spatnav-clickable="1" rowspan="1" colspan="1" style="width: 337px;" aria-label="CPF / CNPJ: Ordenar colunas de forma ascendente">
							<div id="documentField" class="input-field fly01dt-filter " data-vivaldi-spatnav-clickable="1">
								<input id="document" name="document" type="text" class="masked cpfcnpj" data-index="2"/>
								<label class="truncate" for="document">CPF / CNPJ</label>
							</div>
						</th>
						<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 48px;" aria-label="">
							<span/>
						</th>
					</tr>
				</thead>
				<tbody data-vivaldi-spatnav-clickable="1">
					<tr role="row" class="odd">
						<td class="sorting_1" tabindex="0" nowrap="nowrap">C00000</td>
						<td nowrap="nowrap">LUCAS PROGRAMACOES ILIMITADAS</td>
						<td nowrap="nowrap">450.776.289-80</td>
						<td nowrap="nowrap">
							<input type="hidden" class="rowRecordId" value="C00000">
								<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown0" data-vivaldi-spatnav-clickable="1">
									<i class="material-icons">more_vert</i>
								</a>
								<ul id="dropdown0" class="dropdown-content">
									<li>
										<a href="javascript:void(0)" onclick="fnEditar(&#39;C00000&#39;)">Editar</a>
									</li>
									<li>
										<a href="javascript:void(0)" onclick="fnExcluir(&#39;C00000&#39;)">Excluir</a>
									</li>
								</ul>
							</td>
						</tr>
						<tr role="row" class="even">
							<td class="sorting_1" tabindex="0" nowrap="nowrap">C00001</td>
							<td nowrap="nowrap">JOAO SOUZA</td>
							<td nowrap="nowrap">581.767.472-62</td>
							<td nowrap="nowrap">
								<input type="hidden" class="rowRecordId" value="C00001">
									<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown1" data-vivaldi-spatnav-clickable="1">
										<i class="material-icons">more_vert</i>
									</a>
									<ul id="dropdown1" class="dropdown-content">
										<li>
											<a href="javascript:void(0)" onclick="fnEditar(&#39;C00001&#39;)">Editar</a>
										</li>
										<li>
											<a href="javascript:void(0)" onclick="fnExcluir(&#39;C00001&#39;)">Excluir</a>
										</li>
									</ul>
								</td>
							</tr>
							<tr role="row" class="odd">
								<td class="sorting_1" tabindex="0" nowrap="nowrap">C00002</td>
								<td nowrap="nowrap">ATOM RECURSOS TECNOLOGICOS LTDA</td>
								<td nowrap="nowrap">408.190.486-31</td>
								<td nowrap="nowrap">
									<input type="hidden" class="rowRecordId" value="C00002">
										<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown2" data-vivaldi-spatnav-clickable="1">
											<i class="material-icons">more_vert</i>
										</a>
										<ul id="dropdown2" class="dropdown-content">
											<li>
												<a href="javascript:void(0)" onclick="fnEditar(&#39;C00002&#39;)">Editar</a>
											</li>
											<li>
												<a href="javascript:void(0)" onclick="fnExcluir(&#39;C00002&#39;)">Excluir</a>
											</li>
										</ul>
									</td>
								</tr>
								<tr role="row" class="even">
									<td class="sorting_1" tabindex="0" nowrap="nowrap">CFINAL</td>
									<td nowrap="nowrap">CONSUMIDOR FINAL</td>
									<td nowrap="nowrap">000.000.001-91</td>
									<td nowrap="nowrap">
										<input type="hidden" class="rowRecordId" value="CFINAL">
											<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown3" data-vivaldi-spatnav-clickable="1">
												<i class="material-icons">more_vert</i>
											</a>
											<ul id="dropdown3" class="dropdown-content">
												<li>
													<a href="javascript:void(0)" onclick="fnEditar(&#39;CFINAL&#39;)">Editar</a>
												</li>
												<li>
													<a href="javascript:void(0)" onclick="fnExcluir(&#39;CFINAL&#39;)">Excluir</a>
												</li>
											</ul>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="">
								<div class="dataTables_info" id="fly01dt_info" role="status" aria-live="polite"/>
								<div class="dataTables_paginate paging_simple_numbers" id="fly01dt_paginate" style="display: none;">
									<a class="paginate_button previous disabled" aria-controls="fly01dt" data-dt-idx="0" tabindex="0" id="fly01dt_previous" data-vivaldi-spatnav-clickable="1">Anterior</a>
									<span>
										<a class="paginate_button current" aria-controls="fly01dt" data-dt-idx="1" tabindex="0" data-vivaldi-spatnav-clickable="1">1</a>
									</span><a class="paginate_button next disabled" aria-controls="fly01dt" data-dt-idx="2" tabindex="0" id="fly01dt_next" data-vivaldi-spatnav-clickable="1">Próximo</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>

@endsection
			