<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidato;
use App\Vaga;

class FavoritoController extends Controller
{
    public function tornarFavorito(Request $request){
      Favorito::create([
        'candidato_id' => Auth::user()->candidato->id,
        'vaga_id' => $request->vaga_id,
      ]);
    }

}
