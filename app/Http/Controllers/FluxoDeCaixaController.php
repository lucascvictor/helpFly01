<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Product;
use App\Fly01\Classes\Fluxo;

use DB;

class FluxoDeCaixaController extends Controller
{
    public function index()
    {
        $fluxo = new Fluxo;
        $rec = $fluxo->getRecebimentos();
        $pag = $fluxo->getPagamentos();
        $saldo = $fluxo->getSaldo($rec, $pag);
        return view('financeiro.fluxo_de_caixa.index')
        ->with('pag', $this->mask($pag))
        ->with('rec', $this->mask($rec))
        ->with('saldo', $this->mask($saldo))
        ->with('vPag', $pag)
        ->with('vRec', $rec)
        ->with('vSaldo', $saldo);
    }


    function mask($aValores)
	{
    $i = 0;
     While ($i <= count($aValores)-1) {
        $aMasks[$i] = 'R$' . number_format($aValores[$i], 2, ',', '.');
        $i++;
     }
	 return $aMasks;
	}

}
