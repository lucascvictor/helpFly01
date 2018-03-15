

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
<div class="container ">
   <div class="row">
       <div class="col s12 m4">
      <div class="app" id="acc8b796-04a0-4f4f-b6a4-924d1ca4c27b"><div class="app-content white-text" style="background:#c39d00;"><img class="app-icon loaded" src="https://cdnfly01.blob.core.windows.net/img/icon/financeiro.png" onload="$(this).addClass('loaded')"><span class="app-title center"> Fly01 Financeiro</span></div></div>
    </div>
     <div class="col s12 m4">
      <div class="app" id="acc8b796-04a0-4f4f-b6a4-924d1ca4c27b"><div class="app-content white-text" style="background:#c39d00;"><img class="app-icon loaded" src="https://cdnfly01.blob.core.windows.net/img/icon/financeiro.png" onload="$(this).addClass('loaded')"><span class="app-title center"> Fly01 Financeiro</span></div></div>
    </div>
     <div class="col s12 m4">
      <div class="app" id="acc8b796-04a0-4f4f-b6a4-924d1ca4c27b"><div class="app-content white-text" style="background:#c39d00;"><img class="app-icon loaded" src="https://cdnfly01.blob.core.windows.net/img/icon/financeiro.png" onload="$(this).addClass('loaded')"><span class="app-title center"> Fly01 Financeiro</span></div></div>
    </div>
    

      <div class="col s12 m4">
      <div class="card orange">
        <div class="card-content white-text">
            <span class="card-title">
                 <a href="https://github.com/perminder-klair/design-blocks" target="_blank">design-blocks</a>
            </span>

            <div class="repo-icons">
                <a href="https://github.com/perminder-klair/design-blocks/fork" target="_blank">
                    <i class="fa fa-random"></i> 0
                </a>
                <a href="https://github.com/perminder-klair/design-blocks/stargazers" target="_blank">
                    <i class="fa fa-star"></i> 0
                </a>
                <a href="https://github.com/perminder-klair/design-blocks/watchers" target="_blank">
                    <i class="fa fa-eye"></i> 0
                </a>
            </div>

            <p>A set of 170+ Bootstrap based design blocks ready to be used to create clean modern websites.</p>
        </div>
        <div class="card-action">
            <span class="updated-on">Updated on March 8, 2018</span>
        </div>
    </div>
                    </div>
   


      <div class="col s12 m4">
      <div class="card orange">
        <div class="card-content white-text">
            <span class="card-title">
                 <a href="https://github.com/perminder-klair/design-blocks" target="_blank">design-blocks</a>
            </span>

            <div class="repo-icons">
                <a href="https://github.com/perminder-klair/design-blocks/fork" target="_blank">
                    <i class="fa fa-random"></i> 0
                </a>
                <a href="https://github.com/perminder-klair/design-blocks/stargazers" target="_blank">
                    <i class="fa fa-star"></i> 0
                </a>
                <a href="https://github.com/perminder-klair/design-blocks/watchers" target="_blank">
                    <i class="fa fa-eye"></i> 0
                </a>
            </div>

            <p>A set of 170+ Bootstrap based design blocks ready to be used to create clean modern websites.</p>
        </div>
        <div class="card-action">
            <span class="updated-on">Updated on March 8, 2018</span>
        </div>
    </div>
                    </div>
   


      <div class="col s12 m4">
        <div class="card-content white-text">
     
  <div class="card orange accent-3">
               <div class="card-content white-text">
                  <p class="bounceEffect animated bounceIn">
                     <iframe width="100%" height="20%" src="https://www.youtube.com/embed/KuxLypSoIWo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </p>
               </div>
            </div>
  
           </div>
      </div>




   <div class="col s12 m4">
        <div class="card-content white-text">
     
  <div class="card orange accent-3">
               <div class="card-content white-text">
                  <p class="bounceEffect animated bounceIn">
                     <iframe width="100%" height="20%" src="https://www.youtube.com/embed/KuxLypSoIWo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </p>
               </div>
            </div>
  
           </div>
      </div>


   <div class="col s12 m4">
        <div class="card-content white-text">
     
  <div class="card orange accent-3">
               <div class="card-content white-text">
                  <p class="bounceEffect animated bounceIn">
                     <iframe width="100%" height="20%" src="https://www.youtube.com/embed/KuxLypSoIWo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </p>
               </div>
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

