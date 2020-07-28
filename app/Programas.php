<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programas extends Model
{
    protected $primaryKey = 'ProCod';
    protected $table = 'programas';

    public function scopeNombre( $query, $nombre )
    {
        if ($nombre){
            return $query->where('ProNom', 'like', '%'.strtoupper($nombre).'%');
        }
    }

    public function scopeNivelgestion ($query, $nivel)
    {
        if ($nivel != 4) {
            return $query->where('ProNivAca', $nivel);
        }
    }
}
