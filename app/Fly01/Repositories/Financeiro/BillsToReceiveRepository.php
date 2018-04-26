<?php
namespace App\Fly01\Repositories\Financeiro;

use App\Http\Requests;

use App\Fly01\Models\Financeiro\BillToReceive;

use Auth;

use DB;

class BillsToReceiveRepository
{

  public function listAll()
  {
    return DB::table('bills_to_receive')
    ->join('banks', 'bills_to_receive.bank', '=', 'banks.id')
    ->select('bills_to_receive.*', 'banks.bancoNome')
    ->get();
  }

  public function listByBank($bank)
  {
    return DB::table('bills_to_receive')
    ->join('banks', 'bills_to_receive.bank', '=', 'bank.id')
    ->select('bills_to_receive.*', 'banks.bancoNome')
    ->where('bills_to_receive.bank', $bank)
    ->get();
  }

}
