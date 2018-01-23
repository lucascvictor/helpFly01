<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Product;

use DB;

class FornecedoresController extends Controller
{
    public function index()
    {
    	return view('cadastros.fornecedores.index');
    }

    public function new()
    {
      return view('cadastros.fornecedores.new');
    }


}
