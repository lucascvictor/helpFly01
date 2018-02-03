<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DreController extends Controller
{
  public function index(){
    return view('financeiro.dre.index');
  }
}
