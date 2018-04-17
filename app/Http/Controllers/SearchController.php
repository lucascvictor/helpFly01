<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use App\Fly01\Repositories\PersonsRepository;

use Auth;

use Response;

class SearchController extends Controller
{

    public function autoComplete(Request $request)
    {
        return $request;
    }

}
