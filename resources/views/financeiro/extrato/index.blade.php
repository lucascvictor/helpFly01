@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')

   <div id="headTop" class="z-depth-0-half pinned">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block fly01-main-title">Extrato</h4>
               <ul class="right valign-wrapper fly01-buttons">
                  <li><a id="save" class="btn " onclick="atualizar();">Atualizar</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <form id="fly01frm" class="col s12" method="post" novalidate="novalidate">
            <input id="contaBancariaId" name="contaBancariaId" type="hidden">
            <div id="dataInicialField" class="input-field col s6 m3 l4">
               <a href="javascript:void(0)" class="" onclick="fly01._.dataInicial.open(event)"><i class="material-icons picking">date_range</i></a>
               <input id="dataInicial" name="dataInicial" class="datepicker date picker__input" value="01/04/2018" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataInicial_root" type="text"><label class="truncate active" for="dataInicial">Data Inicial</label>
            </div>
            <div id="dataFinalField" class="input-field col s6 m3 l4">
               <a href="javascript:void(0)" class="" onclick="fly01._.dataFinal.open(event)"><i class="material-icons picking">date_range</i></a>
               <input id="dataFinal" name="dataFinal" class="datepicker date picker__input" value="05/04/2018" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataFinal_root" type="text"><label class="truncate active" for="dataFinal">Data Final</label>
            </div>
            <div id="fly01btngrpField" class="input-field col s12 m6 l4">
               <label class="truncate active" for="fly01btngrp">Selecione o período</label>
               <div id="fly01btngrp" class="btn-group input-field"><input id="btnDia" name="btnDia" class="btn col s4 " onclick="fnAtualizarPeriodo(&quot;0&quot;)" value="Dia" type="button"><input id="btnSemana" name="btnSemana" class="btn col s4 " onclick="fnAtualizarPeriodo(&quot;6&quot;)" value="Semana" type="button"><input id="btnMes" name="btnMes" class="btn col s4 active" onclick="fnAtualizarPeriodo(&quot;30&quot;)" value="Mês" type="button"></div>
            </div>
         </form>
         <div id="contasBancariasList_wrapper" class="col s12 m12 l4 DTS">
            <div class=""></div>
            <div id="contasBancariasList_processing" class="dataTables_processing" style="display: none;"></div>
            <div class="dataTables_scroll">
               <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px none; width: 100%;">
                  <div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 381.983px; padding-right: 13px;">
                     <table class="display striped responsive nowrap dataTable" role="grid" style="margin-left: 0px; width: 381.983px;" width="100%">
                        <thead>
                           <tr id="columns" role="row">
                              <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 381.983px;"><span>Contas Bancárias - Saldo Atual</span></th>
                           </tr>
                        </thead>
                     </table>
                  </div>
               </div>
               <div class="dataTables_scrollBody" style="position: relative; overflow: auto; height: 300px; width: 100%;">
                  <table class="display striped responsive nowrap dataTable dtr-inline" id="contasBancariasList" role="grid" aria-describedby="contasBancariasList_info" style="width: 100%; position: absolute; top: 0px; left: 0px;" width="100%">
                     <thead>
                        <tr id="columns" role="row" style="height: 0px;">
                           <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 381.983px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                              <div class="dataTables_sizing" style="height:0;overflow:hidden;"><span>Contas Bancárias - Saldo Atual</span></div>
                           </th>
                        </tr>
                     </thead>
                     <tfoot>
                        <tr style="height: 0px;">
                           <th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 381.983px;">
                              <div class="dataTables_sizing" style="height:0;overflow:hidden;"></div>
                           </th>
                        </tr>
                     </tfoot>
                     <tbody>
                     <tr role="row" class="odd">
                           <td tabindex="0" nowrap="nowrap">
                              <div class="tooltipped" data-position="top" data-tooltip="Representação: 100%" data-conta-id="">
                                 <span class="left">Todas as contas</span><strong class="right green-text">R$ resultado da soma</strong>
                                 <div class="progress">
                                    <div class="determinate" style="width: 100%"></div>
                                 </div>
                              </div>
                           </td>
                        </tr>
                     @foreach($banks as $bank)
                        <tr role="row" class="odd">
                           <td tabindex="0" nowrap="nowrap">
                              <div class="tooltipped" data-position="top" data-tooltip="Representação: 100%" data-conta-id="">
                                 <span class="left">{{ $bank->nomeConta }}</span><strong class="right green-text">
                                 <?php $totalToReceive = 0; $totalToPay = 0; $totalBank = 0; ?>
                                 @foreach($billsToReceive as $billToReceive)
                                 <?php 
                                 if ($billToReceive->bank == $bank->id) {
                                    $totalToReceive += $billToReceive->value;
                                 }
                                 ?>
                                 @endforeach
                                 @foreach($billsToPay as $billToPay)
                                 <?php 
                                 if ($billToPay->bank == $bank->id) {
                                    $totalToPay += $billToPay->value;
                                 }
                                 ?>
                                 @endforeach
                                 <?php $totalBank = $totalToReceive - $totalToPay;?>
                                 R${{ $totalBank }}
                                 </strong>
                                 <div class="progress">
                                    <div class="determinate" style="width: 100%"></div>
                                 </div>
                              </div>
                           </td>
                        </tr>
                     @endforeach
                     </tbody>
                  </table>
                  <div style="position: relative; top: 0px; left: 0px; width: 1px; height: 458.5px;"></div>
               </div>
               <div class="dataTables_scrollFoot" style="overflow: hidden; border: 0px none; width: 100%;">
                  <div class="dataTables_scrollFootInner" style="width: 381.983px; padding-right: 13px;">
                     <table class="display striped responsive nowrap dataTable" role="grid" style="margin-left: 0px; width: 381.983px;" width="100%">
                        <tfoot>
                           <tr>
                              <th rowspan="1" colspan="1" style="width: 381.983px;"></th>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
               </div>
            </div>
            <div class="">
               <div class="dataTables_info" id="contasBancariasList_info" role="status" aria-live="polite" style="display: none;"></div>
               <div class="dataTables_paginate paging_simple_numbers" id="contasBancariasList_paginate" style="display: none;"><a class="paginate_button previous disabled" aria-controls="contasBancariasList" data-dt-idx="0" tabindex="0" id="contasBancariasList_previous">&lt;</a><span><a class="paginate_button current" aria-controls="contasBancariasList" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="contasBancariasList" data-dt-idx="2" tabindex="0" id="contasBancariasList_next">&gt;</a></div>
            </div>
         </div>
         <div id="dfly01chart" class="col s12 m12 l8">
            <div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor">
               <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                  <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
               </div>
               <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                  <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
               </div>
            </div>
            <h6></h6>
            <canvas id="fly01chart" style="display: block; width: 813px; height: 406px;" width="813" height="406" class="chartjs-render-monitor"></canvas>
         </div>
         <form id="fly01frm" class="col s12" method="post">
            <div id="btnNovoPagamentoField" class="input-field col s12 m4 l4"><input id="btnNovoPagamento" name="btnNovoPagamento" style="color:#FFF;" class="btn modal-trigger green" value="Novo pagamento" type="button" data-target="fly01frmNovoPgt"></div>
            <div id="btnNovoRecebimentoField" class="input-field col s12 m4 l4"><input id="btnNovoRecebimento" name="btnNovoRecebimento" style="color:#FFF;" class="btn modal-trigger green" value="Novo recebimento" type="button" data-target="fly01frmNovoReceb"></div>
            <div id="btnNovaTransferenciaField" class="input-field col s12 m4 l4"><input id="btnNovaTransferencia" name="btnNovaTransferencia" style="color:#FFF;" class="btn modal-trigger green" value="Nova transferência" type="button" data-target="fly01frmNovaTransf"></div>
         </form>
         <div id="dtExtratoDetalhe_wrapper" class="col s12">
            <div class=""></div>
            <div id="dtExtratoDetalhe_processing" class="dataTables_processing" style="display: none;"></div>
            <table class="display striped responsive nowrap dataTable dtr-inline" id="dtExtratoDetalhe" role="grid" aria-describedby="dtExtratoDetalhe_info" style="width: 100%;" width="100%">
               <thead>
                  <tr id="columns" role="row">
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 138px;"><span>Data</span></th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 356px;"><span>Lançamento</span></th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 259px;"><span>Cliente/Fornecedor</span></th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 280px;"><span>Conta Bancária</span></th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 145px;"><span>Valor</span></th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 6px;"><span></span></th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                  </tr>
               </tfoot>
               <tbody>
               @foreach($billsToReceive as $billToReceive)
                  <tr role="row" class="odd">
                     <td tabindex="0" nowrap="nowrap">{{ $billToReceive->duedate }}</td>
                     <td nowrap="nowrap">{{ $billToReceive->description }}</td>
                     <td nowrap="nowrap">{{ $billToReceive->name }}</td>
                     <td nowrap="nowrap">{{ $billToReceive->bancoNome }}</td>
                     <td nowrap="nowrap">R${{ $billToReceive->value }}</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="undefined" type="hidden"></td>
                  </tr>
                @endforeach
                
                @foreach($billsToPay as $billToPay)
                  <tr role="row" class="odd">
                     <td tabindex="0" nowrap="nowrap">{{ $billToPay->duedate }}</td>
                     <td nowrap="nowrap">{{ $billToPay->description }}</td>
                     <td nowrap="nowrap">{{ $billToPay->name }}</td>
                     <td nowrap="nowrap">{{ $billToPay->bancoNome }}</td>
                     <td nowrap="nowrap">-R${{ $billToPay->value }}</td>
                     <td nowrap="nowrap"><input class="rowRecordId" value="undefined" type="hidden"></td>
                  </tr>
                @endforeach
               </tbody>
            </table>
            <div class="">
               <div class="dataTables_info" id="dtExtratoDetalhe_info" role="status" aria-live="polite"></div>
               <div class="dataTables_paginate paging_simple_numbers" id="dtExtratoDetalhe_paginate" style="display: none;"><a class="paginate_button previous disabled" aria-controls="dtExtratoDetalhe" data-dt-idx="0" tabindex="0" id="dtExtratoDetalhe_previous">&lt;</a><span><a class="paginate_button current" aria-controls="dtExtratoDetalhe" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="dtExtratoDetalhe" data-dt-idx="2" tabindex="0" id="dtExtratoDetalhe_next">&gt;</a></div>
            </div>
         </div>
      </div>
   </div>
   <div id="fly01frmNovoReceb" class="modal modal-fixed-footer" style="z-index: 1005; display: none; opacity: 0; transform: scaleX(0.7); top: 4%;">
      <div class="modal-header">
         <h5>Novo Recebimento</h5>
      </div>
      <div class="modal-content">
         <div class="row">
            <form id="fly01frmNovoReceb" class="col s12" method="post" novalidate="novalidate">
               <div id="contaBancariaDestinoIdRecebField" class="input-field col s12"><input class="autocomplete ui-autocomplete-input" id="contaBancariaDestinoNomeContaReceb" name="contaBancariaDestinoNomeConta" data-url="/AutoComplete/ContaBancariaBanco" data-url-post-modal="/ContaBancaria/FormModal" data-post-field="nomeConta" data-target="contaBancariaDestinoIdReceb" autocomplete="off" type="text"><input name="contaBancariaDestinoId" id="contaBancariaDestinoIdReceb" type="hidden"><label class="truncate" for="contaBancariaDestinoNomeContaReceb">Conta Bancária *</label></div>
               <div id="categoriaIdRecebField" class="input-field col s12"><input class="autocomplete ui-autocomplete-input" id="categoriaReceb" name="categoriaDescricao" data-url="/AutoComplete/CategoriaCR" data-url-post="/Extrato/NovaCategoriaReceita" data-target="categoriaIdReceb" autocomplete="off" type="text"><input name="categoriaId" id="categoriaIdReceb" type="hidden"><label class="truncate" for="categoriaReceb">Categoria *</label></div>
               <div id="dataRecebField" class="input-field col s12 m6">
                  <a href="javascript:void(0)" class="" onclick="fly01._.dataReceb.open(event)"><i class="material-icons picking">date_range</i></a>
                  <input id="dataReceb" name="data" class="datepicker date picker__input" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataReceb_root" type="text"><label class="truncate" for="dataReceb">Data *</label>
               </div>
               <div id="valorRecebField" class="input-field col s12 m6"><input id="valorReceb" name="valor" class="currency" style="text-align: right;" type="text"><label class="truncate" for="valorReceb">Valor *</label></div>
               <div id="descricaoRecebField" class="input-field col s12"><textarea id="descricaoReceb" name="descricao" class="materialize-textarea"></textarea><label class="truncate" for="descricaoReceb">Descrição *</label></div>
               <div id="Field" class="input-field col s12"><small>* Campos obrigatórios</small></div>
            </form>
         </div>
      </div>
      <div class="modal-footer"><a class="modal-action btn-flat modal-close">Cancelar</a><a class="modal-action btn" onclick="fnSalvarNovoRecebimento()">Confirmar</a></div>
   </div>
   <div id="fly01frmNovaTransf" class="modal modal-fixed-footer" style="z-index: 1009; display: none; opacity: 0; transform: scaleX(0.7); top: 4%;">
      <div class="modal-header">
         <h5>Nova Transferência</h5>
      </div>
      <div class="modal-content">
         <div class="row">
            <form id="fly01frmNovaTransf" class="col s12" method="post" novalidate="novalidate">
               <input id="descricaoDestino" name="descricaoDestino" type="hidden"><input id="descricao" name="descricao" type="hidden">
               <div id="contaBancariaOrigemIdTransfField" class="input-field col s12 m6"><input class="autocomplete ui-autocomplete-input" id="contaBancariaOrigemNomeContaTransf" name="contaBancariaOrigemNomeConta" data-url="/AutoComplete/ContaBancariaBanco" data-url-post-modal="/ContaBancaria/FormModal" data-post-field="nomeConta" data-target="contaBancariaOrigemIdTransf" autocomplete="off" type="text"><input name="contaBancariaOrigemId" id="contaBancariaOrigemIdTransf" type="hidden"><label class="truncate" for="contaBancariaOrigemNomeContaTransf">Conta Bancária Origem *</label></div>
               <div id="contaBancariaDestinoIdTransfField" class="input-field col s12 m6"><input class="autocomplete ui-autocomplete-input" id="contaBancariaDestinoNomeContaTransf" name="contaBancariaDestinoNomeConta" data-url="/AutoComplete/ContaBancariaBanco" data-url-post-modal="/ContaBancaria/FormModal" data-post-field="nomeConta" data-target="contaBancariaDestinoIdTransf" autocomplete="off" type="text"><input name="contaBancariaDestinoId" id="contaBancariaDestinoIdTransf" type="hidden"><label class="truncate" for="contaBancariaDestinoNomeContaTransf">Conta Bancária Destino *</label></div>
               <div id="categoriaIdTransfField" class="input-field col s12 m6"><input class="autocomplete ui-autocomplete-input" id="categoriaDescricaoTransf" name="categoriaDescricao" data-url="/AutoComplete/CategoriaCP" data-url-post="/Extrato/NovaCategoriaDespesa" data-target="categoriaIdTransf" autocomplete="off" type="text"><input name="categoriaId" id="categoriaIdTransf" type="hidden"><label class="truncate" for="categoriaDescricaoTransf">Categoria Origem *</label></div>
               <div id="categoriaDestinoIdTransfField" class="input-field col s12 m6"><input class="autocomplete ui-autocomplete-input" id="categoriaDestinoDescricaoTransf" name="categoriaDestinoDescricao" data-url="/AutoComplete/CategoriaCR" data-url-post="/Extrato/NovaCategoriaReceita" data-target="categoriaDestinoIdTransf" autocomplete="off" type="text"><input name="categoriaDestinoId" id="categoriaDestinoIdTransf" type="hidden"><label class="truncate" for="categoriaDestinoDescricaoTransf">Categoria Destino *</label></div>
               <div id="dataTransfField" class="input-field col s12 m6">
                  <a href="javascript:void(0)" class="" onclick="fly01._.dataTransf.open(event)"><i class="material-icons picking">date_range</i></a>
                 
                  <input id="dataTransf" name="data" class="datepicker date picker__input" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataTransf_root" type="text"><label class="truncate" for="dataTransf">Data *</label>
               </div>
               <div id="valorTransfField" class="input-field col s12 m6"><input id="valorTransf" name="valor" class="currency" style="text-align: right;" type="text"><label class="truncate" for="valorTransf">Valor *</label></div>
               <div id="Field" class="input-field col s12"><small>* Campos obrigatórios</small></div>
            </form>
         </div>
      </div>
      <div class="modal-footer"><a class="modal-action btn-flat modal-close">Cancelar</a><a class="modal-action btn" onclick="fnSalvarNovaTransferencia()">Confirmar</a></div>
   </div>
   <div id="fly01frmNovoPgt" class="modal modal-fixed-footer" style="z-index: 1011; display: none; opacity: 0; transform: scaleX(0.7); top: 4%;">
      <div class="modal-header">
         <h5>Novo Pagamento</h5>
      </div>
      <div class="modal-content">
         <div class="row">
            <form id="fly01frmNovoPgt" class="col s12" method="post" novalidate="novalidate">
               <div id="contaBancariaOrigemIdPgtoField" class="input-field col s12"><input class="autocomplete ui-autocomplete-input" id="contaBancariaOrigemNomeContaPgto" name="contaBancariaOrigemNomeConta" data-url="/AutoComplete/ContaBancariaBanco" data-url-post-modal="/ContaBancaria/FormModal" data-post-field="nomeConta" data-target="contaBancariaOrigemIdPgto" autocomplete="off" type="text"><input name="contaBancariaOrigemId" id="contaBancariaOrigemIdPgto" type="hidden"><label class="truncate" for="contaBancariaOrigemNomeContaPgto">Conta Bancária *</label></div>
               <div id="categoriaIdPgtoField" class="input-field col s12"><input class="autocomplete ui-autocomplete-input" id="categoriaPgto" name="categoriaDescricao" data-url="/AutoComplete/CategoriaCP" data-url-post="/Extrato/NovaCategoriaDespesa" data-target="categoriaIdPgto" autocomplete="off" type="text"><input name="categoriaId" id="categoriaIdPgto" type="hidden"><label class="truncate" for="categoriaPgto">Categoria *</label></div>
               <div id="dataPgtoField" class="input-field col s12 m6">
                  <a href="javascript:void(0)" class="" onclick="fly01._.dataPgto.open(event)"><i class="material-icons picking">date_range</i></a>
                  
                  <input id="dataPgto" name="data" class="datepicker date picker__input" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataPgto_root" type="text"><label class="truncate" for="dataPgto">Data *</label>
               </div>
               <div id="valorPgtoField" class="input-field col s12 m6"><input id="valorPgto" name="valor" class="currency" style="text-align: right;" type="text"><label class="truncate" for="valorPgto">Valor *</label></div>
               <div id="descricaoPgtoField" class="input-field col s12"><textarea id="descricaoPgto" name="descricao" class="materialize-textarea"></textarea><label class="truncate" for="descricaoPgto">Descrição *</label></div>
               <div id="Field" class="input-field col s12"><small>* Campos obrigatórios</small></div>
            </form>
         </div>
      </div>
      <div class="modal-footer"><a class="modal-action btn-flat modal-close">Cancelar</a><a class="modal-action btn" onclick="fnSalvarNovoPagamento()">Confirmar</a></div>
   </div>

    @include('financeiro.extrato.modals.index')

    @include('financeiro.extrato.modals.apagar')

    @include('financeiro.extrato.modals.areceber')

    @include('financeiro.extrato.modals.transf')


@endsection

@section('extrascript')

	@include('financeiro.extrato.datachart')

	@include('financeiro.extrato.tour')

    <script>

        $(document).ready(function(){
            $('.modal').modal();
            document.getElementById("modalIndex").click();
        });

    </script>

@endsection


