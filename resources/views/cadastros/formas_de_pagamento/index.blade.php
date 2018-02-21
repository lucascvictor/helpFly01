@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
<div id="headTop" class="z-depth-0-half">
	<div class="container">
		<div class="row">
			<div class="col s12 fly01-main-header">
				<h4 class="thin inline-block">Forma de Pagamento</h4>
				<ul class="right valign-wrapper fly01-buttons">
					<li>
						<a id="new" class="btn " href="{{ url('/cadastros/formasdepagamento/create') }}">Novo</a>
						<a id="tour" class="btn pulse" onclick="initTour();">Tour</a>
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
						<th class="sorting_asc" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 84px; display: none;" aria-sort="ascending" aria-label="DinheiroChequeCart�o de Cr�ditoCart�o de D�bitoTransfer�nciaBoletoTipo: Ordenar colunas de forma descendente">
							<div id="tipoFormaPagamentoField" class="input-field fly01dt-select ">
								<div class="select-wrapper initialized">
									<span class="caret">?</span>
									<input type="text" class="select-dropdown" readonly="true" data-activates="select-options-6ouq6qd" value="">
										<ul id="select-options-6ouq6qd" class="dropdown-content select-dropdown ">
											<li class="">
												<span/>
											</li>
											<li class="">
												<span>Dinheiro</span>
											</li>
											<li class="">
												<span>Cheque</span>
											</li>
											<li class="">
												<span>Cart�o de Cr�dito</span>
											</li>
											<li class="">
												<span>Cart�o de D�bito</span>
											</li>
											<li class="">
												<span>Transfer�ncia</span>
											</li>
											<li class="">
												<span>Boleto</span>
											</li>
										</ul>
										<select id="tipoFormaPagamento" name="tipoFormaPagamento" data-select-id="6ouq6qd" class="initialized">
											<option value=""/>
											<option value="Dinheiro">Dinheiro</option>
											<option value="Cheque">Cheque</option>
											<option value="CartaoCredito">Cart�o de Cr�dito</option>
											<option value="CartaoDebito">Cart�o de D�bito</option>
											<option value="Transferencia">Transfer�ncia</option>
											<option value="Boleto">Boleto</option>
										</select>
									</div>
									<label class="truncate" for="tipoFormaPagamento">Tipo</label>
								</div>
							</th>
							<th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 200px;" aria-label="searchDescri��o: Ordenar colunas de forma ascendente">
								<div id="descricaoField" class="input-field fly01dt-filter ">
									<input id="descricao" name="descricao" type="search" data-index="1">
										<i class="material-icons">search</i>
										<label class="truncate" for="descricao">Descri��o</label>
									</div>
								</th>
								<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 24px;" aria-label="">
									<span/>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr role="row" class="odd">
								<td class="sorting_1" tabindex="0" nowrap="nowrap" style="display: none;">Dinheiro</td>
								<td nowrap="nowrap">Dinheiro</td>
								<td nowrap="nowrap">
									<input type="hidden" class="rowRecordId" value="34252f6a-f85a-4bc6-ac6d-482b886fa016">
										<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown0">
											<i class="material-icons">more_vert</i>
										</a>
										<ul id="dropdown0" class="dropdown-content">
											<li>
												<a href="javascript:void(0)" onclick="fnEditar('34252f6a-f85a-4bc6-ac6d-482b886fa016')">Editar</a>
											</li>
											<li>
												<a href="javascript:void(0)" onclick="fnExcluir('34252f6a-f85a-4bc6-ac6d-482b886fa016')">Excluir</a>
											</li>
										</ul>
									</td>
								</tr>
								<tr role="row" class="even">
									<td class="sorting_1" tabindex="0" nowrap="nowrap" style="display: none;">Cart�o de Cr�dito</td>
									<td nowrap="nowrap">CART�O</td>
									<td nowrap="nowrap">
										<input type="hidden" class="rowRecordId" value="a00fe0c7-dc62-4ad9-ab79-7676f24c2acc">
											<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown1">
												<i class="material-icons">more_vert</i>
											</a>
											<ul id="dropdown1" class="dropdown-content">
												<li>
													<a href="javascript:void(0)" onclick="fnEditar('a00fe0c7-dc62-4ad9-ab79-7676f24c2acc')">Editar</a>
												</li>
												<li>
													<a href="javascript:void(0)" onclick="fnExcluir('a00fe0c7-dc62-4ad9-ab79-7676f24c2acc')">Excluir</a>
												</li>
											</ul>
										</td>
									</tr>
									<tr role="row" class="odd">
										<td class="sorting_1" tabindex="0" nowrap="nowrap" style="display: none;">Transfer�ncia</td>
										<td nowrap="nowrap">Transfer�ncia Conta Banco do Brasil</td>
										<td nowrap="nowrap">
											<input type="hidden" class="rowRecordId" value="02f397a4-40d8-4ba4-9ce5-0959d9a8aff2">
												<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown2">
													<i class="material-icons">more_vert</i>
												</a>
												<ul id="dropdown2" class="dropdown-content">
													<li>
														<a href="javascript:void(0)" onclick="fnEditar('02f397a4-40d8-4ba4-9ce5-0959d9a8aff2')">Editar</a>
													</li>
													<li>
														<a href="javascript:void(0)" onclick="fnExcluir('02f397a4-40d8-4ba4-9ce5-0959d9a8aff2')">Excluir</a>
													</li>
												</ul>
											</td>
										</tr>
										<tr role="row" class="even">
											<td class="sorting_1" tabindex="0" nowrap="nowrap" style="display: none;">Transfer�ncia</td>
											<td nowrap="nowrap">Transfer�ncia Banco Ita� </td>
											<td nowrap="nowrap">
												<input type="hidden" class="rowRecordId" value="168af1ad-e1e0-417a-b811-4dd4d622f92c">
													<a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown3">
														<i class="material-icons">more_vert</i>
													</a>
													<ul id="dropdown3" class="dropdown-content">
														<li>
															<a href="javascript:void(0)" onclick="fnEditar('168af1ad-e1e0-417a-b811-4dd4d622f92c')">Editar</a>
														</li>
														<li>
															<a href="javascript:void(0)" onclick="fnExcluir('168af1ad-e1e0-417a-b811-4dd4d622f92c')">Excluir</a>
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
						