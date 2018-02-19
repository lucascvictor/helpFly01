@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')

	<div id="headTop" class="z-depth-0-half">
		<div class="container">
			<div class="row">
				<div class="col s12 fly01-main-header">
					<h4 class="thin inline-block">Categorias Financeiras</h4>
					<ul class="right valign-wrapper fly01-buttons">
						<li>
							<a id="new" class="btn "  href="{{ url('/cadastros/categoriasfinanceiras/create') }}">Novo</a>
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
							<th class="sorting_asc" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 10px; display: none;" aria-sort="ascending" aria-label="searchC�digo: Ordenar colunas de forma descendente">
								<div id="codigoField" class="input-field fly01dt-filter ">
									<input id="codigo" name="codigo" type="search">
										<i class="material-icons">search</i>
										<label class="truncate" for="codigo">C�digo</label>
									</div>
								</th>
								<th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 169px;" aria-label="searchDescri��o: Ordenar colunas de forma ascendente">
									<div id="descricaoField" class="input-field fly01dt-filter ">
										<input id="descricao" name="descricao" type="search" data-index="1">
											<i class="material-icons">search</i>
											<label class="truncate" for="descricao">Descri��o</label>
										</div>
									</th>
									<th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 29px;" aria-label="Sint�ticoAnal�ticoClasse: Ordenar colunas de forma ascendente">
										<div id="classeField" class="input-field fly01dt-select ">
											<div class="select-wrapper initialized">
												<span class="caret">?</span>
												<input type="text" class="select-dropdown" readonly="true" data-activates="select-options-9bk6uv7" value="">
													<ul id="select-options-9bk6uv7" class="dropdown-content select-dropdown ">
														<li class="">
															<span/>
														</li>
														<li class="">
															<span>Sint�tico</span>
														</li>
														<li class="">
															<span>Anal�tico</span>
														</li>
													</ul>
													<select id="classe" name="classe" data-index="2" data-select-id="9bk6uv7" class="initialized">
														<option value=""/>
														<option value="Sintetico">Sint�tico</option>
														<option value="Analitico">Anal�tico</option>
													</select>
												</div>
												<label class="truncate" for="classe">Classe</label>
											</div>
										</th>
										<th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 58px; display: none;" aria-label="searchCategoria Superior: Ordenar colunas de forma ascendente">
											<div id="categoriaPai_descricaoField" class="input-field fly01dt-filter ">
												<input id="categoriaPai_descricao" name="categoriaPai_descricao" type="search" data-index="3">
													<i class="material-icons">search</i>
													<label class="truncate" for="categoriaPai_descricao">Categoria Superior</label>
												</div>
											</th>
											<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 24px;" aria-label="">
												<span/>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr role="row" class="odd">
											<td class="sorting_1" tabindex="0" nowrap="nowrap" style="display: none;">01</td>
											<td nowrap="nowrap">VERBA LIVRE</td>
											<td nowrap="nowrap">Sint�tico</td>
											<td nowrap="nowrap" style="display: none;"/>
											<td nowrap="nowrap">
												<input type="hidden" class="rowRecordId" value="bcb6f424-4d8e-49bc-a146-5e41bb1e0b3f">
													<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown0">
														<i class="material-icons">more_vert</i>
													</a>
													<ul id="dropdown0" class="dropdown-content">
														<li>
															<a href="javascript:void(0)" onclick="fnEditar('bcb6f424-4d8e-49bc-a146-5e41bb1e0b3f')">Editar</a>
														</li>
														<li>
															<a href="javascript:void(0)" onclick="fnExcluir('bcb6f424-4d8e-49bc-a146-5e41bb1e0b3f')">Excluir</a>
														</li>
													</ul>
												</td>
											</tr>
											<tr role="row" class="even">
												<td class="sorting_1" tabindex="0" nowrap="nowrap" style="display: none;">01.01</td>
												<td nowrap="nowrap">VERBA LIVRE ANALITICO</td>
												<td nowrap="nowrap">Anal�tico</td>
												<td nowrap="nowrap" style="display: none;">VERBA LIVRE</td>
												<td nowrap="nowrap">
													<input type="hidden" class="rowRecordId" value="fc736b31-851a-49fc-9ee9-920e0ed76333">
														<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown1">
															<i class="material-icons">more_vert</i>
														</a>
														<ul id="dropdown1" class="dropdown-content">
															<li>
																<a href="javascript:void(0)" onclick="fnEditar('fc736b31-851a-49fc-9ee9-920e0ed76333')">Editar</a>
															</li>
															<li>
																<a href="javascript:void(0)" onclick="fnExcluir('fc736b31-851a-49fc-9ee9-920e0ed76333')">Excluir</a>
															</li>
														</ul>
													</td>
												</tr>
												<tr role="row" class="odd">
													<td class="sorting_1" tabindex="0" nowrap="nowrap" style="display: none;">01.03</td>
													<td nowrap="nowrap">Aluguel M�quinas</td>
													<td nowrap="nowrap">Sint�tico</td>
													<td nowrap="nowrap" style="display: none;">VERBA LIVRE</td>
													<td nowrap="nowrap">
														<input type="hidden" class="rowRecordId" value="8f622560-a7d0-45de-993b-bf4ffb26561a">
															<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown2">
																<i class="material-icons">more_vert</i>
															</a>
															<ul id="dropdown2" class="dropdown-content">
																<li>
																	<a href="javascript:void(0)" onclick="fnEditar('8f622560-a7d0-45de-993b-bf4ffb26561a')">Editar</a>
																</li>
																<li>
																	<a href="javascript:void(0)" onclick="fnExcluir('8f622560-a7d0-45de-993b-bf4ffb26561a')">Excluir</a>
																</li>
															</ul>
														</td>
													</tr>
													<tr role="row" class="even">
														<td class="sorting_1" tabindex="0" nowrap="nowrap" style="display: none;">02</td>
														<td nowrap="nowrap">DESPESAS</td>
														<td nowrap="nowrap">Sint�tico</td>
														<td nowrap="nowrap" style="display: none;"/>
														<td nowrap="nowrap">
															<input type="hidden" class="rowRecordId" value="742babcc-f879-4193-a009-7b14237557f2">
																<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown3">
																	<i class="material-icons">more_vert</i>
																</a>
																<ul id="dropdown3" class="dropdown-content">
																	<li>
																		<a href="javascript:void(0)" onclick="fnEditar('742babcc-f879-4193-a009-7b14237557f2')">Editar</a>
																	</li>
																	<li>
																		<a href="javascript:void(0)" onclick="fnExcluir('742babcc-f879-4193-a009-7b14237557f2')">Excluir</a>
																	</li>
																</ul>
															</td>
														</tr>
														<tr role="row" class="odd">
															<td class="sorting_1" tabindex="0" nowrap="nowrap" style="display: none;">02.01</td>
															<td nowrap="nowrap">PRODUTOS DE LIMPEZA</td>
															<td nowrap="nowrap">Anal�tico</td>
															<td nowrap="nowrap" style="display: none;">DESPESAS</td>
															<td nowrap="nowrap">
																<input type="hidden" class="rowRecordId" value="a115a8de-7447-410c-8dc0-77e16bc5c486">
																	<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown4">
																		<i class="material-icons">more_vert</i>
																	</a>
																	<ul id="dropdown4" class="dropdown-content">
																		<li>
																			<a href="javascript:void(0)" onclick="fnEditar('a115a8de-7447-410c-8dc0-77e16bc5c486')">Editar</a>
																		</li>
																		<li>
																			<a href="javascript:void(0)" onclick="fnExcluir('a115a8de-7447-410c-8dc0-77e16bc5c486')">Excluir</a>
																		</li>
																	</ul>
																</td>
															</tr>
															<tr role="row" class="even">
																<td class="sorting_1" tabindex="0" nowrap="nowrap" style="display: none;">02.02</td>
																<td nowrap="nowrap">MATERIAIS ADMINISTRATIVOS</td>
																<td nowrap="nowrap">Anal�tico</td>
																<td nowrap="nowrap" style="display: none;">DESPESAS</td>
																<td nowrap="nowrap">
																	<input type="hidden" class="rowRecordId" value="f47a5e97-4b7e-4163-92f2-59a79edfcf47">
																		<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown5">
																			<i class="material-icons">more_vert</i>
																		</a>
																		<ul id="dropdown5" class="dropdown-content">
																			<li>
																				<a href="javascript:void(0)" onclick="fnEditar('f47a5e97-4b7e-4163-92f2-59a79edfcf47')">Editar</a>
																			</li>
																			<li>
																				<a href="javascript:void(0)" onclick="fnExcluir('f47a5e97-4b7e-4163-92f2-59a79edfcf47')">Excluir</a>
																			</li>
																		</ul>
																	</td>
																</tr>
																<tr role="row" class="odd">
																	<td class="sorting_1" tabindex="0" nowrap="nowrap" style="display: none;">03</td>
																	<td nowrap="nowrap">VENDAS</td>
																	<td nowrap="nowrap">Sint�tico</td>
																	<td nowrap="nowrap" style="display: none;"/>
																	<td nowrap="nowrap">
																		<input type="hidden" class="rowRecordId" value="a0f99819-5c0d-4e1d-b5af-2193cbd3e504">
																			<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown6">
																				<i class="material-icons">more_vert</i>
																			</a>
																			<ul id="dropdown6" class="dropdown-content">
																				<li>
																					<a href="javascript:void(0)" onclick="fnEditar('a0f99819-5c0d-4e1d-b5af-2193cbd3e504')">Editar</a>
																				</li>
																				<li>
																					<a href="javascript:void(0)" onclick="fnExcluir('a0f99819-5c0d-4e1d-b5af-2193cbd3e504')">Excluir</a>
																				</li>
																			</ul>
																		</td>
																	</tr>
																	<tr role="row" class="even">
																		<td class="sorting_1" tabindex="0" nowrap="nowrap" style="display: none;">03.01</td>
																		<td nowrap="nowrap">VENDAS ELETRONICOS</td>
																		<td nowrap="nowrap">Anal�tico</td>
																		<td nowrap="nowrap" style="display: none;">VENDAS</td>
																		<td nowrap="nowrap">
																			<input type="hidden" class="rowRecordId" value="76a82f48-b9fd-40a5-8a01-14511461be67">
																				<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown7">
																					<i class="material-icons">more_vert</i>
																				</a>
																				<ul id="dropdown7" class="dropdown-content">
																					<li>
																						<a href="javascript:void(0)" onclick="fnEditar('76a82f48-b9fd-40a5-8a01-14511461be67')">Editar</a>
																					</li>
																					<li>
																						<a href="javascript:void(0)" onclick="fnExcluir('76a82f48-b9fd-40a5-8a01-14511461be67')">Excluir</a>
																					</li>
																				</ul>
																			</td>
																		</tr>
																		<tr role="row" class="odd">
																			<td class="sorting_1" tabindex="0" nowrap="nowrap" style="display: none;">03.02</td>
																			<td nowrap="nowrap">VENDAS PERIF�RICOS</td>
																			<td nowrap="nowrap">Anal�tico</td>
																			<td nowrap="nowrap" style="display: none;">VENDAS</td>
																			<td nowrap="nowrap">
																				<input type="hidden" class="rowRecordId" value="f9b774ef-08b1-4b69-aca0-6017b9711bbc">
																					<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown8">
																						<i class="material-icons">more_vert</i>
																					</a>
																					<ul id="dropdown8" class="dropdown-content">
																						<li>
																							<a href="javascript:void(0)" onclick="fnEditar('f9b774ef-08b1-4b69-aca0-6017b9711bbc')">Editar</a>
																						</li>
																						<li>
																							<a href="javascript:void(0)" onclick="fnExcluir('f9b774ef-08b1-4b69-aca0-6017b9711bbc')">Excluir</a>
																						</li>
																					</ul>
																				</td>
																			</tr>
																			<tr role="row" class="even">
																				<td class="sorting_1" tabindex="0" nowrap="nowrap" style="display: none;">04</td>
																				<td nowrap="nowrap">RECEITAS</td>
																				<td nowrap="nowrap">Sint�tico</td>
																				<td nowrap="nowrap" style="display: none;"/>
																				<td nowrap="nowrap">
																					<input type="hidden" class="rowRecordId" value="4ce1b31e-1a32-4826-a77c-e02244cbfc2a">
																						<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown9">
																							<i class="material-icons">more_vert</i>
																						</a>
																						<ul id="dropdown9" class="dropdown-content">
																							<li>
																								<a href="javascript:void(0)" onclick="fnEditar('4ce1b31e-1a32-4826-a77c-e02244cbfc2a')">Editar</a>
																							</li>
																							<li>
																								<a href="javascript:void(0)" onclick="fnExcluir('4ce1b31e-1a32-4826-a77c-e02244cbfc2a')">Excluir</a>
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
																					<a class="paginate_button current" aria-controls="fly01dt" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="fly01dt" data-dt-idx="2" tabindex="0">2</a>
																				</span><a class="paginate_button next" aria-controls="fly01dt" data-dt-idx="3" tabindex="0" id="fly01dt_next">Pr�ximo</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
@endsection
														