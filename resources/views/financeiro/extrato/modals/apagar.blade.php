

<div id="fly01frmNovoPgt" class="modal modal-fixed-footer hide" style="z-index: 1013; display: block; opacity: 1; transform: scaleX(1); top: 10%;">
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
               <div class="picker" id="dataPgto_root" tabindex="0" aria-hidden="true">                  
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

