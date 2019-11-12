<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
      protected $fillable = ['candidato_id', 'vaga_id', 'match'];

      public function vaga(){
        return $this->belongsTo('App\Vaga', 'vaga_id');
      }
      public function vaga(){
        return $this->belongsTo('App\Candidato', 'candidato_id');
      }

}
