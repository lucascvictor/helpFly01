@extends('layouts.index')
@section('title', 'Help Fly01')
@section('content')
 <nav class="z-depth-1">
    <div class="nav-wrapper">
      <a href="#!" class="Módulos" style="margin-left:12%">Escolha seu Módulo</a>
      <ul class="right">
        <li><a href="{{ url('/compras') }}"><i class="material-icons left">shopping_cart</i>Fly01 Compras</a></li>
        <li><a href="{{ url('/estoque') }}"><i class="material-icons left">archive</i>Fly01 Estoque</a></li>
        <li><a href="{{ url('/faturamento') }}"><i class="material-icons left">insert_chart</i>Fly01 Faturamento</a></li>
        <li><a href="{{ url('/financeiro') }}"><i class="material-icons left">attach_money</i>Fly01 Financeiro</a></li>
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

<!-- BEGIN OF DROZ SCRIPT - POWERED BY AKTIENOW -->

        <!-- Inicio Opcional -->
        <script type="text/javascript">
        var prechat_inputs = [];
        prechat_inputs['name'] = 'Nome do Cliente';
        </script>
        <!-- Fim Opcional -->

        <script type="text/javascript">
        (function(d,r,o,z,a,k,t){
          a=d.getElementsByTagName('head')[0];
          k=d.createElement('script');k.async=1;
          t=(Math.floor(Math.random()*1000000)+1);
          k.src=r+'/'+o+'/droz.js?i='+z+'&u='+r+'&v='+t;
          a.appendChild(k);
        })(document,'https://chat-app.meudroz.com','v1','3e9ee6c5c4656822f19621bfbf8416972400751b');
        </script>
        <!-- END OF DROZ SCRIPT - POWERED BY AKTIENOW -->


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

