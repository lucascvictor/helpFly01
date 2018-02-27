@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
<div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block">Index</h4>
               <ul class="right valign-wrapper fly01-buttons">
                  
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">


         

    <div id="card-stats" class="right">
        <div class="row">
            <div class="col s6 m3 l2">
                <div class="card">
                    <div class="card-content  green white-text">
                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> USD</p>
                        <h4 class="card-stats-number">{{ $valores['valores']['USD']['valor'] }}</h4>
                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i><span class="green-text text-lighten-5">from today</span>
                        </p>
                    </div>
                    <div class="card-action  green darken-2">
                        <div id="clients-bar"><canvas width="290" height="25" style="display: inline-block; width: 290px; height: 25px; vertical-align: top;"></canvas></div>
                    </div>
                </div>
            </div>
            <div class="col s6 m3 l2">
                <div class="card">
                    <div class="card-content purple white-text">
                        <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>EUR</p>
                        <h4 class="card-stats-number">{{ $valores['valores']['EUR']['valor'] }}</h4>
                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i><span class="purple-text text-lighten-5">from today</span>
                        </p>
                    </div>
                    <div class="card-action purple darken-2">
                        <div id="sales-compositebar"><canvas width="286" height="25" style="display: inline-block; width: 286px; height: 25px; vertical-align: top;"></canvas></div>

                    </div>
                </div>
            </div>                            
            <div class="col s6 m3 l2">
                <div class="card">
                    <div class="card-content blue-grey white-text">
                        <p class="card-stats-title"><i class="mdi-action-trending-up"></i> BTC</p>
                        <h4 class="card-stats-number">{{ $valores['valores']['BTC']['valor'] }}</h4>
                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i><span class="blue-grey-text text-lighten-5">from today</span>
                        </p>
                    </div>
                    <div class="card-action blue-grey darken-2">
                        <div id="profit-tristate"><canvas width="290" height="25" style="display: inline-block; width: 290px; height: 25px; vertical-align: top;"></canvas></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

  </div>


@endsection


