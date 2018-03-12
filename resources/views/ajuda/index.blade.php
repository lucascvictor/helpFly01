@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
<div class="row">
    <form class= "col s12">
        <div class="row">
            <div class="input-field col s4">
            <input placeholder="Digite seu nome" id="first_name" type="text" class="validate">
            <label for="first_name" class="active">Nome Completo</label>        
</div>
<div class="input-field col s4">
<input placeholder="Nome de sua empresa" id="empresa_nome" type="text" class="validate">
<label for="empresa_nome" class="active">Razão Social </label>
</div>
<div class="input-field col s4">
<input placeholder="CPF / CNPJ" id="empresa_nome" type="text" class="validate">
<label for="empresa_nome" class="active">CPF / CNPJ</label>
</div>
</div>
<div class="row">
<div class="input-field col s4">
<input placeholder="Digite seu e-mail" id="email" type="email" class="validate">
<label for="email" class="active">E-mail</label>
</div>
<div class="input-field col s4">
<input placeholder="Digite seu telefone" id="email" type="text">
<label for="email" class="active">Telefone</label>
</div>
<div class="input-field col s4 m4">
<div class="select-wrapper">
<span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-6adfb441-7e09-3924-9c82-9f3db1fc713f" value="Escolha o modulo">
<ul id="select-options-6adfb441-7e09-3924-9c82-9f3db1fc713f" class="dropdown-content select-dropdown" style="width: 268.969px; position: absolute; top: 0px; left: 0px; display: none; opacity: 1;">
<li class="disabled"><span>Escolha o Modulo</span></li>
<li class=""><span>Dúvida Geral</span></li>
<li class=""><span>Fly01 Compras</span></li>
<li class=""><span>Fly01 Estoque</span></li>
<li class=""><span>Fly01 Faturamento</span></li>
<li class=""><span>Fly01 Financeiro</span></li>
</ul>
<select data-select-id="6adfb441-7e09-3924-9c82-9f3db1fc713f" class="initialized">
<option value="" disabled="" selected="">Escolha o modulo</option>
<option value="1">Dúvida Geral</option>
<option value="2">Fly01 Compras</option>
<option value="3">Fly01 Estoque</option>
<option value="4">Fly01 Faturamento</option>
<option value="5">Fly01 Financeiro</option>
</select>
</div>
<label>Duvida sobre</label>
</div>
<div class="row">
<div class="input-field col s12">
<input id="assunto" type="text" class="validate">
<label for="assunto" class="active">Assunto</label>
</div>
<div class="row">
<form class="col s12">
<div class="row">
<div class="input-field col s12">
<textarea id="textarea1" class="materialize-textarea"></textarea>
<label for="textarea1">Textarea</label>
</div>
</div>
</form>
</div>
</div>  
<form action="#">
<div class="file-field input-field">
<div class="btn">
<span>File</span>
<input type="file" multiple>
</div>
<div class="file-path-wrapper">
<input class="file-path validate" type="text" placeholder="Upload one or more files">
</div>
</div>
</form>
</form>
</div>
@endsection