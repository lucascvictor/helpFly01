<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fly01\Repositories\PaymentsMethodsRepository;

class FormasDePagamentoController extends Controller
{
  public function index(){
    $paymentsMethodsRepository = new PaymentsMethodsRepository;
    $paymentsMethods = $paymentsMethodsRepository->getPaymentsMethods();
    return view('cadastros.formas_de_pagamento.index')->with('paymentsMethods', $paymentsMethods);
  }

  public function create(){
    return view('cadastros.formas_de_pagamento.create');
  }
}
