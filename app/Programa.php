<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $primaryKey = 'ProCod';
    protected $table = 'programas';

    public function locales()
    {
        return $this->belongsToMany('App\Local', 'locales_programas', 'LocCod', 'ProCod');
    }

    public function clasePrograma()
    {
        return $this->belongsTo('App\ClasePrograma', 'ProClaProCod');
    }
}
