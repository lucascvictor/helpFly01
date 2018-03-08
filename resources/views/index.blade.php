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
<div class="card orange accent-3">

   <div class="s2 m2">
      <div class="card-content white-text">
         <p class="bounceEffect animated bounceIn">
            <span>texto sobre finanças<i class="material-icons">fingerprint</i></span>
         </p>
      </div>
   </div>
   <div class="s2 m2">
   
   <div class="card orange accent-3">
      <div class="card-content white-text">
         <p class="bounceEffect animated bounceIn">
            <iframe width="100%" height="20%" src="https://www.youtube.com/embed/KuxLypSoIWo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
         </p>
      </div>
   </div>
   </div>
</div>


<div class="col m2" style="width: 20%; heigth: 100%">

<ul id="slide-out" class="side-nav">
      <li>
      <div class="card orange accent-3">
         <div class="card-content white-text">
            <p class="bounceEffect animated bounceIn">
               <iframe width="100%" height="20%" src="https://www.youtube.com/embed/KuxLypSoIWo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </p>
         </div>
      </div>
      </li>
      <li>
      <div class="card orange accent-3">
         <div class="card-content white-text">
            <p class="bounceEffect animated bounceIn">
               <iframe width="100%" height="20%" src="https://www.youtube.com/embed/KuxLypSoIWo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </p>
         </div>
      </div>
      </li>
      <li>
      <div class="card orange accent-3">
         <div class="card-content white-text">
            <p class="bounceEffect animated bounceIn">
               <iframe width="100%" height="20%" src="https://www.youtube.com/embed/KuxLypSoIWo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </p>
         </div>
      </div>
      </li>
  </ul>

     
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