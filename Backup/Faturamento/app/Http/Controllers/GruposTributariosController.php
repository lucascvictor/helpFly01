<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Product;

use DB;

class GruposTributariosController extends Controller
{
    public function index()
    {
    	return view('cadastros.gruposTributarios.index');
    }

    public function new()
    {
      return view('cadastros.gruposTributarios.new');
    }


}
