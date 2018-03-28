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

  /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $paymentsMethodsRepository = new PaymentsMethodsRepository;
      $paymentMethod = $paymentsMethodsRepository->getPaymentMethod($id);    
      return view('cadastros.formas_de_pagamento.edit')->with('paymentMethod', $paymentMethod);
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
