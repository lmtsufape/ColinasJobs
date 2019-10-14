<?php

namespace App\Http\Controllers;

use App\Candidato;
use App\Empresa;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
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
      $empresas = Empresa::orderBy('nome_empresa')->paginate(10);
      $candidatos = Candidato::orderBy('nome_completo')->paginate(10);
      $candidato=Candidato::where('user_id', Auth::user()->id)->first();
      if(!is_null($candidato)){
        return view('principal_candidato',['empresas'=>$empresas]);
      }else{
        return view('principal_empresa', ['candidatos'=>$candidatos]);
      }
    }
}
