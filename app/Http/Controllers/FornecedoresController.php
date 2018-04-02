<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fly01\Repositories\PersonsRepository;

use DB;

class FornecedoresController extends Controller
{
    public function index()
    {
      $personsRepository = new PersonsRepository;
      $suppliers = $personsRepository->listSuppliers();
    	return view('cadastros.fornecedores.index')->with('suppliers', $suppliers);
    }

    public function create()
    {
      return view('cadastros.fornecedores.create');
    }

    public function pageTour()
    {
      return view('cadastros.fornecedores.pagetour');
    }

}

