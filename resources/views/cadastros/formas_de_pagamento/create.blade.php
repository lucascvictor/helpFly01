@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
								<div id="headTop" class="z-depth-0-half">
									<div class="container">
										<div class="row">
											<div class="col s12 fly01-main-header">
												<h4 class="thin inline-block">Dados da forma de pagamento</h4>
												<ul class="right valign-wrapper fly01-buttons">
													<li>
														<a id="cancel" class="btn " href="{{ url('/voltar') }}">Cancelar</a>
														<div class="fixed-action-btn"> 
														<a id="tour" class="btn pulse orange" onclick="initTour();" style="border-radius: 80px;"><i class="material-icons prefix">live_help</i>Tour</a>
														</div>
													</li>
													<li>
														<a id="salvar" class="btn" onclick="fnSalvar();">Salvar</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="container">
									<div class="row">
										<form id="fly01frm" class="col s12" action="https://novofinanceiro.fly01.com.br/FormaPagamento/Create" method="post" novalidate="novalidate" data-vivaldi-spatnav-clickable="1">
											<input id="id" type="hidden" name="id"/>
											<div id="tipoFormaPagamentoField" class="input-field col s4 l4">
												<div class="select-wrapper">
													<span class="caret">▼</span>
													<input type="text" class="select-dropdown" readonly="true" data-activates="select-options-ooq2gib" value="Dinheiro">
														<ul id="select-options-ooq2gib" class="dropdown-content select-dropdown ">
															<li class="" data-vivaldi-spatnav-clickable="1">
																<span>Dinheiro</span>
															</li>
															<li class="" data-vivaldi-spatnav-clickable="1">
																<span>Cheque</span>
															</li>
															<li class="" data-vivaldi-spatnav-clickable="1">
																<span>Cartão de Crédito</span>
															</li>
															<li class="" data-vivaldi-spatnav-clickable="1">
																<span>Cartão de Débito</span>
															</li>
															<li class="" data-vivaldi-spatnav-clickable="1">
																<span>Transferência</span>
															</li>
															<li class="" data-vivaldi-spatnav-clickable="1">
																<span>Boleto</span>
															</li>
														</ul>
														<select id="tipoFormaPagamento" name="tipoFormaPagamento" data-select-id="ooq2gib" class="initialized">
															<option value="Dinheiro">Dinheiro</option>
															<option value="Cheque">Cheque</option>
															<option value="CartaoCredito">Cartão de Crédito</option>
															<option value="CartaoDebito">Cartão de Débito</option>
															<option value="Transferencia">Transferência</option>
															<option value="Boleto">Boleto</option>
														</select>
													</div>
													<label class="truncate active" for="tipoFormaPagamento">Tipo</label>
												</div>
												<div id="descricaoField" class="input-field col s8 l8">
													<input id="descricao" type="text" name="descricao"/>
													<label class="truncate" for="descricao">Descrição</label>
												</div>
											</form>
										</div>
									</div>
@endsection


@section('extrascript')

	@include('cadastros.formas_de_pagamento.tour')

@endsection