@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')


  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
                {{ $resolucao[0]->resolucao }}
              </div>
    <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Voltar</a>
        </div>
      </div>


@endsection
