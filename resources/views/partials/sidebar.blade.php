<ul id="nav-mobile" class="side-nav fixed ps" style="transform: translateX(0px);">
   <li class="logo">
   <a id="logo-container" href="/" class="brand-logo">
   <img src="https://cdnfly01.azureedge.net/img/fly01branco.png">
   </a>
   </li>
   <li class="no-padding">
      <ul class="side collapsible">
         <li class="">
            <a class="collapsible-header"><i class="material-icons expand right">expand_more</i>Financeiro</a>
            <div class="collapsible-body" style="display: block;">
               <ul>
                <li class=""><a href="{{ url('/financeiro/fluxodecaixa') }}" >Fluxo de Caixa</a></li>
                <li class=""><a href="{{ url('/financeiro/extrato') }}" >Extrato</a></li>
                <li class=""><a href="{{ url('/financeiro/contasapagar') }}" >Contas a Pagar</a></li>
                <li class=""><a href="{{ url('/financeiro/contasareceber') }}" >Contas a Receber</a></li>
                <li class=""><a href="{{ url('/financeiro/relatoriodre') }}" >Relatório DRE</a></li>
                <li class=""><a href="{{ url('/financeiro/conciliacaobancaria') }}" >Conciliação Bancária</a></li>
                </ul>
            </div>
         </li>
         <li class="">
            <a class="collapsible-header"><i class="material-icons expand right">expand_more</i>Cadastros</a>
            <div class="collapsible-body" style="display: none;">
               <ul>
                <li class=""><a href="{{ url('/cadastros/clientes') }}" >Clientes</a></li>
                <li class=""><a href="{{ url('/cadastros/fornecedores') }}" >Fornecedores</a></li>
                <li class=""><a href="{{ url('/cadastros/condicoesdeparcelamento') }}" >Condições de Parcelamento</a></li>
                <li class=""><a href="{{ url('/cadastros/categoriasfinanceiras') }}" >Categorias Financeiras</a></li>
                <li class=""><a href="{{ url('/cadastros/formasdepagamento') }}" >Formas de Pagamento</a></li>
                <li class=""><a href="{{ url('/cadastros/contasbancarias') }}" >Contas Bancárias</a></li>
               </ul>
            </div>
         </li>
         <li class="">
            <a class="collapsible-header"><i class="material-icons expand right">expand_more</i>Configurações</a>
            <div class="collapsible-body" style="display: none;">
               <ul>
                  <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/ConfiguracaoNotificacao/Form&quot;)">Notificações</a></li>
               </ul>
            </div>
         </li>
         <li>
            <a class="collapsible-header"><i class="material-icons expand right">expand_more</i>Ajuda</a>
            <div class="collapsible-body">
               <ul>
                <li class=""><a href="{{ url('/suporte') }}" onclick="">Solicitar Suporte</a>
                </li>
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