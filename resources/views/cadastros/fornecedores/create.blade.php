@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
								<div id="headTop" class="z-depth-0-half">
									<div class="container">
										<div class="row">
											<div class="col s12 fly01-main-header">
												<h4 class="thin inline-block">Dados do fornecedor</h4>
												<ul class="right valign-wrapper fly01-buttons">
													<li>
														<a id="cancel" class="btn " href="{{ url('/voltar') }}">Cancelar</a>
													</li>
													<li>
														<a id="save" class="btn " onclick="fnSalvar();">Salvar</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="container">
									<div class="row">
										<form id="fly01frm" class="col s12" action="https://novofinanceiro.fly01.com.br/Fornecedor/Create" method="post" novalidate="novalidate" data-vivaldi-spatnav-clickable="1">
											<input id="id" type="hidden" name="id"/>
											<div id="cpfcnpjField" class="input-field col s12 l4">
												<input id="cpfcnpj" type="text" name="cpfcnpj" class="masked cpfcnpj"/>
												<label class="truncate" for="cpfcnpj">CPF / CNPJ</label>
											</div>
											<div id="nomeField" class="input-field col s12 l8">
												<input id="nome" type="text" name="nome"/>
												<label class="truncate" for="nome">Razão Social / Nome Completo</label>
											</div>
											<div id="nomeComercialField" class="input-field col s12 l6">
												<input id="nomeComercial" type="text" name="nomeComercial"/>
												<label class="truncate" for="nomeComercial">Nome Comercial</label>
											</div>
											<div id="emailField" class="input-field col s7 l6">
												<input id="email" type="email" name="email"/>
												<label class="truncate" for="email">E-mail</label>
											</div>
											<div id="contatoField" class="input-field col s12 l6">
												<input id="contato" type="text" name="contato"/>
												<label class="truncate" for="contato">Pessoa de Contato</label>
											</div>
											<div id="celularField" class="input-field col s6 l3">
												<input id="celular" type="text" name="celular" class="masked tel"/>
												<label class="truncate" for="celular">Celular</label>
											</div>
											<div id="telefoneField" class="input-field col s6 l3">
												<input id="telefone" type="text" name="telefone" class="masked tel"/>
												<label class="truncate" for="telefone">Telefone</label>
											</div>
											<div id="cepField" class="input-field col s12 l4">
												<input id="cep" type="text" name="cep" class="masked cep"/>
												<label class="truncate" for="cep">CEP</label>
											</div>
											<div id="estadoIdField" class="input-field col s6 l4">
												<input type="hidden" name="estadoId" id="estadoId"/>
												<input type="text" class="autocomplete ui-autocomplete-input" id="estadoNome" name="estadoNome" data-url="/AutoComplete/Estado" data-target="estadoId" autocomplete="off"/>
												<label class="truncate" for="estadoNome">Estado</label>
											</div>
											<div id="cidadeIdField" class="input-field col s6 l4">
												<input type="hidden" name="cidadeId" id="cidadeId"/>
												<input type="text" class="autocomplete ui-autocomplete-input" id="cidadeNome" name="cidadeNome" data-url="/AutoComplete/Cidade" data-target="cidadeId" data-prefilter="estadoId" autocomplete="off"/>
												<label class="truncate" for="cidadeNome">Cidade (Escolha o estado antes)</label>
											</div>
											<div id="bairroField" class="input-field col s12 l3">
												<input id="bairro" type="text" name="bairro"/>
												<label class="truncate" for="bairro">Bairro</label>
											</div>
											<div id="enderecoField" class="input-field col s12 l5">
												<input id="endereco" type="text" name="endereco"/>
												<label class="truncate" for="endereco">Endereço (Se preencher, informar o número também)</label>
											</div>
											<div id="numeroField" class="input-field col s6 l2">
												<input id="numero" type="text" name="numero"/>
												<label class="truncate" for="numero">Número</label>
											</div>
											<div id="complementoField" class="input-field col s6 l2">
												<input id="complemento" type="text" name="complemento"/>
												<label class="truncate" for="complemento">Complemento</label>
											</div>
											<div id="observacaoField" class="input-field col s12 l12">
												<textarea id="observacao" name="observacao" class="materialize-textarea"> </textarea>
												<label class="truncate" for="observacao">Observação</label>
											</div>
											<div id="clienteField" class="input-field col s12 l4">
												<p>
													<input id="cliente" type="checkbox" name="cliente" value="true"/>
													<label class="truncate" for="cliente">É Cliente</label>
												</p>
											</div>
											<div id="transportadoraField" class="input-field col s12 l4">
												<p>
													<input id="transportadora" type="checkbox" name="transportadora" value="true"/>
													<label class="truncate" for="transportadora">É Transportadora</label>
												</p>
											</div>
											<div id="vendedorField" class="input-field col s12 l4">
												<p>
													<input id="vendedor" type="checkbox" name="vendedor" value="true"/>
													<label class="truncate" for="vendedor">É Vendedor</label>
												</p>
											</div>
										</form>
									</div>
								</div>
@endsection