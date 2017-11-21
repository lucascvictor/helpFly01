@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')

<div>
    <div class="col-md-8" id="callout-navvar-js" style="margin-top: 50px;">

        <a href="{{ url('/produtos/rejeicoes') }}">
         <div class="alert alert-success opcao" role="alert">
           <p> Estou com problemas de rejeições </p>
         </div>
        </a>

        <a href="#">
         <div class="alert alert-success opcao" role="alert">
           <p> Quero verificar os manuais para emissão de notas</p>
         </div>
        </a>

        <a href="#">
         <div class="alert alert-success opcao" role="alert">
           <p> Quero conhecer o processo geral de emissão de notas </p>
         </div>
        </a>

    </div>
</div>



@endsection
