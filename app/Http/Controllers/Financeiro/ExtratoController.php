<?php

namespace App\Http\Controllers\Financeiro;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Fly01\Repositories\Financeiro\BanksRepository;

use App\Fly01\Repositories\Financeiro\BillsToPayRepository;

use App\Fly01\Repositories\Financeiro\BillsToReceiveRepository;

use DB;

class ExtratoController extends Controller
{
  public function index(){
    $banksRepository = new BanksRepository;
    $btpRepository = new BillsToPayRepository;
    $btrRepository = new BillsToReceiveRepository;

    $billsToPay = $btpRepository->listAll();
    $billsToReceive = $btrRepository->listAll();
    $banks = $banksRepository->listBanks();

    return view('financeiro.extrato.index')
    ->with('banks', $banks)
    ->with('billsToPay', $billsToPay)
    ->with('billsToReceive', $billsToReceive);;
  }

  public function billsByBank($bank) {
    
    $btpRepository = new BillsToPayRepository;
    $btrRepository = new BillsToReceiveRepository;

    $billsToPay = $btpRepository->listByBank($bank);
    $billsToReceive = $btrRepository->listByBank($bank);

    return view('financeiro.extrato.index')
    ->with('billsToPay', $billsToPay)
    ->with('billsToReceive', $billsToReceive);
  }
}
