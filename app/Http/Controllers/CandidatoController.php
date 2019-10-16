<?php

namespace App\Http\Controllers;

use App\Candidato;
use Illuminate\Http\Request;
use App\Empresa;
use App\Vaga;
use App\Endereco;
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

    public function buscarNaoLogado(Request $request){
        $string_de_busca1 = '%' . strtolower($request->campo_texto1) . '%';
        $string_de_busca2 = '%' . strtolower($request->campo_texto2) . '%';

        $nome_empresa = Empresa::where('nome_empresa', 'like', $string_de_busca1)->take(10)->get();
        $nome_vaga = Vaga::where('nome_vaga', 'like', $string_de_busca1)->take(10);
        $id_endereco = Endereco::where('cidade', 'like', $string_de_busca2)->take(10);
        $cidade = Vaga::whereIn('endereco_id', $id_endereco)->take(10);
        // dd($nome_empresa);
        return view('resultado_busca_nao_logado', [
                                                    'nome_empresa' => $nome_empresa,
                                                    'nome_vaga'    => $nome_vaga,
                                                    'cidade'       => $cidade,
                                                  ]);

    }

}
