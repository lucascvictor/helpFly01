<?php

namespace App\Fly01\Repositories;


use App\Http\Requests;

use App\Fly01\Models\TermOfPayment;

use Auth;

use DB;

class TermOfPaymentRepository
{

public function getCategories()
{
  return FinancialCategory::all();
}


}
