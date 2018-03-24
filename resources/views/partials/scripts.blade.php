  <script src="{{ url('js/1.0.2/fly01ui.js') }}"></script>

  <script src="{{ url('js/enjoyhint.js') }}"></script>
  <script src="{{ url('js/materialize.js') }}"></script>
  
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

    $('.scrollspy').scrollSpy();
    $(".button-collapse").sideNav();
    $('select').material_select();

    $('.datepicker').pickadate({
        labelMonthNext: 'Próximo',
        labelMonthPrev: 'Anterior',
        labelMonthSelect: 'Selecione um mes',
        labelYearSelect: 'Selecione um ano',
        monthsFull: [ 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro' ],
        monthsShort: [ 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' ],
        weekdaysFull: [ 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado' ],
        weekdaysShort: [ 'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab' ],
        weekdaysLetter: [ 'D', 'S', 'T', 'Q', 'Q', 'S', 'S' ],
        today: 'Hoje',
        clear: 'Limpar',
        close: 'Fechar'
    });


  });


  </script>



 
