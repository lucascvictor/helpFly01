<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Product;

use DB;

class FluxoDeCaixaController extends Controller
{
    public function index()
    {
    	return view('financeiro.fluxodecaixa.index');
    }

    public function getChart()
    {
      return view('financeiro.chart');
    }


}
