<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filial extends Model
{
    protected $primaryKey = 'FilCod';
    protected $table = 'filiales';

    public function universidad()
    {
        return $this->belongsTo('App\Universidad', 'UniCod');
    }

    public function locales()
    {
        return $this->hasMany('App\Local', 'FilCod');
    }

    public function direccion()
    {
        return $this->belongsTo('App\Direccion', 'FilDirCod');
    }
}
