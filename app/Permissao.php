<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    //retorna todas as funções relacionas as permissões 
    public function roles(){
        //retornado o relacionamento das tabelas Permission e Roles
        return $this->belongsToMany(\App\Role::class);
    }
}
