@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
<div class="col s12 m12 l6">
    <div class="card-panel">
        <h4 class="header2">Entre em contato e abra um chamado</h4>
        <div class="row">
        <form class="col s12">
            <div class="row">
            <div class="input-field col s12">
                <i class="mdi-action-account-circle prefix"></i>
                <input id="name4" type="text" class="validate">
                <label for="first_name">Nome</label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
                <i class="mdi-communication-email prefix"></i>
                <input id="email4" type="email" class="validate">
                <label for="email">Email</label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
                <i class="mdi-action-question-answer prefix"></i>
                <textarea id="message4" class="materialize-textarea validate" length="120"></textarea>
                <label for="message">Mensagem</label>
            <span class="character-counter" style="float: right; font-size: 12px; height: 1px;"></span></div>
            <div class="row">
                <div class="input-field col s12">
                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Enviar
                    <i class="mdi-content-send right"></i>
                </button>
                </div>
            </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection