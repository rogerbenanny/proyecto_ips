<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class EstadisticasController extends Controller
{
    //
    public function index()
    {
        error_log('INFO: lista Universidades');
        $universidades = App\Universidad::all();
        $filiales = App\Filiales::all();
        $direcciones = App\Direcciones::all();
        $departamentos = App\Departamentos::all();
        return view('estadisticas', compact('universidades','filiales','direcciones','departamentos'));
    }
}
