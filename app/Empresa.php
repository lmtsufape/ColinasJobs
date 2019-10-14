<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model{

  protected $fillable = [ 'nome_empresa', 'cnpj', 'telefone', 'email', 'user_id'];

  public function user(){
    return $this->belongsTo('App\User', 'user_id');
  }
}
