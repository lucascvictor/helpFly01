<?php

namespace App\Http\Controllers\Cadastros;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Fly01\Repositories\Financeiro\BanksRepository;

use DB;

class ContasBancariasController extends Controller
{
  public function index(){
    $banksRepository = new BanksRepository;
    $banks = $banksRepository->listBanks();
    return view('cadastros.financeiro.contas_bancarias.index')->with('banks', $banks);
  }

  public function create(){
    return view('cadastros.financeiro.contas_bancarias.create');
  }
}
