<?php
namespace App\Fly01\Repositories;

use App\Http\Requests;

use App\Fly01\Models\BillToPay;

use Auth;

use DB;

class BTPRespository
{

  public function listAll()
  {
    return BillToPay::all();
  }

}
