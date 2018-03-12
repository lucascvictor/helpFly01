@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
<div class="row">
    <form class= "col s12">
        <div class="row">
            <div class="input-field col s6">
                <input placeholder="Digite seu nome" id="first_name" type="text" class="validate">
                <label for="first_name" class="active">Nome Completo</label>
              </div>
              <div class="input-field col s6">
                <input placeholder="Nome de sua empresa" id="empresa_nome" type="text" class="validate">
                <label for="empresa_nome" class="active">Razão Social </label>
              </div> 
        </div>      
        <div class="row">
            <div class="input-field col s6">
                <input placeholder="Digite seu e-mail" id="email" type="email" class="validate">
                <label for="email" class="active">E-mail</label>
              </div>
        </div>  
    </form>
</div>
@endsection