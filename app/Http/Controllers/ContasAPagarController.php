<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContasAPagarController extends Controller
{
    public function index(){
      return view('financeiro.contas_a_pagar.index');
    }

    public function create(){
      return view('financeiro.contas_a_pagar.create');
    }
    public function renegotiation(){
      return view('financeiro.contas_a_pagar.renegotiation');
    }

    public function pageTourRenegotiation(){
      return view('financeiro.contas_a_pagar.pageTourRenegotiation');
    }
}

