<?php

namespace App\Fly01\Repositories;


use App\Http\Requests;

use App\Fly01\Models\FinancialCategory;

use Auth;

use DB;

class FinancialsCategoriesRepository
{

public function getCategories()
{
  return FinancialCategory::all();
}


}
