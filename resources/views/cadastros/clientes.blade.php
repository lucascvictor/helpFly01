@extends('layouts.default')

@section('title', 'Help Fly01')

@section('extrascript')
<script type="text/javascript">
$(document).ready(function(){

$('.slider').slider();

$('.carousel.carousel-slider').carousel({fullWidth: true});
  // Next slide
$('.carousel').carousel('next');
$('.carousel').carousel('next', 3); // Move next n times.

// Previous slide
$('.carousel').carousel('prev');
$('.carousel').carousel('prev', 4); // Move prev n times.

// Set to nth slide
$('.carousel').carousel('set', 4);

// Destroy carousel
$('.carousel').carousel('destroy');

   });


</script>


@endsection

@section('content')
<style media="screen">
  img {
    max-width:100%;
    max-height:100%;
    width: auto;
    height: auto;
  }
  .slider {
    max-width: 100%;
    height: 1000px;
  }
</style>
<div class="row">

  <div class="slider">
    <ul class="slides">

<?php
$i = 1;

?>

@while($i <= 5)
<li>
  <img src="{{ url('/images/cadastros/clientes') }}/00{{ $i }}.png"> <!-- random image -->
  <div class="caption center-align">
    <h3 style="color: red;">HELP FLY01!</h3>
    <h5 class="light grey-text text-lighten-3">Voe com o fly01.</h5>
  </div>
</li>
{{ $i++ }}
@endwhile
    </ul>
    <div class="next">Next</div>
    </div>

  </div>





<div class="carousel carousel-slider center" data-indicators="true">
  <div class="carousel-fixed-item center">
    <a class="btn waves-effect">button</a>
  </div>
  <div class="carousel-item red white-text" href="#one!">
    <h2>First Panel</h2>
    <p class="white-text">This is your first panel</p>
  </div>
  <div class="carousel-item amber white-text" href="#two!">
    <h2>Second Panel</h2>
    <p class="white-text">This is your second panel</p>
  </div>
  <div class="carousel-item green white-text" href="#three!">
    <h2>Third Panel</h2>
    <p class="white-text">This is your third panel</p>
  </div>
  <div class="carousel-item blue white-text" href="#four!">
    <h2>Fourth Panel</h2>
    <p class="white-text">This is your fourth panel</p>
  </div>
</div>
@endsection
