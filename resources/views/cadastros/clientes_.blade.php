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

<!-- Instantiate the page tour library -->
<script>
  // Instantiate the actual page tour object.
  var PageTour;
  try {
    PageTour = $.fn.PageTour();
  } catch (e) {
    console.error('Cannot start page tour: ', e);
  }
</script>

<!-- Just some extra testing functionality -->
<script>
  // Script to add dynamic "cities" for testing.
  $('#start-tour').on('click', PageTour.open);
  $('#add-city').on('click', function () {
    if (locs.length > 0) {
      var loc = locs.shift();
      var city = $('<div></div>', { 'class' : 'city' });
      city.append(
        $('<h2></h2>', { html : loc.loc }),
        $('<p></p>', { html : loc.p1 }),
        $('<p></p>', {
          html : loc.p2,
          'data-tour-title' : 'City Description',
          'data-tour-Description' : 'This box shows the description of the city.'
        })
      );
      $('#locations').append(city)
    }
  });
  // Test after load adding new elements.
  var locs = [
    {
      loc : 'Emerald City',
      p1 : 'Emerald City is located somewhere over the rainbow.',
      p2 : 'Emerald  has munchkins, witches, and talking scarecrows. I wouldn\'t recommend it.'
    },
    {
      loc : 'Wonderland',
      p1 : 'Wonderland is situated behind a mirror.',
      p2 : 'If you ever wondered what life would be like on a permanent acid trip, Wonderland is for you.'
    }
  ];
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
  <center><button id="start-tour">START TOUR</button></center>
  <p data-tour-index="-1" data-tour-title="Link Button" data-tour-description="I need a longer description for what this thing does."> LUCAS </p>
  <div class="slider">
    <ul class="slides">

<?php
$i = 1;

?>

@while($i <= 5)
<li>
  <img src="{{ url('/images/cadastros/clientes') }}/00{{ $i }}.png" > <!-- random image -->
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





<div class="carousel carousel-slider center" data-indicators="true" id="lucas">
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
