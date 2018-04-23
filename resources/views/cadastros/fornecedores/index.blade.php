@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
<div id="headTop" class="z-depth-0-half">
	<div class="container">
		<div class="row">
			<div class="col s12 fly01-main-header">
				<h4 class="thin inline-block">Fornecedores</h4>
				<ul class="right valign-wrapper fly01-buttons">
					<li><a id="new" class="btn " href="{{ url('/financeiro/cadastros/fornecedores/create') }}">Novo</a></li>
					<li><a id="import" class="btn " href="{{ url('/financeiro/cadastros/fornecedores/import') }}">Importar Fornecedores</a></li>
					<li>
						<div class="fixed-action-btn"> 
							<a id="tour" class="btn pulse orange btn-medium"  href="{{ url('/financeiro/cadastros/fornecedores/pagetour')}}"  style="border-radius: 80px;"><i class="material-icons small left"/>help</i>Iniciar Tour</a>
						</div>
			      </li>
				</ul>

			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div id="fly01dt_wrapper" class="col s12 no-footer">
				<div class=""/>
				<div id="fly01dt_processing" class="dataTables_processing" style="display: none;">
				</div>
				<table class="display striped responsive nowrap dataTable no-footer dtr-inline" width="100%" id="fly01dt" role="grid" aria-describedby="fly01dt_info" style="width: 100%;">
					<thead>
						<tr id="columns" role="row">
							<th class="sorting_asc" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 85px;" aria-sort="ascending" aria-label="searchCódigo: Ordenar colunas de forma descendente">
								<div id="idField" class="input-field fly01dt-filter ">
									<input id="id" name="id" type="search">
										<i class="material-icons">search</i>
										<label class="truncate" for="id">Código</label>
									</div>
								</th>
								<th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 95px;" aria-label="CPF/CNPJ: Ordenar colunas de forma ascendente">
									<div id="documentField" class="input-field fly01dt-filter ">
										<input id="document" name="document" type="text" class="masked cpfcnpj" data-index="1">
											<label class="truncate" for="document">CPF/CNPJ</label>
										</div>
									</th>
									<th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 227px;" aria-label="searchFornecedor: Ordenar colunas de forma ascendente">
										<div id="nameField" class="input-field fly01dt-filter ">
											<input id="name" name="name" type="search" data-index="2">
												<i class="material-icons">search</i>
												<label class="truncate" for="name">Fornecedor</label>
											</div>
										</th>
										<th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 141px;" aria-label="searchEndereço: Ordenar colunas de forma ascendente">
											<div id="addressField" class="input-field fly01dt-filter ">
												<input id="address" name="address" type="search" data-index="3">
													<i class="material-icons">search</i>
													<label class="truncate" for="address">Endereço</label>
												</div>
											</th>
											<th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 55px;" aria-label="searchCidade: Ordenar colunas de forma ascendente">
												<div id="cityField" class="input-field fly01dt-filter ">
													<input id="city" name="city" type="search" data-index="4">
														<i class="material-icons">search</i>
														<label class="truncate" for="city">Cidade</label>
													</div>
												</th>
												<th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 16px;" aria-label="searchEstado: Ordenar colunas de forma ascendente">
													<div id="stateField" class="input-field fly01dt-filter ">
														<input id="state" name="state" type="search" data-index="5">
															<i class="material-icons">search</i>
															<label class="truncate" for="state">Estado</label>
														</div>
													</th>
													<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 24px;" aria-label="">
														<span/>
													</th>
												</tr>
											</thead>
											<tbody>
											@foreach($suppliers as $supplier)
												<tr role="row" class="odd">
													<td class="sorting_1" tabindex="0" nowrap="nowrap">{{ $supplier->id }}</td>
													<td nowrap="nowrap">{{ $supplier->document }}</td>
													<td nowrap="nowrap">{{ $supplier->name }}</td>
													<td nowrap="nowrap">{{ $supplier->adress}}</td>
													<td nowrap="nowrap">{{ $supplier->city }} </td>
													<td nowrap="nowrap">{{ $supplier->state }}</td>
													<td nowrap="nowrap">
														<input type="hidden" class="rowRecordId" value="C00000">
															<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown0">
																<i class="material-icons">more_vert</i>
															</a>
															<ul id="dropdown0" class="dropdown-content">
																<li>
																	<a href="javascript:void(0)" onclick="fnEditar('C00000')">Editar</a>
																</li>
																<li>
																	<a href="javascript:void(0)" onclick="fnExcluir('C00000')">Excluir</a>
																</li>
															</ul>
														</td>
													</tr>
											@endforeach
											 </tbody>
														</table>
														<div class="">
															<div class="dataTables_info" id="fly01dt_info" role="status" aria-live="polite"/>
															<div class="dataTables_paginate paging_simple_numbers" id="fly01dt_paginate" style="display: none;">
																<a class="paginate_button previous disabled" aria-controls="fly01dt" data-dt-idx="0" tabindex="0" id="fly01dt_previous">Anterior</a>
																<span>
																	<a class="paginate_button current" aria-controls="fly01dt" data-dt-idx="1" tabindex="0">1</a>
																</span><a class="paginate_button next disabled" aria-controls="fly01dt" data-dt-idx="2" tabindex="0" id="fly01dt_next">Próximo</a>
															</div>
														</div>
													</div>
												</div>
											</div>

@endsection
											