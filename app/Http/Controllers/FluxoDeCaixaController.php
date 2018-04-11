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
        $projetado = $fluxo->getProjetado($saldo,$rec, $pag);
        return view('financeiro.fluxo_de_caixa.index')
        ->with('pag', $this->mask($pag,1))
        ->with('rec', $this->mask($rec,1))
        ->with('saldo', $this->mask($saldo,1))
        ->with('projetado', $this->mask($projetado,2))
        ->with('vPag', $pag)
        ->with('vRec', $rec)
        ->with('vSaldo', $saldo);
    }


    function mask($aValores, $tipo)
	{
    if ($tipo == 1) {
        $i = 0;
        While ($i <= count($aValores)-1) {
            $aMasks[$i] = 'R$' . number_format($aValores[$i], 2, ',', '.');
            $i++;
        }
    } elseIf($tipo == 2) {
        $aMasks = 'R$' . number_format($aValores, 2, ',', '.');
    }
    
	 return $aMasks;
	}

}
