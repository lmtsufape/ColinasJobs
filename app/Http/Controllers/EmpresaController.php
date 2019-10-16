<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;
use Auth;

class EmpresaController extends Controller
{
  public function cadastrarVaga(){
    return view('oportunidade');
  }
  public function adicionar(Request $request){
    // dd($request);
    Empresa::create([
      'user_id' => Auth::user()->id,
      'nome_empresa' => $request->nome_empresa,
      'descricao' => $request->descricao,
    ]);
    return view('principal_empresa');
  }
}
