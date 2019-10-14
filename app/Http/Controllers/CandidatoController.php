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
        'cpf'=>$request->cpf,
        'email'=>$request->email,
        'data_de_nascimento'=>$request->data_de_nascimento,
        'telefone'=>$request->telefone,
        'celular'=>$request->celular,
        'nivel_de_formacao'=>$request->nivel_de_formacao,
        'tipo_de_deficiencia'=>$request->tipo_de_deficiencia,
      ]);
      return redirect()->route('home');//view('principal_candidato');
    }
    public function buscarCandidato(Request $request){
        $candidatos = Candidato::where('nome_completo', 'like', '%' . strtolower($request->busca) . '%')-> paginate(10);
        return view('principal_empresa', ['candidatos' => $candidatos]);
      }
}
