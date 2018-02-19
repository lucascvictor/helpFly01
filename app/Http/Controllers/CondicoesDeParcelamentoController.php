<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CondicoesDeParcelamentoController extends Controller
{
  public function index(){
    return view('cadastros.condicoes_de_parcelamento.index');
  }

  public function new(){
    return view('cadastros.condicoes_de_parcelamento.new');
  }
}
