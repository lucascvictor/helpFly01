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
 

    <div class="areageral" style="heigth: 300px;">
       
    <iframe id="ytplayer" type="text/html" width="640" height="360"
  src="https://www.youtube.com/watch?v=ysow_oB5PXQ&list=PL47PHJrTrdVj0ykW0v4v0LM2Ktav23foH"
  frameborder="0"/>

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


