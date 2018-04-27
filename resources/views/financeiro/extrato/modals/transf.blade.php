

<div id="fly01frmNovaTransf" class="modal modal-fixed-footer hide" style="z-index: 1017; display: block; opacity: 1; transform: scaleX(1); top: 10%;">
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
               <div class="picker" id="dataTransf_root" tabindex="0" aria-hidden="true">
               <input id="dataTransf" name="data" class="datepicker date picker__input" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="dataTransf_root" type="text"><label class="truncate" for="dataTransf">Data *</label>
            </div>
            <div id="valorTransfField" class="input-field col s12 m6"><input id="valorTransf" name="valor" class="currency" style="text-align: right;" type="text"><label class="truncate" for="valorTransf">Valor *</label></div>
            <div id="Field" class="input-field col s12"><small>* Campos obrigatórios</small></div>
         </form>
      </div>
   </div>
   <div class="modal-footer"><a class="modal-action btn-flat modal-close">Cancelar</a><a class="modal-action btn" onclick="fnSalvarNovaTransferencia()">Confirmar</a></div>
</div>

