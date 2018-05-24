@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')
   <div id="headTop" class="z-depth-0-half">
      <div class="container">
         <div class="row">
            <div class="col s12 fly01-main-header">
               <h4 class="thin inline-block fly01-main-title">Parâmetros Tributários | Nota Fiscal</h4>
               <ul class="right valign-wrapper fly01-buttons">
                  <li><a id="save" class="btn " onclick="fnAtualizaParametro();">Salvar</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <form id="fly01frm" class="col s12" action="/ParametroTributario/Create" method="post" novalidate="novalidate" data-vivaldi-spatnav-clickable="1">
            <input id="id" type="hidden" name="id">
            <div id="registroSimplificadoMTField" class="input-field col s12"><input id="registroSimplificadoMT" type="checkbox" name="registroSimplificadoMT" value="true"><label class="truncate" for="registroSimplificadoMT">Registro Simplificado de MT</label></div>
         </form>
         <form id="fly01frm" class="col s12" method="post">
            <div id="sssField" class="input-field col s12">
               <h5 id="sss" class="thin-bordered">Alíquotas Padrões</h5>
            </div>
            <div id="aliquotaSimplesNacionalField" class="input-field col s12 m3"><input id="aliquotaSimplesNacional" type="text" name="aliquotaSimplesNacional" class="custommask masked" data-inputmask="'mask': '9{1,3}[,9{1,2}] %', 'alias': 'decimal', 'autoUnmask': true, 'suffix': ' %', 'radixPoint': ',' " style="text-align: right;"><label class="truncate active" for="aliquotaSimplesNacional">ICMS Simples Nacional</label></div>
            <div id="aliquotaFCPField" class="input-field col s12 m3"><input id="aliquotaFCP" type="text" name="aliquotaFCP" class="custommask masked" data-inputmask="'mask': '9{1,3}[,9{1,2}] %', 'alias': 'decimal', 'autoUnmask': true, 'suffix': ' %', 'radixPoint': ',' " style="text-align: right;"><label class="truncate active" for="aliquotaFCP">Fundo de Combate à Pobreza</label></div>
            <div id="aliquotaISSField" class="input-field col s12 m2"><input id="aliquotaISS" type="text" name="aliquotaISS" class="custommask masked" data-inputmask="'mask': '9{1,3}[,9{1,2}] %', 'alias': 'decimal', 'autoUnmask': true, 'suffix': ' %', 'radixPoint': ',' " style="text-align: right;"><label class="truncate active" for="aliquotaISS">Imposto Sobre Serviço</label></div>
            <div id="aliquotaPISPASEPField" class="input-field col s12 m2"><input id="aliquotaPISPASEP" type="text" name="aliquotaPISPASEP" class="custommask masked" data-inputmask="'mask': '9{1,3}[,9{1,2}] %', 'alias': 'decimal', 'autoUnmask': true, 'suffix': ' %', 'radixPoint': ',' " style="text-align: right;"><label class="truncate active" for="aliquotaPISPASEP">PIS/PASEP</label></div>
            <div id="aliquotaCOFINSField" class="input-field col s12 m2"><input id="aliquotaCOFINS" type="text" name="aliquotaCOFINS" class="custommask masked" data-inputmask="'mask': '9{1,3}[,9{1,2}] %', 'alias': 'decimal', 'autoUnmask': true, 'suffix': ' %', 'radixPoint': ',' " style="text-align: right;"><label class="truncate active" for="aliquotaCOFINS">COFINS</label></div>
         </form>
         <form id="fly01frm" class="col s12" method="post">
            <div id="sssField" class="input-field col s12">
               <h5 id="sss" class="thin-bordered">Parâmetros de Transmissão</h5>
            </div>
            <input id="numeroRetornoNF" type="hidden" name="numeroRetornoNF" value="1">
            <div id="tipoPresencaCompradorField" class="input-field col s12 m4">
               <div class="select-wrapper initialized">
                  <span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-vezb6bv" value="Operação presencial" data-constrainwidth="undefined">
                  <ul id="select-options-vezb6bv" class="dropdown-content select-dropdown ">
                     <li class="" data-vivaldi-spatnav-clickable="1"><span>Não se aplica</span></li>
                     <li class="" data-vivaldi-spatnav-clickable="1"><span>Operação presencial</span></li>
                     <li class="" data-vivaldi-spatnav-clickable="1"><span>Operação não presencial, pela Internet</span></li>
                     <li class="" data-vivaldi-spatnav-clickable="1"><span>Operação não presencial, Teleatendimento</span></li>
                     <li class="" data-vivaldi-spatnav-clickable="1"><span>NFC-e em operação com entrega a domicílio</span></li>
                     <li class="" data-vivaldi-spatnav-clickable="1"><span>Operação não presencial, outros</span></li>
                  </ul>
                  <select id="tipoPresencaComprador" name="tipoPresencaComprador" data-select-id="vezb6bv" class="initialized">
                     <option value="NaoSeAplica">Não se aplica</option>
                     <option value="Presencial">Operação presencial</option>
                     <option value="Internet">Operação não presencial, pela Internet</option>
                     <option value="TeleAtendimento">Operação não presencial, Teleatendimento</option>
                     <option value="EntregaDomicilio">NFC-e em operação com entrega a domicílio</option>
                     <option value="Outros">Operação não presencial, outros</option>
                  </select>
               </div>
               <label class="truncate active" for="tipoPresencaComprador">Presença do Comprador</label>
            </div>
            <div id="tipoModalidadeField" class="input-field col s12 m5">
               <div class="select-wrapper initialized">
                  <span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-96rz53v" value="Emissão Normal" data-constrainwidth="undefined">
                  <ul id="select-options-96rz53v" class="dropdown-content select-dropdown ">
                     <li class="" data-vivaldi-spatnav-clickable="1"><span>Emissão Normal</span></li>
                     <li class="" data-vivaldi-spatnav-clickable="1"><span>Contingência FS-IA, com impressão do DANFE em formulário de segurança</span></li>
                     <li class="" data-vivaldi-spatnav-clickable="1"><span>Declaração Prévia da Emissão em Contingência</span></li>
                     <li class="" data-vivaldi-spatnav-clickable="1"><span>Contingência FS-DA, com impressão do DANFE em formulário de segurança</span></li>
                     <li class="" data-vivaldi-spatnav-clickable="1"><span>SEFAZ Virtual de Contingência do AN</span></li>
                     <li class="" data-vivaldi-spatnav-clickable="1"><span>SEFAZ Virtual de Contingência do RS</span></li>
                     <li class="" data-vivaldi-spatnav-clickable="1"><span>Contingência off-line da NFC-e</span></li>
                  </ul>
                  <select id="tipoModalidade" name="tipoModalidade" data-select-id="96rz53v" class="initialized">
                     <option value="Normal">Emissão Normal</option>
                     <option value="FSIA">Contingência FS-IA, com impressão do DANFE em formulário de segurança</option>
                     <option value="DPEC">Declaração Prévia da Emissão em Contingência</option>
                     <option value="FSDA">Contingência FS-DA, com impressão do DANFE em formulário de segurança</option>
                     <option value="SVCAN">SEFAZ Virtual de Contingência do AN</option>
                     <option value="SVCRS">SEFAZ Virtual de Contingência do RS</option>
                     <option value="NFCe">Contingência off-line da NFC-e</option>
                  </select>
               </div>
               <label class="truncate active" for="tipoModalidade">Modalidade</label>
            </div>
            <div id="tipoVersaoNFeField" class="input-field col s6 m1">
               <div class="select-wrapper initialized">
                  <span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-kucxxfx" value="4.00" data-constrainwidth="undefined">
                  <ul id="select-options-kucxxfx" class="dropdown-content select-dropdown ">
                     <li class="" data-vivaldi-spatnav-clickable="1"><span>4.00</span></li>
                  </ul>
                  <select id="tipoVersaoNFe" name="tipoVersaoNFe" data-select-id="kucxxfx" class="initialized">
                     <option value="v4">4.00</option>
                  </select>
               </div>
               <label class="truncate active" for="tipoVersaoNFe">Versão NFe </label>
            </div>
            <div id="tipoAmbienteField" class="input-field col s6 m2">
               <div class="select-wrapper initialized">
                  <span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-5p2k12a" value="Produção" data-constrainwidth="undefined">
                  <ul id="select-options-5p2k12a" class="dropdown-content select-dropdown ">
                     <li class="" data-vivaldi-spatnav-clickable="1"><span>Configuração</span></li>
                     <li class="" data-vivaldi-spatnav-clickable="1"><span>Produção</span></li>
                     <li class="" data-vivaldi-spatnav-clickable="1"><span>Homologação</span></li>
                  </ul>
                  <select id="tipoAmbiente" name="tipoAmbiente" data-select-id="5p2k12a" class="initialized">
                     <option value="Configuracao">Configuração</option>
                     <option value="Producao">Produção</option>
                     <option value="Homologacao">Homologação</option>
                  </select>
               </div>
               <label class="truncate active" for="tipoAmbiente">Ambiente</label>
            </div>
            <div id="mensagemPadraoNotaField" class="input-field col s12"><textarea id="mensagemPadraoNota" name="mensagemPadraoNota" class="materialize-textarea"></textarea><label class="truncate active" for="mensagemPadraoNota">Mensagem Padrão na Nota</label></div>
         </form>
      </div>
   </div>
@endsection