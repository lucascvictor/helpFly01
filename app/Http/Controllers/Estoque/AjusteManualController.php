<?php

namespace App\Http\Controllers\Estoque;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AjusteManualController extends Controller
{
    //index
    public function index(){
        return view('estoque.ajustemanual.index');
      }
    
}
