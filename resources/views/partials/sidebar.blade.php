
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
            <li class=""><a href="{{ url('/produtos') }}" onclick="fly01.go(&quot;/Json/OrderNFe&quot;)">Fluxo de Caixa</a></li>
            <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Json/OrderNFSe&quot;)">Extrato</a></li>
            <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Json/OrderNFSe&quot;)">Contas a Pagar</a></li>
            <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Json/OrderNFSe&quot;)">Contas a Receber</a></li>
            <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Json/OrderNFSe&quot;)">Relatório DRE</a></li>
            <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Json/OrderNFSe&quot;)">Conciliação Bancária</a></li>
                        
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
            <li class=""><a href="{{ url('/cadastros/clientes') }}" onclick="fly01.go(&quot;/Json/RegisterPerson&quot;)">Clientes</a></li>
            <li class=""><a href="{{ url('/cadastros/fornecedores') }}" onclick="fly01.go(&quot;/Json/RegisterSupplier&quot;)">Fornecedores</a></li>
            <li class=""><a href="{{ url('/cadastros/grupostributarios') }}" onclick="fly01.go(&quot;/Json/RegisterTaxGroup&quot;)">Concições de Parcelamento</a></li>
            <li class=""><a href="{{ url('/cadastros/produtos') }}" onclick="fly01.go(&quot;/Json/RegisterProduct&quot;)">Categorias Financeiras</a></li>
            <li class=""><a href="{{ url('/cadastros/gruposdeprodutos') }}" onclick="fly01.go(&quot;/Json/GroupProduct&quot;)">Formas de Pagamento</a></li>
            <li class=""><a href="{{ url('/cadastros/servicos') }}" onclick="fly01.go(&quot;/Json/RegisterService&quot;)">Contas Bancárias</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li class="no-padding"><ul class="collapsible collapsible-accordion"><li><a class="collapsible-header">Ajuda<i class="material-icons expand right">expand_more</i></a>
    <div class="collapsible-body"><ul>
            <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;https://secure.logmeinrescue.com/customer/code.aspx&quot;)">AssistÃªncia Remota</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
</ul>
