<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $primaryKey = 'DirCod';
    protected $table = 'direcciones';

    public function filiales(){
        return $this->hasMany('App\Filial', 'FilDirCod');
    }

    public function departamento()
    {
        return $this->belongsTo('App\Departamento', 'DepCod');
    }
}
