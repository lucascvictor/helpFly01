<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Product;

use DB;

class ClientesController extends Controller
{
    public function index()
    {
    	return view('cadastros.clientes.index');
    }

    public function new()
    {
      return view('cadastros.clientes.new');
    }


}
