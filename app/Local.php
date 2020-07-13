<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $primaryKey = 'LocCod';
    protected $table = 'locales';

    public function filial()
    {
        return $rhis->belongsTo('App\Filial', 'FilCod');
    }

    public function programas()
    {
        return $this->belongsToMany('App\Programa', 'locales_programas', 'LocCod', 'ProCod');
    }
}
