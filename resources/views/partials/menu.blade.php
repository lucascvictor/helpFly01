 <!-- Menu de navegação -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Grupo para dispositivos mobile -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="{{ url('image/fly01logobranco.png') }}" style="width: 70px; height: 50px;"></a>
            </div>
            <!-- Parte de cima do menu -->

            <!-- Itens da barra lateral -->

            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <ul class="nav navbar-nav side-nav">
                    <!-- Como não armazenei o menu no banco de dados -->

                    <li class="nav-item dropdown">
                      <a href="javascript:void(0)" class="nav-link">
                          <img src="assets/images/user_icon.png">
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-fw fa-user"></i> Empresa</a>
                          <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-fw fa-envelope"></i> Parâmetros</a>
                          <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-fw fa-gear"></i> Certificado</a>
                          <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-fw fa-gear"></i> Série NF</a>
                          <a class="dropdown-item" [routerLink]="['/login']" (click)="onLoggedout()"><i class="fa fa-fw fa-power-off"></i> Sair </a>
                      </div>
                  </li>
              </ul>

                </ul>
            </div>

        </nav>
