<?php
namespace App\Fly01\Repositories;

use App\Http\Requests;

use App\Fly01\Models\BillToReceive;

use Auth;

use DB;

class BTRRespository
{

  public function listAll()
  {
    return BillToReceive::all();
  }

}
