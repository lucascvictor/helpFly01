<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormasDePagamentoController extends Controller
{
  public function index(){
    return view('cadastros.formas_de_pagamento.index');
  }

  public function new(){
    return view('cadastros.formas_de_pagamento.new');
  }
}
