<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClasePrograma extends Model
{
    protected $primaryKey = 'ClaProCod';
    protected $table = 'clasesprogramas';

    public function programas()
    {
        return $this->hasMany('App\Programa', 'ProClaProCod');
    }
}
