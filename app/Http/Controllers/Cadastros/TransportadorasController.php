<?php

namespace App\Http\Controllers\Cadastros;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TransportadorasController extends Controller
{
  public function index(){
    return view('cadastros.faturamento.transportadoras.index');
  }

}
