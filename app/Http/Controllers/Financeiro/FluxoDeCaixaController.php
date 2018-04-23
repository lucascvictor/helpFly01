<?php

namespace App\Http\Controllers\Financeiro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Product;
use App\Fly01\Classes\Fluxo;

use DB;

class FluxoDeCaixaController extends Controller
{
    public function index()
    {
        $fluxo = $this->getData(2000, 5000, -1000, -2000);
        return view('financeiro.fluxo_de_caixa.index')
        ->with('pag', $this->mask($fluxo['pag'],1))
        ->with('rec', $this->mask($fluxo['rec'],1))
        ->with('saldo', $this->mask($fluxo['saldo'],1))
        ->with('projetado', $this->mask($fluxo['projetado'],2))
        ->with('vPag', $fluxo['pag'])
        ->with('vRec', $fluxo['rec'])
        ->with('vSaldo', $fluxo['saldo']);
    }

    public function getByDay()
    {
        $fluxo = $this->getData(500, 1750, -250, -500);
        return view('financeiro.fluxo_de_caixa.index')
        ->with('pag', $this->mask($fluxo['pag'],1))
        ->with('rec', $this->mask($fluxo['rec'],1))
        ->with('saldo', $this->mask($fluxo['saldo'],1))
        ->with('projetado', $this->mask($fluxo['projetado'],2))
        ->with('vPag', $fluxo['pag'])
        ->with('vRec', $fluxo['rec'])
        ->with('vSaldo', $fluxo['saldo']);

    }

    public function getByWeek()
    {
        $fluxo = $this->getData(1000, 2500, -500, -1000);
        return view('financeiro.fluxo_de_caixa.index')
        ->with('pag', $this->mask($fluxo['pag'],1))
        ->with('rec', $this->mask($fluxo['rec'],1))
        ->with('saldo', $this->mask($fluxo['saldo'],1))
        ->with('projetado', $this->mask($fluxo['projetado'],2))
        ->with('vPag', $fluxo['pag'])
        ->with('vRec', $fluxo['rec'])
        ->with('vSaldo', $fluxo['saldo']);
    }

    public function mask($aValores, $tipo)
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


  public function getData($recIni, $recFim, $pagIni, $pagFim)
  {
    $fluxo = new Fluxo;
    $dados['rec'] = $fluxo->getRecebimentos($recIni, $recFim);
    $dados['pag'] = $fluxo->getPagamentos($pagIni, $pagFim);
    $dados['saldo'] = $fluxo->getSaldo($dados['rec'], $dados['pag']);
    $dados['projetado'] = $fluxo->getProjetado($dados['saldo'],$dados['rec'], $dados['pag']);

    return $dados;
  }
    



}
