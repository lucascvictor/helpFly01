<script type="text/javascript">
  $(".button-collapse").sideNav();

  </script>
 
 <script>
	   localStorage.clear();
      var enjoyhint_script_data = [
        
        {
          selector:'#todo-list',
          event:'click',
          description:'Atualize os dados da tela',
          timeout:100
        },
        {
          selector:'.new_btn',
          event:'click',
          description:'Inicie seu tour agora mesmo',
  
        },
        {
          selector:'#dfly01cardSaldo',
          event:'click',
          description:'Seu saldo total',
  
        },
        
      ];
      var enjoyhint_instance = null;
      $(document).ready(function(){
        enjoyhint_instance = new EnjoyHint({});
        enjoyhint_instance.setScript(enjoyhint_script_data);
        enjoyhint_instance.runScript();
      });

	</script>