<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    protected $fillable = [ 'candidato_id', 'nome_empresa', 'atribuicao', 'data_inicio', 'data_fim'];

    public function candidato(){
        return $this->belongsTo('App\Candidato', 'candidato_id');
    }
    public function cargo(){
        return $this->hasMany('App\Cargo');
    }
}
