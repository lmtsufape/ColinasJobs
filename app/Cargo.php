<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable = [ 'experiencia_id', 'nome_cargo'];

  public function user(){
    return $this->belongsTo('App\User', 'experiencia_id');
  }
}
