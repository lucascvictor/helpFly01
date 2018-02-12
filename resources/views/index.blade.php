@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')


<div class="row">
        <div id="page-wrapper">
            




<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-xs-12">
                    <div class="col-md-4 col-xs-6 installedApp">
                        <div class="fmcircle_out">
                            <a href="https://novofinanceiro.fly01.com.br">
                                <div class="fmcircle_border">
                                    <div class="fmcircle_in fmcircle_orange">
                                        <span>Financeiro (Novo)</span><img src="http://187.94.62.174/AuthServer/Images/AppImages/9431cdb8_image.png" alt="" />
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6 installedApp">
                        <div class="fmcircle_out">
                            <a href="https://novofaturamento.fly01.com.br">
                                <div class="fmcircle_border">
                                    <div class="fmcircle_in fmcircle_orange">
                                        <span>Faturamento (Novo)</span><img src="http://187.94.62.174/AuthServer/Images/AppImages/dfc2cdaa_image.png" alt="" />
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6 installedApp">
                        <div class="fmcircle_out">
                            <a href="https://novocompras.fly01.com.br">
                                <div class="fmcircle_border">
                                    <div class="fmcircle_in fmcircle_orange">
                                        <span>Compras (Novo)</span><img src="http://187.94.62.174/AuthServer/Images/AppImages/a8e5f1ce_image.png" alt="" />
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6 installedApp">
                        <div class="fmcircle_out">
                            <a href="https://novoestoque.fly01.com.br">
                                <div class="fmcircle_border">
                                    <div class="fmcircle_in fmcircle_orange">
                                        <span>Estoque (Novo)</span><img src="http://187.94.62.174/AuthServer/Images/AppImages/79579272_image.png" alt="" />
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

        </div>
    </div>




<div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large orange" style="width: 100px; height: 100px;">
      Acesse o helpFly
    </a>
    <ul>
      <li><a class="btn-floating red" style="margin: 9px;"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1" style="margin: 9px;"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green" style="margin: 9px;"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue" style="margin: 9px;"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>



@endsection


@section('extrascript')

<script type="text/javascript">

  $('.fixed-action-btn').openFAB();
  $('.fixed-action-btn').closeFAB();

</script>

@endsection