@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
<div id="headTop" class="z-depth-0-half"><div class="container"><div class="row"><div class="col s12 fly01-main-header"><h4 class="thin inline-block">Contas a Pagar</h4><ul class="right valign-wrapper fly01-buttons"><li><a id="new" class="btn " onclick="fnNovo();">Novo</a></li><li><a id="new" class="btn " onclick="fnNovaRenegociacaoCP();">Renegocia��o</a></li></ul></div></div></div></div><div class="container"><div class="row"><div id="fly01dt_wrapper" class="col s12 no-footer"><div class=""></div><div id="fly01dt_processing" class="dataTables_processing" style="display: none;"></div><table class="display striped responsive nowrap dataTable no-footer dtr-inline collapsed" width="100%" id="fly01dt" role="grid" aria-describedby="fly01dt_info" style="width: 100%;"><thead><tr id="columns" role="row"><th class="sorting_asc" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-sort="ascending" aria-label="Em abertoPagoRenegociadoBaixado ParcialmenteStatus: Ordenar colunas de forma descendente"><div id="statusContaBancariaField" class="input-field fly01dt-select "><div class="select-wrapper initialized"><span class="caret">?</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-4x0297q" value=""><ul id="select-options-4x0297q" class="dropdown-content select-dropdown "><li class=""><span></span></li><li class=""><span>Em aberto</span></li><li class=""><span>Pago</span></li><li class=""><span>Renegociado</span></li><li class=""><span>Baixado Parcialmente</span></li></ul><select id="statusContaBancaria" name="statusContaBancaria" data-select-id="4x0297q" class="initialized"><option value=""></option><option value="EmAberto">Em aberto</option><option value="Pago">Pago</option><option value="Renegociado">Renegociado</option><option value="BaixadoParcialmente">Baixado Parcialmente</option></select></div><label class="truncate" for="statusContaBancaria">Status</label></div></th><th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Vencimento: Ordenar colunas de forma ascendente"><div id="dataVencimentoField" class="input-field fly01dt-filter "><input id="dataVencimento" name="dataVencimento" type="text" class="masked date" data-index="1"><label class="truncate" for="dataVencimento">Vencimento</label></div></th><th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 56px;" aria-label="searchDescri��o: Ordenar colunas de forma ascendente"><div id="descricaoField" class="input-field fly01dt-filter "><input id="descricao" name="descricao" type="search" data-index="2"><i class="material-icons">search</i><label class="truncate" for="descricao">Descri��o</label></div></th><th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 45px;" aria-label="Valor: Ordenar colunas de forma ascendente"><div id="valorPrevistoField" class="input-field fly01dt-filter "><input id="valorPrevisto" name="valorPrevisto" type="text" class="masked currency" data-index="3" style="text-align: right;"><label class="truncate" for="valorPrevisto">Valor</label></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 71px; display: none;" aria-label="Saldo"><span>Saldo</span></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="searchForma"><div id="formaPagamento_descricaoField" class="input-field fly01dt-filter "><input id="formaPagamento_descricao" name="formaPagamento_descricao" type="search" data-index="5"><i class="material-icons">search</i><label class="truncate" for="formaPagamento_descricao">Forma</label></div></th><th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="searchParcela: Ordenar colunas de forma ascendente"><div id="descricaoParcelaField" class="input-field fly01dt-filter "><input id="descricaoParcela" name="descricaoParcela" type="search" data-index="6"><i class="material-icons">search</i><label class="truncate" for="descricaoParcela">Parcela</label></div></th><th class="sorting" tabindex="0" aria-controls="fly01dt" rowspan="1" colspan="1" style="width: 132px;" aria-label="searchRecebedor: Ordenar colunas de forma ascendente"><div id="pessoa_nomeField" class="input-field fly01dt-filter "><input id="pessoa_nome" name="pessoa_nome" type="search" data-index="7"><i class="material-icons">search</i><label class="truncate" for="pessoa_nome">Recebedor</label></div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 24px;" aria-label=""><span></span></th></tr></thead><tbody><tr role="row" class="odd"><td style="display: none;" class="sorting_1" tabindex="0" nowrap="nowrap"><span class="new badge orange left" data-badge-caption=" ">ABER</span></td><td style="display: none;" nowrap="nowrap">27/03/2018</td><td nowrap="nowrap">ALUGUEL</td><td nowrap="nowrap">R$1.000,00</td><td nowrap="nowrap" style="display: none;">R$1.000,00</td><td style="display: none;" nowrap="nowrap">CART�O</td><td style="display: none;" nowrap="nowrap">01/01</td><td nowrap="nowrap">FORNECEDOR E CLIENTE</td><td nowrap="nowrap"><input type="hidden" class="rowRecordId" value="10acaa3c-3174-47e6-abc0-3375393d3863"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown0"><i class="material-icons">more_vert</i></a><ul id="dropdown0" class="dropdown-content"><li><a href="javascript:void(0)" onclick="fnEditar('10acaa3c-3174-47e6-abc0-3375393d3863')">Editar</a></li><li><a href="javascript:void(0)" onclick="fnVisualizar('10acaa3c-3174-47e6-abc0-3375393d3863')">Visualizar</a></li><li><a href="javascript:void(0)" onclick="fnExcluir('10acaa3c-3174-47e6-abc0-3375393d3863')">Excluir</a></li><li><a href="javascript:void(0)" onclick="fnNovaBaixa('10acaa3c-3174-47e6-abc0-3375393d3863')">Nova baixa</a></li></ul></td></tr><tr role="row" class="even"><td style="display: none;" class="sorting_1" tabindex="0" nowrap="nowrap"><span class="new badge orange left" data-badge-caption=" ">ABER</span></td><td style="display: none;" nowrap="nowrap">15/07/2018</td><td nowrap="nowrap">Aluguel Sede</td><td nowrap="nowrap">R$1.200,00</td><td nowrap="nowrap" style="display: none;">R$1.200,00</td><td style="display: none;" nowrap="nowrap">Dinheiro</td><td style="display: none;" nowrap="nowrap">01/01</td><td nowrap="nowrap">Allan Rogge</td><td nowrap="nowrap"><input type="hidden" class="rowRecordId" value="b0a4b034-7108-44d0-8ecb-33fb3512caf3"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown1"><i class="material-icons">more_vert</i></a><ul id="dropdown1" class="dropdown-content"><li><a href="javascript:void(0)" onclick="fnEditar('b0a4b034-7108-44d0-8ecb-33fb3512caf3')">Editar</a></li><li><a href="javascript:void(0)" onclick="fnVisualizar('b0a4b034-7108-44d0-8ecb-33fb3512caf3')">Visualizar</a></li><li><a href="javascript:void(0)" onclick="fnExcluir('b0a4b034-7108-44d0-8ecb-33fb3512caf3')">Excluir</a></li><li><a href="javascript:void(0)" onclick="fnNovaBaixa('b0a4b034-7108-44d0-8ecb-33fb3512caf3')">Nova baixa</a></li></ul></td></tr><tr role="row" class="odd"><td style="display: none;" class="sorting_1" tabindex="0" nowrap="nowrap"><span class="new badge orange left" data-badge-caption=" ">ABER</span></td><td style="display: none;" nowrap="nowrap">15/03/2018</td><td nowrap="nowrap">Aluguel Sede</td><td nowrap="nowrap">R$1.200,00</td><td nowrap="nowrap" style="display: none;">R$1.200,00</td><td style="display: none;" nowrap="nowrap">Dinheiro</td><td style="display: none;" nowrap="nowrap">01/01</td><td nowrap="nowrap">Allan Rogge</td><td nowrap="nowrap"><input type="hidden" class="rowRecordId" value="865ac3bc-1c08-408a-b351-3e1b4797ecc4"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown2"><i class="material-icons">more_vert</i></a><ul id="dropdown2" class="dropdown-content"><li><a href="javascript:void(0)" onclick="fnEditar('865ac3bc-1c08-408a-b351-3e1b4797ecc4')">Editar</a></li><li><a href="javascript:void(0)" onclick="fnVisualizar('865ac3bc-1c08-408a-b351-3e1b4797ecc4')">Visualizar</a></li><li><a href="javascript:void(0)" onclick="fnExcluir('865ac3bc-1c08-408a-b351-3e1b4797ecc4')">Excluir</a></li><li><a href="javascript:void(0)" onclick="fnNovaBaixa('865ac3bc-1c08-408a-b351-3e1b4797ecc4')">Nova baixa</a></li></ul></td></tr><tr role="row" class="even"><td style="display: none;" class="sorting_1" tabindex="0" nowrap="nowrap"><span class="new badge orange left" data-badge-caption=" ">ABER</span></td><td style="display: none;" nowrap="nowrap">15/02/2018</td><td nowrap="nowrap">Aluguel Sede</td><td nowrap="nowrap">R$1.200,00</td><td nowrap="nowrap" style="display: none;">R$1.200,00</td><td style="display: none;" nowrap="nowrap">Dinheiro</td><td style="display: none;" nowrap="nowrap">01/01</td><td nowrap="nowrap">Allan Rogge</td><td nowrap="nowrap"><input type="hidden" class="rowRecordId" value="610b1b48-1086-453e-9863-4657ac120a03"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown3"><i class="material-icons">more_vert</i></a><ul id="dropdown3" class="dropdown-content"><li><a href="javascript:void(0)" onclick="fnEditar('610b1b48-1086-453e-9863-4657ac120a03')">Editar</a></li><li><a href="javascript:void(0)" onclick="fnVisualizar('610b1b48-1086-453e-9863-4657ac120a03')">Visualizar</a></li><li><a href="javascript:void(0)" onclick="fnExcluir('610b1b48-1086-453e-9863-4657ac120a03')">Excluir</a></li><li><a href="javascript:void(0)" onclick="fnNovaBaixa('610b1b48-1086-453e-9863-4657ac120a03')">Nova baixa</a></li></ul></td></tr><tr role="row" class="odd"><td style="display: none;" class="sorting_1" tabindex="0" nowrap="nowrap"><span class="new badge orange left" data-badge-caption=" ">ABER</span>
</td><td style="display: none;" nowrap="nowrap">27/06/2018</td><td nowrap="nowrap">ALUGUEL</td><td nowrap="nowrap">R$1.000,00</td><td nowrap="nowrap" style="display: none;">R$1.000,00</td><td style="display: none;" nowrap="nowrap">CART�O</td><td style="display: none;" nowrap="nowrap">01/01</td><td nowrap="nowrap">FORNECEDOR E CLIENTE</td><td nowrap="nowrap"><input type="hidden" class="rowRecordId" value="fddcc81d-dcd7-4d4a-a80f-5f76908f12c8"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown4"><i class="material-icons">more_vert</i></a><ul id="dropdown4" class="dropdown-content"><li><a href="javascript:void(0)" onclick="fnEditar('fddcc81d-dcd7-4d4a-a80f-5f76908f12c8')">Editar</a></li><li><a href="javascript:void(0)" onclick="fnVisualizar('fddcc81d-dcd7-4d4a-a80f-5f76908f12c8')">Visualizar</a></li><li><a href="javascript:void(0)" onclick="fnExcluir('fddcc81d-dcd7-4d4a-a80f-5f76908f12c8')">Excluir</a></li><li><a href="javascript:void(0)" onclick="fnNovaBaixa('fddcc81d-dcd7-4d4a-a80f-5f76908f12c8')">Nova baixa</a></li></ul></td></tr><tr role="row" class="even"><td style="display: none;" class="sorting_1" tabindex="0" nowrap="nowrap"><span class="new badge orange left" data-badge-caption=" ">ABER</span></td><td style="display: none;" nowrap="nowrap">15/01/2018</td><td nowrap="nowrap">Aluguel Sede</td><td nowrap="nowrap">R$1.200,00</td><td nowrap="nowrap" style="display: none;">R$1.200,00</td><td style="display: none;" nowrap="nowrap">Dinheiro</td><td style="display: none;" nowrap="nowrap">01/01</td><td nowrap="nowrap">Allan Rogge</td><td nowrap="nowrap"><input type="hidden" class="rowRecordId" value="3d15d2de-e164-4250-84be-70b1327ecab9"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown5"><i class="material-icons">more_vert</i></a><ul id="dropdown5" class="dropdown-content"><li><a href="javascript:void(0)" onclick="fnEditar('3d15d2de-e164-4250-84be-70b1327ecab9')">Editar</a></li><li><a href="javascript:void(0)" onclick="fnVisualizar('3d15d2de-e164-4250-84be-70b1327ecab9')">Visualizar</a></li><li><a href="javascript:void(0)" onclick="fnExcluir('3d15d2de-e164-4250-84be-70b1327ecab9')">Excluir</a></li><li><a href="javascript:void(0)" onclick="fnNovaBaixa('3d15d2de-e164-4250-84be-70b1327ecab9')">Nova baixa</a></li></ul></td></tr><tr role="row" class="odd"><td style="display: none;" class="sorting_1" tabindex="0" nowrap="nowrap"><span class="new badge orange left" data-badge-caption=" ">ABER</span></td><td style="display: none;" nowrap="nowrap">15/09/2018</td><td nowrap="nowrap">Aluguel Sede</td><td nowrap="nowrap">R$1.200,00</td><td nowrap="nowrap" style="display: none;">R$1.200,00</td><td style="display: none;" nowrap="nowrap">Dinheiro</td><td style="display: none;" nowrap="nowrap">01/01</td><td nowrap="nowrap">Allan Rogge</td><td nowrap="nowrap"><input type="hidden" class="rowRecordId" value="ac5d035f-ba41-4cef-9f7b-794963589407"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown6"><i class="material-icons">more_vert</i></a><ul id="dropdown6" class="dropdown-content"><li><a href="javascript:void(0)" onclick="fnEditar('ac5d035f-ba41-4cef-9f7b-794963589407')">Editar</a></li><li><a href="javascript:void(0)" onclick="fnVisualizar('ac5d035f-ba41-4cef-9f7b-794963589407')">Visualizar</a></li><li><a href="javascript:void(0)" onclick="fnExcluir('ac5d035f-ba41-4cef-9f7b-794963589407')">Excluir</a></li><li><a href="javascript:void(0)" onclick="fnNovaBaixa('ac5d035f-ba41-4cef-9f7b-794963589407')">Nova baixa</a></li></ul></td></tr><tr role="row" class="even"><td style="display: none;" class="sorting_1" tabindex="0" nowrap="nowrap"><span class="new badge orange left" data-badge-caption=" ">ABER</span></td><td style="display: none;" nowrap="nowrap">27/09/2018</td><td nowrap="nowrap">ALUGUEL</td><td nowrap="nowrap">R$1.000,00</td><td nowrap="nowrap" style="display: none;">R$1.000,00</td><td style="display: none;" nowrap="nowrap">CART�O</td><td style="display: none;" nowrap="nowrap">01/01</td><td nowrap="nowrap">FORNECEDOR E CLIENTE</td><td nowrap="nowrap"><input type="hidden" class="rowRecordId" value="7af80354-e53a-4169-b755-a9858513bec7"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown7"><i class="material-icons">more_vert</i></a><ul id="dropdown7" class="dropdown-content"><li><a href="javascript:void(0)" onclick="fnEditar('7af80354-e53a-4169-b755-a9858513bec7')">Editar</a></li><li><a href="javascript:void(0)" onclick="fnVisualizar('7af80354-e53a-4169-b755-a9858513bec7')">Visualizar</a></li><li><a href="javascript:void(0)" onclick="fnExcluir('7af80354-e53a-4169-b755-a9858513bec7')">Excluir</a></li><li><a href="javascript:void(0)" onclick="fnNovaBaixa('7af80354-e53a-4169-b755-a9858513bec7')">Nova baixa</a></li></ul></td></tr><tr role="row" class="odd"><td style="display: none;" class="sorting_1" tabindex="0" nowrap="nowrap"><span class="new badge orange left" data-badge-caption=" ">ABER</span></td><td style="display: none;" nowrap="nowrap">27/05/2018</td><td nowrap="nowrap">ALUGUEL</td><td nowrap="nowrap">R$1.000,00</td><td nowrap="nowrap" style="display: none;">R$1.000,00</td><td style="display: none;" nowrap="nowrap">CART�O</td><td style="display: none;" nowrap="nowrap">01/01</td><td nowrap="nowrap">FORNECEDOR E CLIENTE</td><td nowrap="nowrap"><input type="hidden" class="rowRecordId" value="73b4cfba-b514-45ff-b2cc-b8e06063f91d"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown8"><i class="material-icons">more_vert</i></a><ul id="dropdown8" class="dropdown-content"><li><a href="javascript:void(0)" onclick="fnEditar('73b4cfba-b514-45ff-b2cc-b8e06063f91d')">Editar</a></li><li><a href="javascript:void(0)" onclick="fnVisualizar('73b4cfba-b514-45ff-b2cc-b8e06063f91d')">Visualizar</a></li><li><a href="javascript:void(0)" onclick="fnExcluir('73b4cfba-b514-45ff-b2cc-b8e06063f91d')">Excluir</a></li><li><a href="javascript:void(0)" onclick="fnNovaBaixa('73b4cfba-b514-45ff-b2cc-b8e06063f91d')">Nova baixa</a></li></ul></td></tr><tr role="row" class="even"><td style="display: none;" class="sorting_1" tabindex="0" nowrap="nowrap"><span class="new badge orange left" data-badge-caption=" ">ABER</span></td><td style="display: none;" nowrap="nowrap">15/05/2018</td><td nowrap="nowrap">Aluguel Sede</td><td nowrap="nowrap">R$1.200,00</td><td nowrap="nowrap" style="display: none;">R$1.200,00</td><td style="display: none;" nowrap="nowrap">Dinheiro</td><td style="display: none;" nowrap="nowrap">01/01</td><td nowrap="nowrap">Allan Rogge</td><td nowrap="nowrap"><input type="hidden" class="rowRecordId" value="27c278a3-ca33-4205-9b4e-c88c73b091e0"><a class="fly01-dt-menu right dropdown-button" href="javascript:void(0)" data-activates="dropdown9"><i class="material-icons">more_vert</i></a><ul id="dropdown9" class="dropdown-content"><li><a href="javascript:void(0)" onclick="fnEditar('27c278a3-ca33-4205-9b4e-c88c73b091e0')">Editar</a></li><li><a href="javascript:void(0)" onclick="fnVisualizar('27c278a3-ca33-4205-9b4e-c88c73b091e0')">Visualizar</a></li><li><a href="javascript:void(0)" onclick="fnExcluir('27c278a3-ca33-4205-9b4e-c88c73b091e0')">Excluir</a></li><li><a href="javascript:void(0)" onclick="fnNovaBaixa('27c278a3-ca33-4205-9b4e-c88c73b091e0')">Nova baixa</a></li></ul></td></tr></tbody></table><div class=""><div class="dataTables_info" id="fly01dt_info" role="status" aria-live="polite"></div><div class="dataTables_paginate paging_simple_numbers" id="fly01dt_paginate"><a class="paginate_button previous disabled" aria-controls="fly01dt" data-dt-idx="0" tabindex="0" id="fly01dt_previous">Anterior</a><span><a class="paginate_button current" aria-controls="fly01dt" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="fly01dt" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="fly01dt" data-dt-idx="3" tabindex="0">3</a></span><a class="paginate_button next" aria-controls="fly01dt" data-dt-idx="4" tabindex="0" id="fly01dt_next">Pr�ximo</a></div></div></div></div></div>
@endsection