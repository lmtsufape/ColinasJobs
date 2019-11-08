<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = ['candidato_id','vaga_id'];

    public function candidato(){
        return $this->belongsTo('App\Candidato', 'candidato_id');
    }
    public function vaga(){
        return $this->belongsTo('App\Vaga', 'vaga_id');
    }
}
