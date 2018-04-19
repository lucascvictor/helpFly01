<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fly01\Repositories\BanksRepository;

use DB;

class ExtratoController extends Controller
{
  public function index(){
    $banksRepository = new BanksRepository;
    $banks = $banksRepository->listBanks();
    return view('financeiro.extrato.index')->with('banks', $banks);
  }
}
