@extends('layouts.index')
@section('title', 'Help Fly01')
@section('content')
 <nav class="z-depth-1">
    <div class="nav-wrapper">
      <a href="#!" class="Módulos" style="margin-left:2%">Escolha seu Módulo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html"><i class="material-icons left">shopping_cart</i>Fly01 Compras</a></li>
        <li><a href="badges.html"><i class="material-icons left">archive</i>Fly01 Estoque</a></li>
        <li><a href="badges.html"><i class="material-icons left">insert_chart</i>Fly01 Faturamento</a></li>
        <li><a href="badges.html"><i class="material-icons left">attach_money</i>Fly01 Financeiro</a></li>
      </ul>
    </div>
  </nav>

<div class="container" style="margin-top:5%;">      
   <div class="row">
      <div class="col s4 offset-s8 m3 offset-m9">
         <div class="video-container">
            <iframe width="853" height="480" src="https://www.youtube.com/embed/KuxLypSoIWo" frameborder="0" allowfullscreen></iframe>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col s4 offset-s8 m3 offset-m9">
         <div class="video-container">
            <iframe width="853" height="480" src="https://www.youtube.com/embed/KuxLypSoIWo" frameborder="0" allowfullscreen></iframe>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col s4 offset-s8 m3 offset-m9">
         <div class="video-container">
            <iframe width="853" height="480" src="https://www.youtube.com/embed/KuxLypSoIWo" frameborder="0" allowfullscreen></iframe>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col s4 offset-s8 m3 offset-m9">
         <div class="video-container">
            <iframe width="853" height="480" src="https://www.youtube.com/embed/KuxLypSoIWo" frameborder="0" allowfullscreen></iframe>
         </div>
      </div>
   </div>
</div>
</div>
@endsection


@section('footer')
<footer class="page-footer black">
   <div class="footer-copyright">
      <p> USD: {{ $valores['valores']['USD']['valor'] }} </p>
      &nbsp&nbsp
      <p> EUR: {{ $valores['valores']['EUR']['valor'] }} </p>
      &nbsp&nbsp
      <p> BTC: {{ $valores['valores']['BTC']['valor'] }} </p>
      &nbsp&nbsp
   </div>
</footer>
@endsection

