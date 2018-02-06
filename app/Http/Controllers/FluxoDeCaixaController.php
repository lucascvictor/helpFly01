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
        return view('financeiro.fluxo_de_caixa.index')
        ->with('pag', $pag)
        ->with('rec', $rec)
        ->with('saldo', $fluxo->getSaldo($rec, $pag));
    }

    public function getChart()
    {
        $fluxo = new Fluxo;
        return view('financeiro.chart')
        ->with('pag', $fluxo->getPagamentos())
        ->with('rec', $fluxo->getRecebimentos());
    }

}
