<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Product;

use DB;
use GuzzleHttp\Client;

class HomeController extends Controller
{
 
    public function index() {
      $client = new Client([
          // Base URI is used with relative requests
          'base_uri' => 'http://api.promasters.net.br/cotacao/v1/',
          // You can set any number of default request options.
          'timeout'  => 2.0,
      ]);

      $response = $client->request('GET', 'valores');

      return view('index')->with('response', $response->getBody());
  }

    public function getProdutos()
    {
      return view('vendas.produtos.produtos');
    }

    public function teste()
    {
      return view('teste');
    }

    public function getRejeicoes()
    {
      return view('vendas.produtos.rejeicoes.rejeicoes');
    }

    public function getRej211()
    {
      return view('vendas.produtos.rejeicoes.rej211');
    }

    public function voltar()
    {
      return redirect()->back();
    }

}
