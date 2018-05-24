<ul id="nav-mobile" class="side-nav fixed ps" style="transform: translateX(0%);">
   <li class="logo"><a id="logo-container" href="/faturamento" class="brand-logo"><img src="https://cdnfly01.azureedge.net/img/fly01branco.png"></a></li>
   <li class="no-padding">
      <ul class="side collapsible">
         <li class="">
            <a class="collapsible-header"><i class="material-icons expand right">expand_more</i>Faturamento</a>
            <div class="collapsible-body" style="display: block;">
               <ul>
                  <li class=""><a href="{{ url('/faturamento/vendas') }}" >Vendas</a></li>
                  <li class=""><a href="{{ url('/faturamento/notasficais') }}" >Notas Fiscais</a></li>
              </ul>
            </div>
         </li>
         <li>
            <a class="collapsible-header"><i class="material-icons expand right">expand_more</i>Cadastros</a>
            <div class="collapsible-body">
               <ul>
               <li class=""><a href="{{ url('/faturamento/cadastros/clientes') }}" >Clientes</a></li>
               <li class=""><a href="{{ url('/faturamento/cadastros/fornecedores') }}" >Fornecedores</a></li>
               <li class=""><a href="{{ url('/faturamento/cadastros/transportadora') }}" >Transportadora</a></li>
               <li class=""><a href="{{ url('/faturamento/cadastros/grupotributario') }}" >Grupo Tributário</a></li>
               <li class=""><a href="{{ url('/faturamento/cadastros/produtos') }}" >Produtos</a></li>
               <li class=""><a href="{{ url('/faturamento/cadastros/grupodeprodutos') }}" >Grupo de Produtos</a></li>
               <li class=""><a href="{{ url('/faturamento/cadastros/servicos') }}" >Serviços</a></li>
                <li class=""><a href="{{ url('/faturamento/cadastros/condicoesdeparcelamento') }}" >Condição Parcelamento</a></li>
                <li class=""><a href="{{ url('/faturamento/cadastros/formadepagamentos') }}" >Forma de Pagamentos</a></li>
                <li class=""><a href="{{ url('/faturamento/cadastros/categoria') }}" >Categoria</a></li>
                <li class=""><a href="{{ url('/faturamento/cadastros/substituicaotributaria') }}" >Substituição Tributária</a></li>
               </ul>
            </div>
         </li>
         <li class="">
            <a class="collapsible-header"><i class="material-icons expand right">expand_more</i>Configurações</a>
            <div class="collapsible-body" style="display: block;">
               <ul>
                  <li class=""><a href="{{ url('/faturamento/certificadodigital') }}" >Certificado Digital</a></li>
                  <li class=""><a href="{{ url('/faturamento/parametrostributarios') }}" >Parametrôs Tributários</a></li>
                  <li class=""><a href="{{ url('/faturamento/serienotafiscal') }}" >Série de Notas Fiscais</a></li>
              </ul>
            </div>
         </li>
         <li id="ajuda">
            <a class="collapsible-header"><i class="material-icons expand right">expand_more</i>Ajuda</a>
            <div class="collapsible-body">
               <ul>
               <li class=""><a href="{{ url('/faturamento/suporte') }}" onclick="">Solicitar Suporte</a>
               </ul>
            </div>
         </li>
      </ul>
   </li>
   <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
      <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
   </div>
   <div class="ps__rail-y" style="top: 0px; right: 0px;">
      <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
   </div>
</ul>