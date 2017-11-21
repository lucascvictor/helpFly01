<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Product;

use DB;

class HomeController extends Controller
{
    public function getIndex()
    {

    	//$products = Product::select('*')->paginate(6);
    	return view('index');//>with('products', $products);
    }

    public function getProdutos()
    {
      return view('vendas.produtos.produtos');
    }

    public function getRejeicoes()
    {
      return view('vendas.produtos.rejeicoes.rejeicoes');
    }

}
