<?php

namespace App\Fly01\Repositories;


use App\Http\Requests;

use App\Fly01\Models\Rejeicao;

use Auth;

use DB;

class RejeicoesRepository
{

public function getRejeicoes()
{
  return Rejeicao::all();
}

public function getResolucao($id)
{
  return Rejeicao::select('resolucao')->where('n_rejeicao', '=', $id)->get();
}

}
