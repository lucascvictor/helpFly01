@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
   <div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block fly01-main-title">Certificado Digital A1</h4>
               <ul class="right valign-wrapper fly01-buttons">
                  <li><a id="save" class="btn " onclick="fnAtualizaCertificado();">Atualizar Certificado</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <form id="fly01frm" class="col s12" action="/CertificadoDigital/Create" method="post" novalidate="novalidate" data-vivaldi-spatnav-clickable="1">
            <input id="id" type="hidden" name="id">
            <div id="certificadoField" class="input-field file-field col s12 m6">
               <div class="btn btn-narrow"><i class="material-icons">file_upload</i><input id="certificado" type="file" name="certificado" accept=".pfx"></div>
               <div class="file-path-wrapper"><input class="file-path validate" type="text"></div>
               <label class="truncate active" for="certificado">Arquivo do Certificado Digital (.pfx) *</label>
            </div>
            <div id="senhaField" class="input-field col s12 m6"><input id="senha" type="password" name="senha"><label class="truncate" for="senha">Senha do Certificado *</label></div>
            <div id="Field" class="input-field col s12"><small>* Campos obrigatórios</small></div>
         </form>
         <div id="dcardCertificado" class="col s12">
            <div class="card" id="cardCertificado" data-color="black">
               <div class="card-content white-text lighten-2 blue">
                  <span class="card-title condensed"></span>
                  <h5 class="center">
                     <h5>O CNPJ não possui certificado digital cadastrado.</h5>
                     <small>Envie o arquivo e informe a senha de um certificado digital válido.</small>
                  </h5>
               </div>
               <div class="card-action right-align lighten-1 blue"><a href="javascript:void(0)" class="white-text "></a></div>
            </div>
         </div>
      </div>
   </div>
@endsection