<?php

namespace App\Fly01\Repositories;

use App\Http\Requests;

use App\Fly01\Models\PaymentMethod;

use Auth;

use DB;

class PaymentsMethodsRepository
{

    public function getPaymentsMethods()
    {
        return PaymentMethod::all();
    }

    public function getPaymentMethod($id)
    {
        return PaymentMethod::select('*')->where('id','=', $id)->first();
    }

}
