<?php

namespace App\Http\Controllers\Estoque;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisaoGeralController extends Controller
{
    //index
    public function index(){
        return view('estoque.visaogeral.index');
      }
    
}
