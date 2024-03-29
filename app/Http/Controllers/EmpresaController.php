<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Endereco;
use App\Vaga;
use App\Favorito;
use App\Candidato;
use Illuminate\Http\Request;
use Auth;
use DB;

class EmpresaController extends Controller
{
  public function cadastrarVaga(){
    return view('oportunidade');
  }

  public function adicionar(Request $request){
/*
    $validatedData = $request->validate([

        'nome_empresa'          => 'required|string|max:255',
        'cnpj'                  => 'required|numeric',
        'telefone'              => 'required',
        'email'                 => 'required|email',

        'nome_vaga'             =>  'required|string|max:255',
        'atribuicoes'           =>  'required|string|max:255',
        'experiencia'           =>  'required|string|max:255',
        'descricao'             =>  'required|string|max:255',
        'quantidade'            =>  'numeric',
        'salario'               =>  'numeric',
        'tipo_de_remuneracao'   =>  'required|string|max:255',

        'uf'                    =>  'required',
        'cidade'                =>  'required',
        'bairro'                =>  'required',
        'rua'                   =>  'required',
        'numero'                =>  'required',

      ]);


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
        'data_publicacao' => date("d-m-Y"),
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
*/
    return redirect()->route('home');//view('principal_empresa');
  }

  public function adicionarEmpresa(Request $request){

    $validatedData = $request->validate([

        'nome_empresa'          => 'required|string|max:255',
        'cnpj'                  => 'required|numeric|cnpj',
        'telefone'              => 'required|numeric',
        'email'                 => 'required|email',
    ]);

    Empresa::create([
        'user_id' => Auth::user()->id,
        'nome_empresa' => $request->nome_empresa,
        'cnpj' => $request->cnpj,
        'telefone' => $request->telefone,
        'email' => $request->email,
      ]);
    return redirect()->route('home');
  }
  public function adicionarVaga(Request $request){
      //dd($request);
      $validatedData = $request->validate([
        'nome_vaga'             =>  'required|string|max:255',
        'atribuicoes'           =>  'required|string|max:255',
        'experiencia'           =>  'required|string|max:255',
        'descricao'             =>  'required|string|max:255',
        'quantidade'            =>  'numeric',
        'salario'               =>  'numeric',
        'tipo_de_remuneracao'   =>  'required|string|max:255',

        'uf'                    =>  'required',
        'cidade'                =>  'required',
        'bairro'                =>  'required',
        'rua'                   =>  'required',
        'numero'                =>  'required',
      ]);
      Vaga::create([
        'empresa_id' => Auth::user()->empresa->id,
        'data_publicacao' => date("d-m-Y"),
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
        'complemento'=>$request->complemento,
    ]);

    return redirect()->route('home');//view('principal_empresa');
  }
  public function tenhoInteresseNoCandidato(Request $request){
    dd($request);
    $this->validate($request,[
        'candidato_id'               =>  'required',
        'empresa_id'                 =>  'required',
    ]);

        Match::create([
            'candidato_id'         => Auth::user()->empresa->id,
            'empresa_id'           => $request->vaga_id,
        ]);
        return redirect()->route('home');//view('principal_candidato');

    return redirect()->route('home');
  }
  public function naoTenhoInteresseNoCandidato(Request $request){
    dd($request);
    $this->validate($request,[
        'candidato_id'               =>  'required',
        'empresa_id'                 =>  'required',
    ]);
    // $resultado = Match::where('candidato_id',Auth::user()->candidato->id)->where('vaga_id',$request->vaga_id)->delete();
    return redirect()->route('home');
  }
  public function buscarOportunidade(Request $request){
    //$empresas = Empresa::where('nome_empresa', 'like', '%' . strtolower($request->busca) . '%')-> paginate(10);
        // $resultado = DB::table('empresas')
        // ->join('enderecos','empresas.id','=', 'enderecos.empresa_id')
        // ->join('vagas','empresas.id','=','vagas.empresa_id')
        // ->select('vagas.nome_vaga','empresas.nome_empresa','enderecos.uf', 'enderecos.cidade', 'enderecos.bairro','enderecos.rua', 'enderecos.numero', 'vagas.data_publicacao','vagas.atribuicoes','vagas.experiencia','vagas.descricao','vagas.quantidade','vagas.salario','vagas.vaga_para_pcd','vagas.tipo_de_vaga', 'vagas.tipo_de_remuneracao' )
        // ->where('vagas.nome_vaga','ilike','%'. $request->busca .'%')
        // ->orwhere('empresas.nome_empresa','ilike','%'. $request->busca .'%')
        // ->get();

    $resultado = Vaga::where('nome_vaga',  'ilike', '%'. $request->busca .'%')->get();

    //return view('resultado_busca_nao_logado', ['empresas' => $resultado]);
    return view('principal_candidato', ['empresas' => $resultado]);
  }
  public function listarInteressados(Request $request){
    $candidatos_id = Favorito::where('vaga_id', $request->vaga_id)->select('id')->get();
    $candidatos = Candidato::whereIn('id', $candidatos_id)->paginate(10);
    return view('', ['candidatos' => $candidatos]);

  }
  public function buscarNaoLogadoCandidato(Request $request){
    //dd($request);
    $string_de_busca1 = strtolower($request->campo_texto3);

    //Busca
    if($request->campo_texto3 != null){
        $resultado = DB::table('candidatos')
        ->leftJoin('enderecos','candidatos.user_id','=','enderecos.id')
        ->leftJoin('escolaridades','candidatos.id','=','escolaridades.candidato_id')
        ->leftJoin('experiencias','candidatos.id','=','experiencias.candidato_id')
        ->leftJoin('cargos','candidatos.id','=','cargos.experiencia_id')
        ->select('candidatos.nome_completo','candidatos.data_de_nascimento','candidatos.cpf','candidatos.email', 'candidatos.telefone','candidatos.celular','candidatos.funcao', 'candidatos.tipo_de_deficiencia','escolaridades.instituicao','escolaridades.curso','escolaridades.data_inicio','escolaridades.data_conclusao','experiencias.nome_empresa','experiencias.atribuicao','experiencias.data_inicio', 'experiencias.data_fim','cargos.nome_cargo','enderecos.uf','enderecos.cidade','enderecos.bairro','enderecos.rua','enderecos.numero','enderecos.complemento')
        ->where('candidatos.funcao','ilike','%'. $request->campo_texto3 .'%')
        ->get();
        return view('resultado_busca_nao_logado_sou_empresa', ['candidatos' => $resultado]);
    }else{
        $resultado = DB::table('candidatos')
        ->leftJoin('enderecos','candidatos.user_id','=','enderecos.id')
        ->leftJoin('escolaridades','candidatos.id','=','escolaridades.candidato_id')
        ->leftJoin('experiencias','candidatos.id','=','experiencias.candidato_id')
        ->leftJoin('cargos','candidatos.id','=','cargos.experiencia_id')
        ->select('candidatos.nome_completo','candidatos.data_de_nascimento','candidatos.cpf','candidatos.email', 'candidatos.telefone','candidatos.celular','candidatos.funcao', 'candidatos.tipo_de_deficiencia','escolaridades.instituicao','escolaridades.curso','escolaridades.data_inicio','escolaridades.data_conclusao','experiencias.nome_empresa','experiencias.atribuicao','experiencias.data_inicio', 'experiencias.data_fim','cargos.nome_cargo','enderecos.uf','enderecos.cidade','enderecos.bairro','enderecos.rua','enderecos.numero','enderecos.complemento')
        ->get();
        return view('resultado_busca_nao_logado_sou_empresa', ['candidatos' => $resultado]);
    }
  }
}
