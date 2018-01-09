@extends('layouts.default')

@section('title', 'Help Fly01')

@section('extrascript')
<!-- Instantiate the page tour library -->
<script>
// Instantiate the actual page tour object.
var PageTour;
try {
  PageTour = $.fn.PageTour();
} catch (e) {
  console.error('Não foi possivel iniciar o tour: ', e);
}
</script>

<!-- Just some extra testing functionality -->
<script>
// Script to add dynamic "cities" for testing.
$('#start-tour').on('click', PageTour.open);

</script>

@endsection

@section('content')

<div id="headTop" class="z-depth-0-half">
  <div class="container">
    <div class="row">
  <div class="col s9 fly01-main-header">
    <h4 class="thin inline-block">Dados do Cliente</h4>
  <ul class="right valign-wrapper fly01-buttons">
  <li><a id="cancel" class="btn " onclick="fnCancelar();">Cancelar</a></li>
  <li><a id="save" class="btn " onclick="fnSalvar();">Salvar</a></li>
  <li><button id="start-tour" class="btn">Iniciar o Tour</button></li>
</ul>
</div></div></div></div>


<div class="container">
  <div class="row">
  <form id="" class="col s9" action="https://novofaturamento.fly01.com.br/RegisterPerson/Edit" method="post" novalidate="novalidate" data-vivaldi-spatnav-clickable="1">
    <input id="id" type="hidden" name="id" value="C00000">
  </input>
  <!-- Criar uma modal para exibir o print dentro do tour com grupo de campos -->
  <div data-tour-index="0" data-tour-title="Grupo" data-tour-description="Grupo de carinhas agrupados" height="200px">

  <div id="documentField" class="input-field col s9 l4">
    <input id="document" type="text" name="document" class="masked cpfcnpj" data-tour-index="1" data-tour-title="Campo CNPJ" data-tour-description="Aqui você coloca o seu CNPJ">
  </input>
  <label class="truncate active" for="document">CPF / CNPJ</label>
</div>
<div id="nameField" class="input-field col s9 l8">
  <input id="name" type="text" name="name" data-tour-index="2" data-tour-title="Campo Razão Social / Nome completo" data-tour-description="Aqui você coloca o seu Nome completo/Razão social sem abreviações">
</input>
<label class="truncate active" for="name">Razão Social / Nome Completo</label>
</div>
</div>

<div id="traddingNameField" class="input-field col s9 l6">
  <input id="traddingName" type="text" name="traddingName">
</input>
<label class="truncate active" for="traddingName">Nome Comercial</label>
</div>
<div id="typeField" class="input-field col s6 m3">
  <div class="select-wrapper">
    <span class="caret">▼</span>
    <input type="text" class="select-dropdown" readonly="true" data-activates="select-options-dpu33b8" value="Cons.Final">
    <ul id="select-options-dpu33b8" class="dropdown-content select-dropdown ">
      <li class="" data-vivaldi-spatnav-clickable="1">
        <span>Cons.Final</span>
      </li>
      <li class="" data-vivaldi-spatnav-clickable="1">
        <span>Produtor Rural</span>
      </li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>Revendedor</span>
      </li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>Solidário</span>
      </li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>Exportação</span>
      </li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>Importação</span>
      </li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>Nao se aplica</span>
      </li>
    </ul>
    <select id="type" name="type" data-select-id="dpu33b8" class="initialized">
      <option value="1">Cons.Final</option>
      <option value="2">Produtor Rural</option>
      <option value="3">Revendedor</option>
      <option value="4">Solidário</option>
      <option value="5">Exportação</option>
      <option value="6">Importação</option>
      <option value="7">Nao se aplica</option>
    </select>
  </div>
  <label class="truncate active" for="type">Classificação de Pessoa</label>
</div>
<div id="stateInscriptionField" class="input-field col s6 m3">
  <input id="stateInscription" type="text" name="stateInscription" readonly="readonly"></input>
  <label class="truncate active" for="stateInscription">Inscrição Estadual</label>
