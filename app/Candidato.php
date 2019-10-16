<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model{

  protected $fillable = [ 'nome_completo', 'descricao', 'user_id'];

  public function user(){
    return $this->belongsTo('App\User', 'user_id');
  }
}
