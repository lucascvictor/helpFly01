<?php

namespace App\Http\Controllers\Faturamento\Configuracoes;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ParametrosTributariosController extends Controller
{
  public function index(){
    return view('faturamento.configuracoes.parametros_tributarios.index');
  }

}

   
   