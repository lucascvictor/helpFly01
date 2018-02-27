@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
<div id="headTop" class="z-depth-0-half pinned">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block" data-intro="Hello step one!">Solicitação de suporte</h4>
               <ul class="right valign-wrapper fly01-buttons">
                  <li><a id="todo-list" class="btn" onCLick="reload()">Enviar</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row fly01areatotal">

                <div class="card-panel">
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

                        </div>
                    </form>
                    </div>
                </div>

        </div>
    </div>
@endsection