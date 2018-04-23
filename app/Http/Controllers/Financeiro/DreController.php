<?php

namespace App\Http\Controllers\Financeiro;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class DreController extends Controller
{
  public function index(){
    return view('financeiro.dre.index');
  }
}
