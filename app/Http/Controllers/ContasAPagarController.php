<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fly01\Repositories\PersonsRepository;

class ContasAPagarController extends Controller
{
    public function index(){
      return view('financeiro.contas_a_pagar.index');
    }

    public function create(){
      return view('financeiro.contas_a_pagar.create');
    }
    public function renegotiation(){
      $personsRepository = new PersonsRepository;
      $suppliers = $personsRepository->listSuppliers();

      return view('financeiro.contas_a_pagar.renegotiation')->with('dados', $suppliers);
      //dados são para o filtro de nomes do autocompletar
    }

    public function pageTourRenegotiation(){
      return view('financeiro.contas_a_pagar.pageTourRenegotiation');
    }
}

