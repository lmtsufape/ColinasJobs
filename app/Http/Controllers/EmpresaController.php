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
     //dd($request);
    Empresa::create([
      'user_id' => Auth::user()->id,
      'nome_empresa' => $request->nome_empresa,
      'cnpj' => $request->cnpj,
      'telefone' => $request->telefone,
      'email' => $request->email,
    ]);
    return redirect()->route('home');//view('principal_empresa');
  }
  public function buscarOportunidade(Request $request){
    $empresas = Empresa::where('nome_empresa', 'like', '%' . strtolower($request->busca) . '%')-> paginate(10);
    return view('principal_candidato', ['empresas' => $empresas]);
  }
}
