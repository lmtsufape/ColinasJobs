<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = ['candidato_id', 'empresa_id', 'uf', 'cidade', 'bairro', 'rua', 'numero'];

    public function user(){
        return $this->belongsTo('App\User', 'empresa_id');
    }
}
