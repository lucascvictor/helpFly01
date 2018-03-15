@extends('layouts.default')
@section('title', 'Help Fly01')


@section('content')
  
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div id="color-usage" class="section scrollspy">
                <h2 class="header center-align">Rotina Cadastro de Fornecedores</h2>
                
                <div class="card-panel teal amber accent-2 app"><p class="center-align">Esta é a tela inicial da rotina, nela é possível ver os fornecedores já cadastrados no sistema, também é possível pesquisar por eles</p></div>

                <img class="responsive-img" src="{{ url('images/cadastros/fornecedores/Tela2.gif') }}">

                 
                 <div class="card-panel teal amber accent-2 app">Para editar um forncedor já cadastrado, basta enontrar o mesmo, ir na janela de ações e clicar em "Editar"</div>

                <img class="responsive-img" src="{{ url('images/cadastros/fornecedores/Tela3.png') }}">
</div></div></div></div></div>
@endsection
