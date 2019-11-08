<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escolaridade extends Model
{
    protected $fillable = [ 'candidato_id', 'instituicao', 'curso', 'data_inicio', 'data_conclusao'];

  public function user(){
    return $this->belongsTo('App\User', 'candidato_id');
  }
}
