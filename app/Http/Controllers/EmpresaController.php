<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Endereco;
use App\Vaga;
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

    // dd(Auth::user()->empresa);
    Vaga::create([
        'empresa_id' => Auth::user()->empresa->id,
        'data_publicacao' => date("Y-m-d H:i:s"),
        'nome_vaga' => $request->nome_vaga,
        'atribuicoes' => $request->atribuicoes,
        'experiencia' => $request->experiencia,
        'descricao' => $request->descricao,
        'quantidade' => $request->quantidade,
        'salario' => $request->salario,
        'vaga_para_pcd' => $request->vaga_para_pcd,
        'tipo_de_vaga' => $request->tipo_de_vaga,
        'tipo_de_remuneracao' => $request->tipo_de_remuneracao,
    ]);
    Endereco::create([
        'empresa_id' => Auth::user()->empresa->id,
        'uf' => $request->uf,
        'cidade' => $request->cidade,
        'bairro' => $request->bairro,
        'rua' => $request->rua,
        'numero' => $request->numero,
    ]);

    return redirect()->route('home');//view('principal_empresa');
  }
  public function buscarOportunidade(Request $request){
    $empresas = Empresa::where('nome_empresa', 'like', '%' . strtolower($request->busca) . '%')-> paginate(10);
    return view('principal_candidato', ['empresas' => $empresas]);
  }
}
