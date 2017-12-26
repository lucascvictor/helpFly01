@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')


<div class="col-md-8" id="callout-navvar-js" style="margin-top: 50px; width: 80%;">

       <table class="display striped responsive nowrap dataTable no-footer dtr-inline table">
       <thead class="thead-dark">
         <tr>
           <th scope="col">Código da rejeição</th>
           <th scope="col">Descrição</th>
         </tr>
       </thead>
       <tbody>
<?php
$i = 1;
?>
@foreach($rejeicoes as $rejeicao)
         <tr class="h-table">
             <td><a class="waves-effect waves-light modal-trigger" href="#modal{{$i}}">{{ $rejeicao->n_rejeicao }}</a></td>
             <td><a class="waves-effect waves-light modal-trigger" href="#modal{{$i}}">{{ $rejeicao->titulo }}</a></td>
         </tr>

           <!-- Modal Structure -->
           <div id="modal{{$i}}" class="modal modal-fixed-footer">
             <div class="modal-content">
               {{ $rejeicao->resolucao }}
            </div>
             <div class="modal-footer">
                   <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Voltar</a>
                 </div>
               </div>
<?php $i++; ?>
@endforeach

       </tbody>
     </table>
</div>


@endsection

@section('extrascript')
<script type="text/javascript">
$(document).ready(function(){
  // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
  $('.modal').modal();
  $('.modal').modal('open');
  $('.modal').modal('close');
});

</script>

@endsection
