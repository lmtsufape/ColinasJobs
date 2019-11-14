<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable = [ 'experiencia_id', 'nome_cargo'];

    public function experiencia(){
        return $this->belongsTo('App\Experiencia', 'experiencia_id');
      }
}
