<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = ['candidato_id', 'empresa_id', 'uf', 'cidade', 'bairro', 'rua', 'numero','complemento'];

    public function user(){
        return $this->belongsTo('App\User', 'empresa_id');
    }
    public function empresa(){
        return $this->belongsTo('App\Empresa', 'empresa_id');
    }

}
