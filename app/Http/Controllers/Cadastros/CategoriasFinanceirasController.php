<?php

namespace App\Http\Controllers\Cadastros;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Fly01\Repositories\FinancialsCategoriesRepository;

use DB;

class CategoriasFinanceirasController extends Controller
{
    public function index(){
      $fCR = new FinancialsCategoriesRepository;
      $categories = $fCR->getCategories();
      return view('cadastros.financeiro.categorias_financeiras.index')->with('categories', $categories);
    }

    public function create(){
      return view('cadastros.financeiro.categorias_financeiras.create');
    }
}
