

@extends('layouts.index')
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
      <div id="dacc8b796-04a0-4f4f-b6a4-924d1ca4c27b" class="col s4 m2">
         <a href="javascript:void(0)" onclick="fly01.go(&quot;http://financeiro.fly01dev.com.br&quot;)">
            <div class="app" id="acc8b796-04a0-4f4f-b6a4-924d1ca4c27b" style="height: 10%;">
               <div class="app-content white-text" style="background:#c39d00;"><img class="app-icon loaded" src="https://cdnfly01.blob.core.windows.net/img/icon/financeiro.png" onload="$(this).addClass('loaded')"><span class="app-title center">Fly01 Financeiro</span></div>
            </div>
         </a>
      </div>
      <div id="d00ba2502-447e-4670-8885-b67d64496141" class="col s4 m2">
         <a href="javascript:void(0)" onclick="fly01.go(&quot;http://faturamento.fly01dev.com.br&quot;)">
            <div class="app" id="00ba2502-447e-4670-8885-b67d64496141">
               <div class="app-content white-text" style="background:#6f1200;"><img class="app-icon loaded" src="https://cdnfly01.blob.core.windows.net/img/icon/faturamento.png" onload="$(this).addClass('loaded')"><span class="app-title center">Fly01 Faturamento</span></div>
            </div>
         </a>
      </div>
      <div id="d65e3ba3e-6fcd-4527-b2a4-9dc37c80e285" class="col s4 m2">
         <a href="javascript:void(0)" onclick="fly01.go(&quot;http://compras.fly01dev.com.br&quot;)">
            <div class="app" id="65e3ba3e-6fcd-4527-b2a4-9dc37c80e285">
               <div class="app-content white-text" style="background:#bf311a;"><img class="app-icon loaded" src="https://cdnfly01.blob.core.windows.net/img/icon/compras.png" onload="$(this).addClass('loaded')"><span class="app-title center">Fly01 Compras</span></div>
            </div>
         </a>
      </div>
      <div id="df259ea8b-f966-4c4f-8b18-97fa4bf2af87" class="col s4 m2">
         <a href="javascript:void(0)" onclick="fly01.go(&quot;http://estoque.fly01dev.com.br&quot;)">
            <div class="app" id="f259ea8b-f966-4c4f-8b18-97fa4bf2af87">
               <div class="app-content white-text" style="background:#00b274;"><img class="app-icon loaded" src="https://cdnfly01.blob.core.windows.net/img/icon/estoque.png" onload="$(this).addClass('loaded')"><span class="app-title center">Fly01 Estoque</span></div>
            </div>
         </a>
      </div>
      <div class="col s4 m1">
      </div>
   </div>

   <div class="row">
      <div class="col s4 m9">
      </div>
      <div class="col s4 m3">
         <div class="video-container">
            <iframe width="853" height="480" src="https://www.youtube.com/embed/KuxLypSoIWo" frameborder="0" allowfullscreen></iframe>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col s4 m9">
      </div>
      <div class="col s4 m3">
         <div class="video-container">
            <iframe width="853" height="480" src="https://www.youtube.com/embed/KuxLypSoIWo" frameborder="0" allowfullscreen></iframe>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col s4 m9">
      </div>
      <div class="col s4 m3">
         <div class="video-container">
            <iframe width="853" height="480" src="https://www.youtube.com/embed/KuxLypSoIWo" frameborder="0" allowfullscreen></iframe>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col s4 m9">
      </div>
      <div class="col s4 m3">
         <div class="video-container">
            <iframe width="853" height="480" src="https://www.youtube.com/embed/KuxLypSoIWo" frameborder="0" allowfullscreen></iframe>
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

