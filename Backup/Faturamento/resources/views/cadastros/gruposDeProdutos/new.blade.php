@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')

<main><div id="headTop" class="z-depth-0-half">
  <div class="container">
    <div class="row"><div class="col s12 fly01-main-header"><h4 class="thin inline-block">Dados do Grupo de Produto</h4>
      <ul class="right valign-wrapper fly01-buttons">
        <li><a id="cancel" class="btn " href="{{ url('/faturamento/cadastros/grupodeprodutos')}}">Cancelar</a></li>
        <li><a id="save" class="btn " onclick="fnSalvar();">Salvar</a></li></ul></div></div></div></div><div class="container"><div class="row"><form id="fly01frm" class="col s12" action="https://novofaturamento.fly01.com.br/GroupProduct/Create" method="post" novalidate="novalidate" data-vivaldi-spatnav-clickable="1"><input id="id" type="hidden" name="id"></input><div id="descriptionField" class="input-field col s12"><input id="description" type="text" name="description"></input><label class="truncate" for="description">Descrição</label></div></form></div></div>

@endsection