</div>
<div id="chkIsentoField" class="input-field col s9 l4">
  <p>
    <input id="chkIsento" type="checkbox" name="chkIsento" value="true"></input>
    <label class="truncate" for="chkIsento">Sim, é isento de Inscrição Estadual</label>
  </p>
</div>
<div id="personTypeNfseField" class="input-field col s9 l4">
  <div class="select-wrapper">
    <span class="caret">▼</span>
    <input type="text" class="select-dropdown" readonly="true" data-activates="select-options-j7dxbxz" value="Outro">
    <ul id="select-options-j7dxbxz" class="dropdown-content select-dropdown ">
      <li class="" data-vivaldi-spatnav-clickable="1"><span>Outro</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>SUS</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>Executivo</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>Bancos</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>Comércio/Indústria</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>Legislativo/Judiciário</span></li>
    </ul>
    <select id="personTypeNfse" name="personTypeNfse" data-select-id="j7dxbxz" class="initialized">
      <option value="0">Outro</option>
      <option value="1">SUS</option>
      <option value="2">Executivo</option>
      <option value="3">Bancos</option>
      <option value="4">Comércio/Indústria</option>
      <option value="5">Legislativo/Judiciário</option>
    </select>
  </div>
  <label class="truncate active" for="personTypeNfse">Tipo de Pessoa NFS-e</label>
</div>
<div id="suframaField" class="input-field col s9 l4">
  <input id="suframa" type="text" name="suframa">
</input>
<label class="truncate" for="suframa">Inscrição Suframa</label>
</div>
<div id="municipalInscriptionField" class="input-field col s9 l4">
  <input id="municipalInscription" type="text" name="municipalInscription" class="masked numbers" style="text-align: right;"></input>
  <label class="truncate" for="municipalInscription">Inscrição Municipal</label>
</div>
<div id="simplesNacionalBoolField" class="input-field col s9 l4">
  <p><input id="simplesNacionalBool" type="checkbox" name="simplesNacionalBool" value="true"></input>
    <label class="truncate" for="simplesNacionalBool">Sim, é optante pelo Simples Nacional</label>
  </p>
</div>
<div id="otherCityField" class="input-field col s9 m6 l4">
  <input type="hidden" name="otherCity" id="otherCity" value=""></input>
  <input type="text" class="autocomplete ui-autocomplete-input" id="otherCityAutoComplete" name="otherCityAutoComplete" data-url="/AutoComplete/CityIbgeCode" data-target="otherCity" autocomplete="off"></input>
  <label class="truncate" for="otherCityAutoComplete">Outra Cidade NFS-e</label>
</div>
<div id="emailField" class="input-field col s9 m6 l3">
  <input id="email" type="email" name="email"></input>
  <label class="truncate" for="email">E-mail</label>
</div>
<div id="phoneField" class="input-field col s6 m3">
  <input id="phone" type="text" name="phone" class="masked tel"></input>
  <label class="truncate" for="phone">Telefone</label>
</div>
<div id="cellPhoneField" class="input-field col s6 m3">
  <input id="cellPhone" type="text" name="cellPhone" class="masked tel"></input>
  <label class="truncate" for="cellPhone">Celular</label>
</div>
<div id="zipCodeField" class="input-field col s6 m3">
  <input id="zipCode" type="text" name="zipCode" class="masked cep"></input>
  <label class="truncate active" for="zipCode">CEP</label>
