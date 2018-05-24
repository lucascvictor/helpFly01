<?php

namespace App\Http\Controllers\Faturamento\Configuracoes;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CertificadoDigitalController extends Controller
{
  public function index(){
    return view('faturamento.configuracoes.certificado_digital.index');
  }

}

   
   