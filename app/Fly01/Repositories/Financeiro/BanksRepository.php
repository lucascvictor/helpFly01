<?php
namespace App\Fly01\Repositories\Financeiro;


use App\Http\Requests;

use App\Fly01\Models\Financeiro\Bank;

use Auth;

use DB;

class BanksRepository
{

  public function listBanks()
  {
    return Bank::all();
  }

  public function billsToPayByBank($bank)
  {
    return DB::table('bills_to_pay')
    ->join('banks', 'banks.id', '=', 'bills_to_pay.bank')
    ->join('person', 'person.id', '=', 'bills_to_pay.person')
    ->select('bills_to_pay.*', 'banks.bancoNome', 'person.name')
    //->where('bills_to_pay.bank', $bank)
    ->get();
  }

  public function billsToReceiveByBank($bank)
  {
    return DB::table('bills_to_receive')
    ->join('banks', 'banks.id', '=', 'bills_to_receive.bank')
    ->join('person', 'person.id', '=', 'bills_to_receive.person')
    ->select('bills_to_receive.*', 'banks.bancoNome', 'person.name')
    //->where('bills_to_receive.bank', $bank)
    ->get();
  }

}