</div>
<div id="stateField" class="input-field col s9 m6 l3">
  <div class="select-wrapper"><span class="caret">▼</span>
    <input type="text" class="select-dropdown" readonly="true" data-activates="select-options-8zjnwk8" value="SÃO PAULO">
    <ul id="select-options-8zjnwk8" class="dropdown-content select-dropdown ">
      <li class="" data-vivaldi-spatnav-clickable="1">
      <span>ACRE</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>ALAGOAS</span>
      </li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>AMAPÁ</span>
      </li><li class="" data-vivaldi-spatnav-clickable="1"><span>AMAZONAS</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>BAHIA</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>CEARÁ</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>DISTRITO FEDERAL</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>ESPIRITO SANTO</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>GOIÁS</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>MARANHÃO</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>MATO GROSSO</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>MATO GROSSO DO SUL</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>MINAS GERAIS</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>PARÁ</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>PARAÍBA</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>PARANÁ</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>PERNAMBUCO</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>PIAUÍ</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>RIO DE JANEIRO</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>RIO GRANDE DO NORTE</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>RIO GRANDE DO SUL</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>RONDÔNIA</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>RORAIMA</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>SANTA CATARINA</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>SÃO PAULO</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>SERGIPE</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>TOCANTINS</span></li>
      <li class="" data-vivaldi-spatnav-clickable="1"><span>EXTERIOR</span></li>
    </ul>
    <select id="state" name="state" data-select-id="8zjnwk8" class="initialized">
      <option value="AC">ACRE</option>
      <option value="AL">ALAGOAS</option>
      <option value="AP">AMAPÁ</option>
      <option value="AM">AMAZONAS</option>
      <option value="BA">BAHIA</option>
      <option value="CE">CEARÁ</option>
      <option value="DF">DISTRITO FEDERAL</option>
      <option value="ES">ESPIRITO SANTO</option>
      <option value="GO">GOIÁS</option>
      <option value="MA">MARANHÃO</option>
      <option value="MT">MATO GROSSO</option>
      <option value="MS">MATO GROSSO DO SUL</option>
      <option value="MG">MINAS GERAIS</option><option value="PA">PARÁ</option>
      <option value="PB">PARAÍBA</option>
      <option value="PR">PARANÁ</option>
      <option value="PE">PERNAMBUCO</option>
      <option value="PI">PIAUÍ</option>
      <option value="RJ">RIO DE JANEIRO</option>
      <option value="RN">RIO GRANDE DO NORTE</option>
      <option value="RS">RIO GRANDE DO SUL</option>
      <option value="RO">RONDÔNIA</option>
      <option value="RR">RORAIMA</option>
      <option value="SC">SANTA CATARINA</option>
      <option value="SP">SÃO PAULO</option>
      <option value="SE">SERGIPE</option>
      <option value="TO">TOCANTINS</option>
      <option value="EX">EXTERIOR</option>
    </select>
  </div>
  <label class="truncate active" for="state">Estado</label>
</div>
<div id="cityField" class="input-field col s9 m6 l6">
  <input type="hidden" name="city" id="city" value="GUARULHOS">
</input>
<input type="text" class="autocomplete ui-autocomplete-input" id="cityDescricao" name="cityDescricao" data-url="/AutoComplete/CityDescription" data-target="city" data-prefilter="state" autocomplete="off">
</input>
<label class="truncate active" for="cityDescricao">Cidade (Escolha o estado antes)</label>
</div>
<div id="neighborhoodField" class="input-field col s6 m3">
  <input id="neighborhood" type="text" name="neighborhood"></input>
  <label class="truncate active" for="neighborhood">Bairro</label>
</div>
<div id="addressField" class="input-field col s9">
  <input id="address" type="text" name="address"></input><label class="truncate active" for="address">Endereço (com número e complemento)</label></div><div id="observationField" class="input-field col s9"><textarea id="observation" name="observation" class="materialize-textarea"></textarea><label class="truncate" for="observation">Observação</label></div><div id="isSupplierBoolField" class="input-field col s9 l4"><p><input id="isSupplierBool" type="checkbox" name="isSupplierBool" value="true"></input><label class="truncate" for="isSupplierBool">É Fornecedor</label></p></div><div id="isCarrierBoolField" class="input-field col s9 l4"><p><input id="isCarrierBool" type="checkbox" name="isCarrierBool" value="true"></input><label class="truncate" for="isCarrierBool">É Transportadora
      </label>
    </p>
  </div>
</form>
</div>
</div>

</div>
@endsection
