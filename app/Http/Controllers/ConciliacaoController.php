<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConciliacaoController extends Controller
{
  public function index(){
    return view('financeiro.conciliacao.index');
  }

  public function create(){
    return view('financeiro.conciliacao.create');
  }
}
