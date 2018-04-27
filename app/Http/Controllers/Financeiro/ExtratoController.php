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
    $billsToPayByBank = array();
    $billsToReceiveByBank = array();

    $banks = $banksRepository->listBanks();

    foreach($banks as $bank)
    {
      array_push($billsToPayByBank, array($banksRepository->billsToPayByBank($bank->id)));
      array_push($billsToReceiveByBank, array($banksRepository->billsToReceiveByBank($bank->id)));
    }

    dd($billsToPayByBank);
    return view('financeiro.extrato.index')
    ->with('banks', $banks)
    ->with('billsToPay', $this->listBillsToPay())
    ->with('billsToReceive', $this->listBillsToReceive());
  }

  public function billsByBank($bank) {

    return view('financeiro.extrato.index')
    ->with('billsToPay', $this->listBillsToPay())
    ->with('billsToReceive', $this->listBillsToReceive());
  }

  public function listBillsToPay()
  {
    $btpRepository = new BillsToPayRepository;
    return $btpRepository->listByBank($bank);
  }

  public function listBillsToReceive()
  {
    $btrRepository = new BillsToReceiveRepository;
    return $btrRepository->listByBank($bank);
  }
}
