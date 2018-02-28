@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
								<div id="headTop" class="z-depth-0-half">
									<div class="container">
										<div class="row">
											<div class="col s12 fly01-main-header">
												<h4 class="thin inline-block">Dados da categoria financeira</h4>
												<ul class="right valign-wrapper fly01-buttons">
													<li>
														<a id="cancel" class="btn " href="{{ url('/voltar') }}">Cancelar</a>
													</li>
													<li>
														<a id="save" class="btn " onclick="fnSalvar();">Salvar</a>
													</li>
													<li>
													<div class="fixed-action-btn"> 
														<a id="tour" class="btn pulse orange btn-medium" onclick="initTour();" style="border-radius: 80px;"><i class="material-icons small left"/>help</i>Iniciar Tour</a>
													</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="container">
									<div class="row">
										<form id="fly01frm" class="col s12" action="https://novofinanceiro.fly01.com.br/CategoriaFinanceira/Create" method="post" novalidate="novalidate" data-vivaldi-spatnav-clickable="1">
											<input id="id" type="hidden" name="id"/>
											<input id="codigo" type="hidden" name="codigo"/>
											<div id="descricaoField" class="input-field col s12">
												<input id="descricao" type="text" name="descricao"/>
												<label class="truncate" for="descricao">Descrição</label>
											</div>
											<div id="tipoCarteiraField" class="input-field col s6">
												<div class="select-wrapper">
													<span class="caret">▼</span>
													<input type="text" class="select-dropdown" readonly="true" data-activates="select-options-0n5cg7i" value="Receitas">
														<ul id="select-options-0n5cg7i" class="dropdown-content select-dropdown ">
															<li class="" data-vivaldi-spatnav-clickable="1">
																<span>Receitas</span>
															</li>
															<li class="" data-vivaldi-spatnav-clickable="1">
																<span>Despesas</span>
															</li>
														</ul>
														<select id="tipoCarteira" name="tipoCarteira" data-select-id="0n5cg7i" class="initialized">
															<option value="Receita">Receitas</option>
															<option value="Despesa">Despesas</option>
														</select>
													</div>
													<label class="truncate active" for="tipoCarteira">Tipo Carteira</label>
												</div>
												<div id="classeField" class="input-field col s6">
													<div class="select-wrapper">
														<span class="caret">▼</span>
														<input type="text" class="select-dropdown" readonly="true" data-activates="select-options-tbksqb5" value="Sintético">
															<ul id="select-options-tbksqb5" class="dropdown-content select-dropdown ">
																<li class="" data-vivaldi-spatnav-clickable="1">
																	<span>Sintético</span>
																</li>
																<li class="" data-vivaldi-spatnav-clickable="1">
																	<span>Analítico</span>
																</li>
															</ul>
															<select id="classe" name="classe" data-select-id="tbksqb5" class="initialized">
																<option value="Sintetico">Sintético</option>
																<option value="Analitico">Analítico</option>
															</select>
														</div>
														<label class="truncate active" for="classe">Classe</label>
													</div>
													<div id="categoriaPaiIdField" class="input-field col s12 m12 12">
														<input type="hidden" name="categoriaPaiId" id="categoriaPaiId"/>
														<input type="text" class="autocomplete ui-autocomplete-input" id="categoriaPaiDescricao" name="categoriaPaiDescricao" data-url="/AutoComplete/CategoriaFinanceira" data-target="categoriaPaiId" data-prefilter="tipoCarteira" autocomplete="off"/>
														<label class="truncate" for="categoriaPaiDescricao">Categoria Superior</label>
													</div>
												</form>
											</div>
										</div>
@endsection		