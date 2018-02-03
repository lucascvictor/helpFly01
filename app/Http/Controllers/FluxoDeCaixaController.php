<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Product;

use DB;

class FluxoDeCaixaController extends Controller
{
    public function index()
    {
    	return view('financeiro.fluxo_de_caixa.index');
    }

}
