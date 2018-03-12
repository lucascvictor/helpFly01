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
            <div class="input-field col s12 m6">
                <div class="select-wrapper">
                    <span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-6adfb441-7e09-3924-9c82-9f3db1fc713f" value="Choose your option">
                    <ul id="select-options-6adfb441-7e09-3924-9c82-9f3db1fc713f" class="dropdown-content select-dropdown" style="width: 268.969px; position: absolute; top: 0px; left: 0px; display: none; opacity: 1;">
                        <li class="disabled"><span>Choose your option</span></li>
                        <li class=""><span>Option 1</span></li>
                        <li class=""><span>Option 2</span></li>
                        <li class=""><span>Option 3</span></li>
                    </ul>
                    <select data-select-id="6adfb441-7e09-3924-9c82-9f3db1fc713f" class="initialized">
                        <option value="" disabled="" selected="">Choose your option</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>
                <label>Materialize Select</label>
            </div>
        </div>  
    </form>
</div>
@endsection