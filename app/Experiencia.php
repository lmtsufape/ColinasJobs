<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    protected $fillable = [ 'candidato_id', 'nome_empresa', 'atribuicao', 'data_inicio', 'data_fim'];

  public function user(){
    return $this->belongsTo('App\User', 'candidato_id');
  }
}
