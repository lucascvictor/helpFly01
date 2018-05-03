<?php

namespace App\Http\Controllers\Estoque;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InventarioController extends Controller
{
    //index
    public function index(){
        return view('estoque.inventario.index');
      }
    
}
