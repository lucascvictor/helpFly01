<?php

namespace App\Fly01\Repositories\Financeiro;


use App\Http\Requests;

use App\Fly01\Models\Financeiro\FinancialCategory;

use Auth;

use DB;

class FinancialsCategoriesRepository
{

  public function getCategories()
  {
    return FinancialCategory::all();
  }

}
