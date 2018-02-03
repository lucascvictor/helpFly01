<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContasAReceberController extends Controller
{
      public function index(){
        return view('financeiro.contas_a_receber.index');
      }
}
