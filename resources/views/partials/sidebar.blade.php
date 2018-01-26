
<ul id="nav-mobile" class="side-nav fixed item" style="transform: translateX(0%); z-index: 500;">
  <li class="logo">
    <a id="logo-container" href="/" class="brand-logo">
    <img src="{{ url('images/fly01logobranco.png') }}">
    </a>
  </li>
  <li class="no-padding" style="border-top: solid #222222;">
    <ul class="collapsible collapsible-accordion">
      <li class="active">
        <a class="collapsible-header">Inicio</a>
      </li>
    </ul>
  </li>
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li class="active">
        <a class="collapsible-header">Financeiro<i class="material-icons expand right">expand_more</i></a>
        <div class="collapsible-body" style="display: block;">
          <ul>
            <li class=""><a href="{{ url('/produtos') }}" >Fluxo de Caixa</a></li>
            <li class=""><a href="#" >Extrato</a></li>
            <li class=""><a href="#" >Contas a Pagar</a></li>
            <li class=""><a href="#" >Contas a Receber</a></li>
            <li class=""><a href="#" >Relatório DRE</a></li>
            <li class=""><a href="#" >Conciliação Bancária</a></li>
                        
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li class=""><a class="collapsible-header">Cadastros<i class="material-icons expand right">expand_more</i></a>
        <div class="collapsible-body" style="display: none;">
          <ul>
            <li class=""><a href="{{ url('/cadastros/clientes') }}" >Clientes</a></li>
            <li class=""><a href="{{ url('/cadastros/fornecedores') }}" >Fornecedores</a></li>
            <li class=""><a href="{{ url('/cadastros/grupostributarios') }}" >Concições de Parcelamento</a></li>
            <li class=""><a href="{{ url('/cadastros/produtos') }}" >Categorias Financeiras</a></li>
            <li class=""><a href="{{ url('/cadastros/gruposdeprodutos') }}" >Formas de Pagamento</a></li>
            <li class=""><a href="{{ url('/cadastros/servicos') }}" >Contas Bancárias</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li class="no-padding"><ul class="collapsible collapsible-accordion"><li><a class="collapsible-header">Ajuda<i class="material-icons expand right">expand_more</i></a>
    <div class="collapsible-body"><ul>
            <li class=""><a href="#" onclick="fly01.go(&quot;https://secure.logmeinrescue.com/customer/code.aspx&quot;)">AssistÃªncia Remota</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
</ul>
