@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
   <div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block fly01-main-title">Importar clientes</h4>
               <ul class="right valign-wrapper fly01-buttons">
                  <li><a id="cancel" class="btn " onclick="fnCancelar();">Voltar</a></li>
                  <li><a id="save" class="btn " href="{{ url('/cadastros/clientes/import') }}">Importar</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <form id="fly01frm" class="col s12" action="/Cliente/ImportaCadastro" method="post" novalidate="novalidate" data-vivaldi-spatnav-clickable="1">
            <div id="arquivoField" class="input-field file-field col s12">
               <div class="btn btn-narrow"><i class="material-icons">file_upload</i><input id="arquivo" type="file" name="arquivo" accept=".csv"></div>
               <div class="file-path-wrapper"><input class="file-path validate" type="text"></div>
               <label class="truncate active" for="arquivo">Arquivo de importação em lotes (.csv) *</label>
            </div>
            <div id="observacaoField" class="input-field col s12" style="display: none;"><textarea id="observacao" name="observacao" class="materialize-textarea" readonly="readonly"></textarea><label class="truncate" for="observacao">Observação</label></div>
            <div id="Field" class="input-field col s12"><small>* Campos obrigatórios</small></div>
         </form>
         <div id="dcardDuvidas" class="col s12">
            <div class="card" id="cardDuvidas" data-color="blue">
               <div class="card-content white-text blue lighten-2">
                  <span class="card-title condensed">Dúvidas</span>
                  <h5 class="center" style="text-align: left;">Se preferir você pode baixar um arquivo modelo de importação.<br><br>Dicas:<br>Você deve editar o modelo com o Notepad++ ou com o bloco de notas.<br>Os dados contidos no arquivo são apenas exemplos, é preciso alterar o preenchimento com informações válidas.<br></h5>
               </div>
               <div class="card-action right-align blue lighten-1"><a href="javascript:void(0)" class="white-text " data-vivaldi-spatnav-clickable="1">Baixar arquivo modelo</a></div>
            </div>
         </div>
      </div>
   </div>

@endsection