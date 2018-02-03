<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContasBancariasController extends Controller
{
  public function index(){
    return view('cadastros.contas_bancarias.index');
  }
}
