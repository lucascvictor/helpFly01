<script type="text/javascript">
  $(".button-collapse").sideNav();

  </script>
 
 <script>
	   localStorage.clear();
      var enjoyhint_script_data = [
        
        {
          selector:'#tipoFormaPagamentoField',
          event:'click',
          description:'No campo “Tipo” temos a opção de selecionar a forma do pagamento a qual vamos selecionar, basta clicar em cima e ver as opções.',
          timeout:100
        },
        {
          selector:'#descricaoField',
          event:'click',
          description:'Em “Descrição” preenchemos a que se referencia aquela forma. Ex: Caso você selecione o Tipo “Transferência”, em descrição é possível especificar a qual conta foi feita o pagamento.',
  
        },
        {
          selector:'#fly01frm',
          event:'click',
          description:'**ATENÇÃO** É importante ter um bom controle das formas de pagamentos, pois elas serão sempre utilizadas na inclusão de títulos financeiros no sistema.',
  
        },
        
      ];
      var enjoyhint_instance = null;
      $(document).ready(function(){
        enjoyhint_instance = new EnjoyHint({});
        enjoyhint_instance.setScript(enjoyhint_script_data);
        enjoyhint_instance.runScript();
      });

	</script>