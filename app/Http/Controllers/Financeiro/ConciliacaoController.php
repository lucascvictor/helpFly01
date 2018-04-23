<?php

namespace App\Http\Controllers\Financeiro;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class ConciliacaoController extends Controller
{
  public function index(){
    return view('financeiro.conciliacao.index');
  }

  public function create(){
    return view('financeiro.conciliacao.create');
  }
}
