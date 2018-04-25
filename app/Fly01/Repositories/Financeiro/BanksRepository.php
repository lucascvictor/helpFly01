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

}
