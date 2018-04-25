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
    return BillToPay::all();
  }

  public function listByBank($bank)
  {
    return BillToPay::select('*')->where('bank', $bank)->get();
  }

}
