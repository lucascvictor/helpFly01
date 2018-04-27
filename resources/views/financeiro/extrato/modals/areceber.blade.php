

<div id="fly01frmNovoReceb" class="modal modal-fixed-footer hide" style="z-index: 1015; display: block; opacity: 1; transform: scaleX(1); top: 10%;">
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
               <div class="picker" id="dataReceb_root" tabindex="0" aria-hidden="true">
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

