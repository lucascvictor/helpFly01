@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
								<div id="headTop" class="z-depth-0-half">
									<div class="container">
										<div class="row">
											<div class="col s12 fly01-main-header">
												<h4 class="thin inline-block">Dados da conta bancária</h4>
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
										<form id="fly01frm" class="col s12" action="https://novofinanceiro.fly01.com.br/ContaBancaria/Create" method="post" novalidate="novalidate" data-vivaldi-spatnav-clickable="1">
											<input id="id" type="hidden" name="id"/>
											<div id="bancoIdField" class="input-field col s12 m12 12">
												<input type="hidden" name="bancoId" id="bancoId"/>
												<input type="text" class="autocomplete ui-autocomplete-input" id="bancoNome" name="bancoNome" data-url="/AutoComplete/Banco" data-target="bancoId" autocomplete="off"/>
												<label class="truncate" for="bancoNome">Banco</label>
											</div>
											<div id="nomeContaField" class="input-field col s4 m4 l6">
												<input id="nomeConta" type="text" name="nomeConta"/>
												<label class="truncate" for="nomeConta">Nome da Conta</label>
											</div>
											<div id="agenciaField" class="input-field col s3 m3 l2">
												<input id="agencia" type="text" name="agencia"/>
												<label class="truncate" for="agencia">Agência</label>
											</div>
											<div id="digitoAgenciaField" class="input-field col s1 m1 l1">
												<input id="digitoAgencia" type="text" name="digitoAgencia"/>
												<label class="truncate" for="digitoAgencia">Díg.</label>
											</div>
											<div id="contaField" class="input-field col s3 m3 l2">
												<input id="conta" type="text" name="conta"/>
												<label class="truncate" for="conta">Conta</label>
											</div>
											<div id="digitoContaField" class="input-field col s1 m1 l1">
												<input id="digitoConta" type="text" name="digitoConta"/>
												<label class="truncate" for="digitoConta">Díg.</label>
											</div>
										</form>
									</div>
								</div>
@endsection