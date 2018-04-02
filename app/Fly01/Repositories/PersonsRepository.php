<?php

namespace App\Fly01\Repositories;


use App\Http\Requests;

use App\Fly01\Models\Person;

use Auth;

use DB;

class PersonsRepository
{

  public function listCustomers()
  {
    return Person::select('*')->where('isCustomer', 1)->get();
  }

  public function listSuppliers()
  {
    return Person::select('*')->where('isSupplier', 1)->get();
  }

  public function listSallers()
  {
    return Person::select('*')->where('isSaller', 1)->get();
  }

  public function listCarrier()
  {
    return Person::select('*')->where('isCarrier', 1)->get();
  }


}
