<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $primaryKey = 'DepCod';
    protected $table = 'departamentos';

    public function direcciones(){
        return $this->hasMany('App\Direccion', 'DepCod');
    }
}
