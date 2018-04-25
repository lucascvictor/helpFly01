<?php

namespace App\Http\Controllers\Financeiro;

use Illuminate\Http\Request;

use App\Fly01\Repositories\Financeiro\BillsToReceiveRepository;

use App\Http\Controllers\Controller;

class BillsToReceiveController extends Controller
{
    public function index(){
        $btrRepository = new BillsToReceiveRepository;
        $billsToReceive = $btrRepository->listAll();
 
        return view('financeiro.contas_a_receber.index')->with('billsToReceive', $billsToReceive);
      }

    public function create(){
        return view('financeiro.contas_a_receber.create');
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
