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
          
          'base_uri' => 'http://api.promasters.net.br/cotacao/v1/',
          
          'timeout'  => 2.0,
      ]);

      $response = $client->request('GET', 'valores');
     
      $response  = $response->getBody();

      $valores = json_decode($response, true);
      
      return view('index')->with('valores', $valores);
  }

    public function getProdutos()
    {
      return view('vendas.produtos.produtos');
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

    public function suporte()
    {
      return view('ajuda.index');
    }

    public function teste(Request $request)
    {
      If($request->teste == "lucas") {
        return view('testes.indexL');
      }
      If ($request->teste == "felipe") {
        return view('testes.indexF');
      }
    }


    public function testeFelipe()
    {
      
    }

}
