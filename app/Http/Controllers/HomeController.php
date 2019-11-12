<?php

namespace App\Http\Controllers;

use App\Candidato;
use App\Empresa;
use App\Vaga;
use Auth;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *ff
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth' => 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      // $candidato=Candidato::where('user_id', Auth::user()->id)->first();
      // // dd($candidato);
      // if(is_null($candidato)){
      //   return view('tipo_de_usuario');
      // }
      //$empresas = Empresa::orderBy('nome_empresa')->paginate(5);

      $resultadoEmpresa = DB::table('empresas')
        ->join('enderecos','empresas.id','=', 'enderecos.empresa_id')
        ->join('vagas','empresas.id','=','vagas.empresa_id')
        ->select('empresas.user_id','vagas.id','vagas.nome_vaga','empresas.nome_empresa','enderecos.uf', 'enderecos.cidade', 'enderecos.bairro','enderecos.rua', 'enderecos.numero', 'vagas.data_publicacao','vagas.atribuicoes','vagas.experiencia','vagas.descricao','vagas.quantidade','vagas.salario','vagas.vaga_para_pcd','vagas.tipo_de_vaga', 'vagas.tipo_de_remuneracao' )
        ->get();

      $candidatos = Candidato::orderBy('nome_completo')->paginate(10);
      //dd(Auth::user()->id);
        // $resultadoCandidato = DB::table('candidatos')
        // ->join('enderecos','candidatos.user_id','=','enderecos.id')
        // ->join('escolaridades','candidatos.id','=','escolaridades.candidato_id')
        // ->join('experiencias','candidatos.id','=','experiencias.id')
        // ->join('cargos','candidatos.id','=','cargos.id')
        // ->select('candidatos.nome_completo','candidatos.data_de_nascimento','candidatos.cpf','candidatos.email', 'candidatos.telefone','candidatos.celular','candidatos.nivel_de_formacao','candidatos.funcao', 'candidatos.tipo_de_deficiencia','escolaridades.instituicao','escolaridades.curso','escolaridades.data_inicio','escolaridades.data_conclusao','experiencias.nome_empresa','experiencias.atribuicao','experiencias.data_inicio', 'experiencias.data_fim','cargos.nome_cargo','enderecos.uf','enderecos.cidade','enderecos.bairro','enderecos.rua','enderecos.numero')
        // ->get();

                            // $resultado = DB::table('empresas')
                            // ->join('enderecos','empresas.id','=','enderecos.empresa_id')
                            // ->join('vagas','empresas.id','=','vagas.empresa_id')
                            // ->where('empresas.user_id','=',Auth::user()->id)
                            // ->get();

        $resultado2 = Vaga::all();
        $resultado = Empresa::where('user_id',Auth::user()->id)->get();

        $resultadoMatches = DB::table('vagas')
        ->join('matches','vagas.id','=','matches.vaga_id')
        ->where('vagas.empresa_id','=',Auth::user()->id)
        ->get();

        // $vaga = Vaga::where('empresa_id',Auth::user()->id)->get()
        // $vaga[0]->match

      $candidato=Candidato::where('user_id', Auth::user()->id)->first();
      //dd(!is_null($candidato));
      if(!is_null($candidato)){
        return view('principal_candidato',['empresas'=>$resultado2, 'candidatos'=>$candidato]);
      }else{
        return view('principal_empresa', ['empresas'=>$resultado, 'vagas'=>$resultadoMatches]);
      }
    }
}
