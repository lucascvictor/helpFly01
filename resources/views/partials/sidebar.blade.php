<a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a>


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
        <a class="collapsible-header">Vendas<i class="material-icons expand right">expand_more</i></a>
        <div class="collapsible-body" style="display: block;">
          <ul>
            <li class=""><a href="{{ url('/produtos') }}" onclick="fly01.go(&quot;/Json/OrderNFe&quot;)">Produto</a></li>
            <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Json/OrderNFSe&quot;)">Serviço</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li class="active"><a class="collapsible-header">Notas Fiscais<i class="material-icons expand right">expand_more</i></a>
        <div class="collapsible-body" style="display: block;">
          <ul>
            <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Json/InvoiceNFe&quot;)">NF-e</a></li>
            <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Json/InvoiceNFSe&quot;)">NFS-e</a></li>
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
            <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Json/RegisterTaxGroup&quot;)">Grupos Tributários</a></li>
            <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Json/RegisterProduct&quot;)">Produtos</a></li>
            <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Json/GroupProduct&quot;)">Grupos de Produtos</a></li>
            <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Json/RegisterService&quot;)">Serviços</a></li>
            <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Json/RegisterCarrier&quot;)">Transportadoras</a></li>
            <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Json/CondicaoParcelamento&quot;)">Condições de Parcelamento</a></li>
            <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Json/CategoriaFinanceira&quot;)">Categorias Financeiras</a></li>
            <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Json/FormaPagamento&quot;)">Formas de Pagamento</a></li>
            <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Json/NCM&quot;)">NCM</a></li>
            <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;/Json/NBS&quot;)">NBS</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li class="no-padding"><ul class="collapsible collapsible-accordion"><li><a class="collapsible-header">Ajuda<i class="material-icons expand right">expand_more</i></a>
    <div class="collapsible-body"><ul>
            <li class=""><a href="javascript:void(0)" onclick="fly01.go(&quot;https://secure.logmeinrescue.com/customer/code.aspx&quot;)">Assistência Remota</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
</ul>
