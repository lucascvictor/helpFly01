<ul id="nav-mobile" class="side-nav fixed ps" style="transform: translateX(0%);">
   <li class="logo"><a id="logo-container" href="/" class="brand-logo"><img src="https://cdnfly01.azureedge.net/img/fly01branco.png"></a></li>
   <li class="no-padding">
      <ul class="side collapsible">
         <li class="">
            <a class="collapsible-header"><i class="material-icons expand right">expand_more</i>Estoque</a>
            <div class="collapsible-body" style="display: block;">
               <ul>
                  <li class=""><a href="{{ url('/estoque/visaogeral') }}" >Visão Geral</a></li>
                  <li class=""><a href="{{ url('/estoque/ajustemanual') }}" >Ajuste Manual</a></li>
                  <li class=""><a href="{{ url('/estoque/posiçãoatual') }}" >Posição Atual</a></li>
                  <li class=""><a href="{{ url('/estoque/iventario') }}" >Iventário</a></li>
              </ul>
            </div>
         </li>
         <li>
            <a class="collapsible-header"><i class="material-icons expand right">expand_more</i>Cadastros</a>
            <div class="collapsible-body">
               <ul>
                <li class=""><a href="{{ url('/estoque/cadastros/produto') }}" >Produto</a></li>
                <li class=""><a href="{{ url('/estoque/cadastros/grupodeprodutos') }}" >Grupo de Produtos</a></li>
                <li class=""><a href="{{ url('/estoque/cadastros/tipodemovimentacoes') }}" >Tipos de Movimentação</a></li>
               </ul>
            </div>
         </li>
         <li id="ajuda">
            <a class="collapsible-header"><i class="material-icons expand right">expand_more</i>Ajuda</a>
            <div class="collapsible-body">
               <ul>
               <li class=""><a href="{{ url('/suporte') }}" onclick="">Solicitar Suporte</a>
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