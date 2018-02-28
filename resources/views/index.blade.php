@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
<div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s8 fly01-main-header">
               <h4 class="thin inline-block">Index</h4>
               <ul class="right valign-wrapper fly01-buttons">
                  
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">

    <div class="areageral" style="heigth: 300px;">
         <div id="dfly01cardSaldo" class="col s8 m2 saldo_atual">
            <div class="card" id="fly01cardSaldo" data-color="orange">
               <div class="card-content white-text orange lighten-2">
                  <span class="card-title condensed">Titulo UOL</span>
                  <h5 class="center">Informação financeira</h5>
               </div>
               <div class="card-action right-align orange lighten-1"><a href="http://localhost:8000/financeiro/extrato" class="white-text ">Saiba mais</a></div>
            </div>
         </div>
         <div id="dfly01cardCP" class="col s8 m2" data-step="<h2>Descrição</h2> Um texto sugestivo para o conjunto de 'regras' do grupo tributário">
            <div class="card" id="fly01cardCP" data-color="red">
               <div class="card-content white-text red lighten-2">
                  <span class="card-title condensed">Titulo bolsa de valores</span>
                  <h5 class="center">Informação financeira</h5>
               </div>
               <div class="card-action right-align red lighten-1"><a href="http://localhost:8000/financeiro/contasapagar" class="white-text ">Saiba mais</a></div>
            </div>
         </div>
         <div id="dfly01cardCR" class="col s8 m2">
            <div class="card" id="fly01cardCR" data-color="green">
               <div class="card-content white-text green lighten-2">
                  <span class="card-title condensed">Titulo Sefaz</span>
                  <h5 class="center">Informação financeira</h5>
               </div>
               <div class="card-action right-align green lighten-1"><a href="http://localhost:8000/financeiro/contasareceber" class="white-text ">Saiba mais</a></div>
            </div>
         </div>
		 </div>



     
           
            
            <div class="video-container">
                <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
         


@endsection


@section('footer')

 <footer class="page-footer black">
       
       <div class="footer-copyright"> 
       <p> USD: {{ $valores['valores']['USD']['valor'] }} </p> &nbsp&nbsp
       <p> EUR: {{ $valores['valores']['EUR']['valor'] }} </p> &nbsp&nbsp
       <p> BTC: {{ $valores['valores']['BTC']['valor'] }} </p> &nbsp&nbsp
       </div>
</footer>

@endsection


