@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')

<div>
    <div class="col-md-8" id="callout-navvar-js" style="margin-top: 50px; width: 80%;">

      <div class="card">
        <div class="card-content">
          <p>Selecione abaixo a sua dúvida relacionada à Produtos.</p>
        </div>
        <div class="card-tabs">
          <ul class="tabs tabs-fixed-width">
            <li class="tab"><a class="active" href="#rejeicoes">Rejeições</a></li>
            <li class="tab"><a href="#manuais">Manuais</a></li>
            <li class="tab"><a href="#processos">Processos</a></li>
          </ul>
        </div>
        <div class="card-content grey lighten-4">
          <div id="rejeicoes">
            <a href="{{ url('/produtos/rejeicoes') }}">
             <div class="alert alert-success opcao" role="alert">
               <p> Estou com problemas de rejeições </p>
             </div>
            </a>
          </div>
          <div id="manuais">
            <a href="#">
               <div class="alert alert-success opcao" role="alert">
                 <p> Quero verificar os manuais para emissão de notas</p>
               </div>
              </a>
          </div>
          <div id="processos">
            <a href="#">
             <div class="alert alert-success opcao" role="alert">
               <p> Quero conhecer o processo geral de emissão de notas </p>
             </div>
            </a>
          </div>
        </div>
      </div>
    </div>
</div>



@endsection
