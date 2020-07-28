<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{
    protected $primaryKey = 'UniCod';
    protected $table = 'universidades';

    public function scopeNombre( $query, $nombre )
    {
        if ($nombre){
            return $query->where('UniNom', 'like', '%'.strtoupper($nombre).'%');
        }
    }

    public function scopeNivel ($query, $tipo)
    {
        if ($tipo == 0 || $tipo == 1) {
            return $query->where('UniTipGes',$tipo);
        }
    }
}
