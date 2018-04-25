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
    return BillToReceive::all();
  }

  public function listByBank($bank)
  {
    return BillToPay::select('*')->where('bank', $bank)->get();
  }

}
