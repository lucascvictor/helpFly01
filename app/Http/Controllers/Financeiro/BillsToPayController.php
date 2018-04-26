<?php

namespace App\Http\Controllers\Financeiro;

use Illuminate\Http\Request;

use App\Fly01\Repositories\PersonsRepository;

use App\Fly01\Repositories\Financeiro\BillsToPayRepository;

use App\Http\Controllers\Controller;

class BillsToPayController extends Controller
{
    public function index(){
        $btpRepository = new BillsToPayRepository;
        $billsToPay = $btpRepository->listAll();
        
        return view('financeiro.contas_a_pagar.index')->with('billsToPay', $billsToPay);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
}
