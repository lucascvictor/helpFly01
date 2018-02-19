<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriasFinanceirasController extends Controller
{
    public function index(){
      return view('cadastros.categorias_financeiras.index');
    }

    public function create(){
      return view('cadastros.categorias_financeiras.create');
    }
}
