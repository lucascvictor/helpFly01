<?php
namespace App\Fly01\Repositories\Financeiro;

use App\Http\Requests;

use App\Fly01\Models\Financeiro\BillToPay;

use Auth;

use DB;

class BillsToPayRepository
{

  public function listAll()
  {
    return DB::table('bills_to_pay')
    ->join('banks', 'bills_to_pay.bank', '=', 'banks.id')
    ->select('bills_to_pay.*', 'banks.bancoNome')
    ->get();
  }

  public function listByBank($bank)
  {
    return DB::table('bills_to_pay')
    ->join('banks', 'banks.id', '=', 'bills_to_pay.bank')
    ->join('person', 'person.id', '=', 'bills_to_pay.person')
    ->select('bills_to_pay.*', 'banks.bancoNome', 'person.name')
    ->where('bills_to_pay.bank', $bank)
    ->get();
  }

}
