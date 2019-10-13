<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model{

  protected $fillable = [ 'nome_completo', 'cpf', 'email', 'data_de_nascimento', 'user_id'];

  public function user(){
    return $this->belongsTo('App\User', 'user_id');
  }
}
