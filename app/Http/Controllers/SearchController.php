<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use App\Fly01\Repositories\PersonsRepository;

use Auth;

use Response;

class SearchController extends Controller
{
    public function autoComplete(Request $request) {
        $query = $request->get('term','');
        $personsRepository = new PersonsRepository;
        $suppliers = $personsRepository->listSuppliers();
        
        $data=array();
        foreach ($suppliers as $suplier) {
                $data[]=array('value'=>$suppliers->name,'id'=>$suppliers->id);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
    }
}
