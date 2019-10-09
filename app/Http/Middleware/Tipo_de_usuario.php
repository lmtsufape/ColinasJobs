<?php

namespace App\Http\Middleware;

use Closure;
use App\Candidato;
use App\Empresa;
use Auth;

class Tipo_de_usuario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      // return $next($request);

        if(!is_null(Auth::user()->email_verified_at)){
          $candidato=Candidato::where('user_id', Auth::user()->id)->first();
          $empresa=Empresa::where('user_id', Auth::user()->id)->first();
          // dd($candidato);
          if(is_null($candidato) && is_null($empresa) ){
            return redirect('tipo');
          }else{
            return $next($request);
          }
        }
        else{
          return $next($request);
        }
    }
}
