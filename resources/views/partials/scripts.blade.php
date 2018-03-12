
  <script href="{{ url('js/fly01ui.js') }}"></script>
  <script src="{{ url('js/fly-tour.js') }}"></script>
  <script src="{{ url('js/enjoyhint.js') }}"></script>

  <script type="text/javascript">

  $(document).ready(function(){
    $('.scrollspy').scrollSpy();
    $(".button-collapse").sideNav();
    $('select').material_select();
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

  </script>



 
