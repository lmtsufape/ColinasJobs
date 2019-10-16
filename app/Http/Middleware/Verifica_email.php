<?php

namespace App\Http\Middleware;

use Closure;
use App\Candidato;
use App\Empresa;
use Auth;

class Verifica_email
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
      if(is_null(Auth::user()->email_verified_at)){
        return redirect('home');
      }
      else {
        return $next($request);
      }
    }
}
