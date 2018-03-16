

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
    

       <div class = "col s4 m4">
            <div class = "card blue-orange lighten-4">
               <div class = "card-image">
                  <img src = "http://blog.safetec.com.br/wp-content/uploads/2017/03/como-fazer-planejamento-financeiro-1.jpg">                
               </div>
               
               <div class = "card-content">                  
                  <p>HTML5 is the next major revision of the HTML standard superseding
                     HTML 4.01, XHTML 1.0, and XHTML 1.1. HTML5 is a standard for
                     structuring and presenting content on the World Wide Web.</p>
               </div>
               
               <div class = "card-action">
                  <button class = "btn waves-effect waves-light blue-grey">
                     <i class = "material-icons">share</i></button>
                  <a class = "right blue-grey-text" href = "http://www.tutorialspoint.com">
                     www.tutorialspoint.com</a>
               </div>
            </div>
      </div>
      <div class = "col s4 m4">
            <div class = "card blue-orange lighten-4">
               <div class = "card-image">
                  <img src = "http://blog.safetec.com.br/wp-content/uploads/2017/03/como-fazer-planejamento-financeiro-1.jpg">                
               </div>
               
               <div class = "card-content">                  
                  <p>HTML5 is the next major revision of the HTML standard superseding
                     HTML 4.01, XHTML 1.0, and XHTML 1.1. HTML5 is a standard for
                     structuring and presenting content on the World Wide Web.</p>
               </div>
               
               <div class = "card-action">
                  <button class = "btn waves-effect waves-light blue-grey">
                     <i class = "material-icons">share</i></button>
                  <a class = "right blue-grey-text" href = "http://www.tutorialspoint.com">
                     www.tutorialspoint.com</a>
               </div>
            </div>
      </div>
      <div class = "col s4 m4">
            <div class = "card blue-orange lighten-4">
               <div class = "card-image">
                  <img src = "http://blog.safetec.com.br/wp-content/uploads/2017/03/como-fazer-planejamento-financeiro-1.jpg">                
               </div>
               
               <div class = "card-content">                  
                  <p>HTML5 is the next major revision of the HTML standard superseding
                     HTML 4.01, XHTML 1.0, and XHTML 1.1. HTML5 is a standard for
                     structuring and presenting content on the World Wide Web.</p>
               </div>
               
               <div class = "card-action">
                  <button class = "btn waves-effect waves-light blue-grey">
                     <i class = "material-icons">share</i></button>
                  <a class = "right blue-grey-text" href = "http://www.tutorialspoint.com">
                     www.tutorialspoint.com</a>
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

