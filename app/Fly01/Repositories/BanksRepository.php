<?php

namespace App\Fly01\Repositories;


use App\Http\Requests;

use App\Fly01\Models\Bank;

use Auth;

use DB;

class BanksRepository
{

  public function listBanks()
  {
    return Bank::all();
  }

}
