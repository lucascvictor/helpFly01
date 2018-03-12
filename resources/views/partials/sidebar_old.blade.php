
<ul id="nav-mobile" class="side-nav fixed item" style="transform: translateX(0%); z-index: 500;">
  <li class="logo">
    <a id="logo-container" href="/" class="brand-logo">
    <img src="{{ url('images/fly01logobranco.png') }}">
    </a>
  </li>
  <li class="no-padding" style="border-top: solid #222222;">
    <ul class="collapsible collapsible-accordion">
      <li class="active">
        <a class="collapsible-header" href="{{ url('/') }}">Inicio</a>
      </li>
    </ul>
  </li>
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li class="active">
        <a class="collapsible-header">Financeiro<i class="material-icons expand right">expand_more</i></a>
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
    </ul>
  </li>
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li class=""><a class="collapsible-header">Cadastros<i class="material-icons expand right">expand_more</i></a>
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
    </ul>
  </li>
  <li class="no-padding"><ul class="collapsible collapsible-accordion"><li><a class="collapsible-header">Ajuda<i class="material-icons expand right">expand_more</i></a>
    <div class="collapsible-body"><ul>
            <li class=""><a href="{{ url('/suporte') }}" onclick="">Solicitar Suporte</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
</ul>
