<?php

namespace App\Http\Controllers\Cadastros;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class GrupoTributarioSaidaController extends Controller
{
  public function index(){
    return view('cadastros.faturamento.grupotributariosaida.index');
  }

}
