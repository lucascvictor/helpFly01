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
  public $billsToPayByBank = array();
  public $billsToReceiveByBank = array();
  private $billsToReceive;
  private $billsToPay;
  private $totalBank = array();
  private $totalGeral;
  private $banks;

  public function __construct() {
    $banksRepository = new BanksRepository;
    $this->setTotalGeral(0);
    $this->banks = $banksRepository->listBanks();
  }

  public function setTotalGeral($total) {
    $this->totalGeral += $total;
  }

  public function getTotalgeral() {
    return $this->totalGeral;
  }

  public function setTotalByBank($total, $indice) {
    $this->totalBank[$indice] = $total;
  }

  public function getTotalByBank($indice) {
    return $this->totalBank[$indice];
  }

  public function getTotalBank() {
    return $this->totalBank;
  }

  public function getBillsToPay() {
    return $this->billsToPay;
  }

  public function setBillsToPay($value) {
     $this->billsToPay = $value;
  }

  public function getBillsToReceive() {
    return $this->billsToReceive;
  }

  public function setBillsToReceive($value) {
     $this->billsToReceive = $value;
  }

  public function getBanks() {
    return $this->banks;
  }

  public function getBillsToPayByBank() {
    return $this->billsToPayByBank;
  }

  public function setBillsToPayByBank($bills) {
    array_push($this->billsToPayByBank, $bills);
  }

  public function getBillsToReceiveByBank() {
    return $this->billsToReceiveByBank;
  }

  public function setBillsToReceiveByBank($bills) {
    array_push($this->billsToReceiveByBank, $bills);
  }

  public function index(){
    
    $this->motor();
    return view('financeiro.extrato.index')
    ->with('banks', $this->getBanks())
    ->with('billsToPay', $this->billsToPayByBank[0][0])
    ->with('billsToReceive', $this->billsToReceiveByBank[0][0])
    ->with('totalGeral', $this->getTotalGeral()) //soma dos totais por banco
    ->with('totalBank', $this->getTotalBank()); //total por banco
  }

  public function motor() {
    $banksRepository = new BanksRepository;
    foreach($this->getBanks() as $bank)
    {
      $this->setBillsToPayByBank($banksRepository->billsToPayByBank($bank->id));
      $this->setBillsToReceiveByBank($banksRepository->billsToReceiveByBank($bank->id));
      
      $this->setBillsToReceive($this->totalToReceiveByBank($bank));
      $this->setBillsToPay($this->totalToPayByBank($bank));
      $this->setTotalByBank($this->totalByBank($bank), $bank->id);
      $this->setTotalByBank($this->totalBank[$bank->id], $bank->id);
      $this->setTotalGeral($this->getTotalByBank($bank->id)); 
    }
    
  }

  public function billsByBank($bank) {
    return view('financeiro.extrato.index')
    ->with('billsToPay', $this->listBillsToPay($bank))
    ->with('billsToReceive', $this->listBillsToReceive($bank))
    ->with('totalGeral', $this->getTotalGeral()) //soma dos totais por banco
    ->with('totalBank', $this->getTotalBank()); //total por banco;
  }

  public function totalGeral($bank) {
    $totalGeral = 0;
    $totalGeral += $totalBank[$bank->id];
    return $totalGeral;
  }

  public function totalByBank($bank) {
    $totalToReceive = 0;
    $totalToPay = 0;
    $totalBank = 0;
    
    $totalToPay = $this->totalToPayByBank($bank);
    $totalToReceive = $this->totalToReceiveByBank($bank);
    
    $totalBank = $totalToReceive - $totalToPay;

    return $totalBank;
  }

  public function totalToReceiveByBank($bank) {
    $billsToReceive = $this->listAllBillsToReceive();
    $totalToReceive = 0;

    foreach($billsToReceive as $billToReceive) {
      if ($billToReceive->bank == $bank->id) {
        $totalToReceive += $billToReceive->value;
      }
    }

    return $totalToReceive;
  }

  public function totalToPayByBank($bank) {
    $billsToPay = $this->listAllBillsToPay();
    $totalToPay = 0;

    foreach($billsToPay as $billToPay) { 
      if ($billToPay->bank == $bank->id) {
        $totalToPay += $billToPay->value;
      }
    }

    return $totalToPay;
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
