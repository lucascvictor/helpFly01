<?php

namespace App\Http\Controllers\Cadastros;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CondicoesDeParcelamentoController extends Controller
{
  public function index(){
    return view('cadastros.financeiro.condicoes_de_parcelamento.index');
  }

  public function create(){
    return view('cadastros.financeiro.condicoes_de_parcelamento.create');
  }
}
