<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model{

  protected $fillable = [ 'nome_completo', 'cpf', 'email', 'data_de_nascimento', 'user_id', 'telefone', 'celular', 'nivel_de_formacao','tipo_de_deficiencia', 'funcao'];

  public function user(){
    return $this->belongsTo('App\User', 'user_id');
  }
  public function favorito(){
    return $this->hasMany('App\Favorito');
  }

}
