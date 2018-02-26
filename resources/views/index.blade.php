@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')

<div class="row"> 
    <p>BITCOIN: </p>
    <p id="bitcoin"></p>
</div>

@endsection


@section('extrascript')


 <script type="text/javascript" >

$(document).ready(function() {

    function limpa_formulário() {

        $("#bitcoin").val("");

    }
});

    //Quando o campo cep perde o foco.
    $("#bitcoin").blur(function() {
            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#bitcoin").val("...");


                //Consulta o webservice viacep.com.br/
                $.getJSON("http://api.promasters.net.br/cotacao/v1/valores", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#bitcoin").val(BTC.valores);

                    } else {
                        limpa_formulário();
                    }
                }
            }
    });
</script>

@endsection