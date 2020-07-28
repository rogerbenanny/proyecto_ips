<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{
    protected $primaryKey = 'UniCod';
    protected $table = "universidades";


    public function scopeNombre( $query, $nombre )
    {
        if ($nombre){
            return $query->where('UniNom', 'like', '%'.strtoupper($nombre).'%');
        }
    }
}
