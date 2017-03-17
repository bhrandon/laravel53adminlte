<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    public function permissaos() {
        return $this->belongsToMany(\App\Permissao::class);
    }

}
