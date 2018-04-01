<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fly01\Repositories\FinancialsCategoriesRepository;

use DB;

class CategoriasFinanceirasController extends Controller
{
    public function index(){
      $fCR = new FinancialsCategoriesRepository;
      $categories = $fCR->getCategories();
      return view('cadastros.categorias_financeiras.index')->with('categories', $categories);
    }

    public function create(){
      return view('cadastros.categorias_financeiras.create');
    }
}
