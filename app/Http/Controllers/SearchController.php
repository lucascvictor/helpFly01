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
        /* $query = $request->get('term','');
      
        $personsRepository = new PersonsRepository;
        $suppliers = $personsRepository->listSuppliers();
        
        $data=array();
        foreach ($suppliers as $suplier) {
                $data[]=array('value'=>$suppliers->name,'id'=>$suppliers->id);
        }
        if(count($data))
             return Response::json($data);
        else
            return ['value'=>'No Result Found','id'=>'']; */
     $query = Str::lower(Input::get(''));
     
     $personsRepository = new PersonsRepository;
     $suppliers = $personsRepository->listSuppliers();

     foreach($suppliers as $supplier) {
        $array[] = array('value' => $supplier->name);
     }
     
     return Response::json($array);
    }
}
