<?php

namespace App\Http\Controllers\Cadastros;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Fly01\Repositories\PersonsRepository;

use DB;

class FornecedoresController extends Controller
{
    public function index()
    {
      $personsRepository = new PersonsRepository;
      $suppliers = $personsRepository->listSuppliers();
    	return view('cadastros.gerais.fornecedores.index')->with('suppliers', $suppliers);
    }

    public function create()
    {
      return view('cadastros.gerais.fornecedores.create');
    }

    public function pageTour()
    {
      return view('cadastros.gerais.fornecedores.pagetour');
    }

    public function import()
    {
      return view('cadastros.gerais.fornecedores.import');
    }


}

