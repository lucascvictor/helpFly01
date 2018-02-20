 
 <script>
	   localStorage.clear();
      var enjoyhint_script_data = [

      {      
        'next .tipoFormaPagamentoField': 'Você pode visualizar o fluxo de caixa da data atual, ou selecionar um determinado período colocando a Data inicial e a Data Final.',
          'top': 120,
          'nextButton' : {className: 'myNext', text: 'Próximo'},
          'skipButton' : {className: 'mySkip', text: 'Sair'},
  
      }
       {
          
          'next #tipoFormaPagamentoField': 'No campo “Tipo” temos a opção de selecionar a forma do pagamento a qual vamos selecionar, basta clicar em cima e ver as opções.',
          'nextButton' : {className: 'myNext', text: 'Próximo'},
          'skipButton' : {className: 'mySkip', text: 'Sair'},

        },
        {
          'next #descricaoField':'Em “Descrição” preenchemos a que se referencia aquela forma. Ex: Caso você selecione o Tipo “Transferência”, em descrição é possível especificar a qual conta foi feita o pagamento.',
          'nextButton' : {className: 'myNext', text: 'Próximo'},
          'skipButton' : {className: 'mySkip', text: 'Sair'},
        },
        {
          'next #fly01frm': '**ATENÇÃO** É importante ter um bom controle das formas de pagamentos, pois elas serão sempre utilizadas na inclusão de títulos financeiros no sistema.',
          'nextButton' : {className: 'myNext', text: 'Próximo'},
          'skipButton' : {className: 'mySkip', text: 'Sair'},
        },
        
      ];
        var enjoyhint_instance = null;
        enjoyhint_instance = new EnjoyHint({});
        enjoyhint_instance.setScript(enjoyhint_script_data);
   
	</script>