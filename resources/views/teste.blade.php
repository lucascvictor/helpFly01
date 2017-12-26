<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <!--Import Google Icon Font-->
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <!--Import jQuery before materialize.js-->
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">


 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script type="text/javascript">
  // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();
  $('.button-collapse').sideNav({
    menuWidth: 300, // Default is 300
    edge: 'left', // Choose the horizontal origin
    closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
    draggable: true, // Choose whether you can drag to open on touch screens,
    onOpen: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is opened
    onClose: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is closed
  }
);

$('.button-collapse').sideNav({
      menuWidth: 300, // Default is 240
      closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
  );
  $('.collapsible').collapsible();
  </script>
  <style media="screen">
  .item:hover{
  	background-color: #696969;
  }



  .item ul a{
  	background-color: #000000;
  	color: #F37021;
  	border-bottom: 1px solid #444547;
    font-size: 18px;
  }

  .item ul a:hover{
  	background-color: #696969;
    border-bottom: 1px solid #444547;
  }

.item li{
  background-color: #222222;
  border-top: 0.4px solid #444547;
  color: #FFFFFF;
}

  .menu{
    background-color: #FFF;

  }

  .titulo{
    color: #F37021;
    margin-left:25%;
    font-size: 25px;
  }

  </style>
  </head>
  <body>

    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="#!">Empresa</a></li>
      <li><a href="#!">Parâmetros</a></li>
    </ul>
    <nav>
      <div class="nav-wrapper menu" >
        <a href="#!" class="brand-log menu left titulo">FATURAMENTO</a>
        <ul class="right hide-on-med-and-down"><!--
          <li><a href="sass.html"style="color: #000;">Sass</a></li>
          <li><a href="badges.html" style="color: #000;">Components</a></li>
           Dropdown Trigger -->
          <li><a class="dropdown-button" style="color: #000;" href="#!" data-activates="dropdown1">Fly01<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
      </div>
    </nav>

  <ul class="hide-on-med-and-down">
    <li><a href="#!">Fly01</a></li>
    <li><a href="#!">Second Sidebar Link</a></li>
  </ul>
  <ul id="slide-out" class="item side-nav fixed" style="background-color: #222222;">

        <ul class="collapsible collapsible-accordion">
          <li>
            <img src="{{ url('images/fly01logobranco.png') }}" width="35%;" style="margin: 20px;">
          </li>
          <li style="border-top: 1px solid #222222;">
            <a class="collapsible-header">Vendas<i class="mdi-navigation-arrow-drop-down"></i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="#!">Produtos</a></li>
                <li><a href="#!">Serviços</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a class="collapsible-header waves-teal">Notas Fiscais<i class="mdi-navigation-arrow-drop-down"></i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="#!">NFe</a></li>
                <li><a href="#!">NFSe</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a class="collapsible-header waves-teal">Cadastros<i class="mdi-navigation-arrow-drop-down"></i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="#!">Clientes</a></li>
                <li><a href="#!">Fornecedores</a></li>
                <li><a href="#!">Grupos Tributários</a></li>
                <li><a href="#!">Produtos</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a class="collapsible-header waves-teal">Ajuda<i class="mdi-navigation-arrow-drop-down"></i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="#!">Assistência Remota</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>

  </body>
</html>
