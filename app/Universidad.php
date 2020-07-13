<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{
    protected $primaryKey = 'UniCod';
    protected $table = 'universidades';

    public function filiales()
    {
        return $this->hasMany('App\Filial','UniCod');
    }
}
