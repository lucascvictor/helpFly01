  <script src="{{ url('js/1.0.2/fly01ui.js') }}"></script>
  <script src="{{ url('js/fly-tour.js') }}"></script>
  <script src="{{ url('js/enjoyhint.js') }}"></script>
  <script src="{{ url('js/materialize.js') }}"></script>


  <script type="text/javascript">

  $(document).ready(function(){
    $('.scrollspy').scrollSpy();
    $(".button-collapse").sideNav();
  });
        
  </script>

  <script>
    function initTour() {
     /* var element = document.getElementById("tour");
      element.classList.remove("pulse"); */
      
      var enjoyhint_instance = null;
    
      enjoyhint_instance = new EnjoyHint({});
      enjoyhint_instance.setScript(enjoyhint_script_data);
        
      enjoyhint_instance.runScript();
    }


  $(document).ready(function(){
    $('select').material_select();
  });


  </script>



 
