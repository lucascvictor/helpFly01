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
    $billsToReceive;
    $billsToPay;
    $totalBank = array();
    $totalGeral = 0;
    $banks = $banksRepository->listBanks();
    $billsToReceive = $this->listAllBillsToReceive();
    $billsToPay = $this->listAllBillsToPay();

    foreach($banks as $bank)
    {
      array_push($billsToPayByBank, array($banksRepository->billsToPayByBank($bank->id)));
      array_push($billsToReceiveByBank, array($banksRepository->billsToReceiveByBank($bank->id)));
      $totalToReceive = 0;
      $totalToPay = 0;
      foreach($billsToReceive as $billToReceive) {
        if ($billToReceive->bank == $bank->id) {
          $totalToReceive += $billToReceive->value;
        }
      }
  
      foreach($billsToPay as $billToPay) { 
        if ($billToPay->bank == $bank->id) {
          $totalToPay += $billToPay->value;
        }
      }
      
      $totalBank[$bank->id] = $totalToReceive - $totalToPay;
      $totalGeral += $totalBank[$bank->id];
    }
 
    return view('financeiro.extrato.index')
    ->with('banks', $banks)
    ->with('billsToPay', $billsToPayByBank[0][0])
    ->with('billsToReceive', $billsToReceiveByBank[0][0])
    ->with('totalGeral', $totalGeral) //soma dos totais por banco
    ->with('totalBank', $totalBank); //total por banco
  }

  public function billsByBank($bank) {
    return view('financeiro.extrato.index')
    ->with('billsToPay', $this->listBillsToPay())
    ->with('billsToReceive', $this->listBillsToReceive());
  }

  public function listAllBillsToPay() {
    $btp = new BillsToPayRepository;
    return $btp->listAll();
  }

  public function listAllBillsToReceive() {
    $btr = new BillsToReceiveRepository;
    return $btr->listAll();
  }

  public function listBillsToPay($bank)
  {
    $btpRepository = new BillsToPayRepository;
    return $btpRepository->listByBank($bank);
  }

  public function listBillsToReceive($bank)
  {
    $btrRepository = new BillsToReceiveRepository;
    return $btrRepository->listByBank($bank);
  }
}
