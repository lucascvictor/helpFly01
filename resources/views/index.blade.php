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
                  <div class="col s12 m3">
                    <div class="card pink accent-3">
                        <div class="card-content white-text">
                            <span class="card-title"><i class="material-icons">monetization_on</i>Informações financeiras</span>
                            <p class="bounceEffect animated bounceIn">
                                Card sobre informações do UOL.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card blue accent-3">
                        <div class="card-content white-text">
                            <span class="card-title"><i class="material-icons">monetization_on</i>Informações financeiras</span>
                            <p class="bounceEffect animated bounceIn">
                                Card sobre informações do UOL.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card orange accent-3">
                        <div class="card-content white-text">
                            <span class="card-title"><i class="material-icons">monetization_on</i>Informações financeiras</span>
                            <p class="bounceEffect animated bounceIn">
                                Card sobre informações do UOL.
                            </p>
                        </div>
                    </div>
                </div>
		 </div>
      </div>

    <div class="col m2" style="width: 20%; heigth: 100%">
    <iframe width="100%" height="20%"
src="https://www.youtube.com/watch?v=KuxLypSoIWo&list=PL47PHJrTrdVjDzeUxnjUnds_Cl_93jHt_">
</iframe>

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


@section('extrascript')

<script>
  // Load the IFrame Player API code asynchronously.
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // Replace the 'ytplayer' element with an <iframe> and
  // YouTube player after the API code downloads.
  var player;
  function onYouTubePlayerAPIReady() {
    player = new YT.Player('ytplayer', {
      height: '360',
      width: '640',
      list: 'PL47PHJrTrdVj0ykW0v4v0LM2Ktav23foH',
      listType: 'playlist'
    });
  }

</script>

@endsection


