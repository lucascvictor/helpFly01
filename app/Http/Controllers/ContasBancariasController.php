<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fly01\Repositories\BanksRepository;

use DB;

class ContasBancariasController extends Controller
{
  public function index(){
    $banksRepository = new BanksRepository;
    $banks = $banksRepository->listBanks();
    return view('cadastros.contas_bancarias.index')->with('banks', $banks);
  }

  public function create(){
    return view('cadastros.contas_bancarias.create');
  }
}
