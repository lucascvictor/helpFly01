<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fly01\Repositories\RejeicoesRepository;

use DB;

class RejeicoesController extends Controller
{
    public function getIndex()
    {

    	//$products = Product::select('*')->paginate(6);
    	return view('index');//>with('products', $products);
    }

    public function getRejeicoes()
    {
      $repository = new RejeicoesRepository;
      $rejeicoes = $repository->getRejeicoes();
      return view('vendas.produtos.rejeicoes.rejeicoes')->with('rejeicoes', $rejeicoes);
    }

    public function getResolucao($idRejeicao)
    {
      $repository = new RejeicoesRepository;
      $resolucao = $repository->getResolucao($idRejeicao);
      return view('vendas.produtos.rejeicoes.resolucao')->with('resolucao', $resolucao);
    }


}
