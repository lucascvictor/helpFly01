<?php

namespace App\Http\Controllers\Cadastros;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SubstituicaoTributariaController extends Controller
{
  public function index(){
    return view('cadastros.gerais.substituicaotributaria.index');
  }

}
