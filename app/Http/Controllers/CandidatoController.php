<?php

namespace App\Http\Controllers;

use App\Candidato;
use Illuminate\Http\Request;
use Auth;

class CandidatoController extends Controller
{
    public function cadastrarCurriculo(){
      return view('curriculum');
    }
    public function adicionar(Request $request){
      Candidato::create([
        'user_id'=>Auth::user()->id,
        'nome_completo'=>$request->nome_completo,
        'descricao'=>$request->descricao,
      ]);
      return view('principal_candidato');
    }
}
