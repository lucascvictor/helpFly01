@extends('layouts.default')
@section('title', 'Help Fly01')


@section('content')
  
    <div class="container">
        <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block">Cadastro de Fornecedores</h4>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div id="color-usage" class="section scrollspy">
                    
                  
                    
                <div class="card-panel teal amber accent-2 app center">Esta é a tela inicial da rotina, a seleção de títulos que serão renegociados, é pesquisada através dos fornecedores, por isso primeiramente é necessário selecioná-los, após isso clique em "Atualizar Contas" e os títulos em abertos do Fornecedor escolhido irá aparecer.</div>
                    <img class="responsive-img z-depth-5" src="{{ url('images/cadastros/contasAPagar/Renegotiation/Tela1.gif') }}">
                   
                    <div class="card-panel teal amber accent-2 app center">Vale ressaltar que após a lista de títulos aparecer, para selecionar os títulos  basta clicar em cima dos mesmos, podendo sempre escolher 1 ou mais títulos.</div>
                    <img class="responsive-img z-depth-5" src="{{ url('images/cadastros/contasAPagar/Renegotiation/Tela2.gif') }}">
                   
                    <div class="card-panel teal amber accent-2 app center">Em "Informações da renegociação" preenchemos o motivo da renegociação, informamos se haverá acréscimo ou desconto,se a diferença será calculada diretamente por valor ou porcentagem e por fim informamos o porcentual ou valor da diferença.</div>
                    <img class="responsive-img" src="{{ url('images/cadastros/contasAPagar/Renegotiation/Tela3.png') }}">
                    
                    <div class="card-panel teal amber accent-2 app center">Já em "Informações da nova conta a pagar", é necessário entender que as informações inseridas nestes campos serão usadas para criação de um novo título.</div>
                    <img class="responsive-img" src="{{ url('images/cadastros/contasAPagar/Renegotiation/Tela4.png') }}">
                    
                    <div id="ultimaParte">
                    <div class="card-panel teal amber accent-2 app center">Por fim, basta clicar em "SALVAR", assim que salvo você poderá verificar que foi gerado um novo título, sendo ele a junção dos títulos renegociados.</div>
                    <img class="responsive-img" src="{{ url('images/cadastros/contasAPagar/Renegotiation/Tela5.gif') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('extrascript')

<script>
var options = [

  {selector: '#ultimaParte', offset: 60, callback: function() {
    Materialize.toast('Restou alguma dúvida?', 400000000);      
  }},
  {selector: '#ultimaParte', offset: 100, callback: function() {
    Materialize.toast('Mande um e-mail para suporte.fly01gestao@totvs.com.br', 400000000);      
  }},

];
Materialize.scrollFire(options);

</script> 
@endsection 
