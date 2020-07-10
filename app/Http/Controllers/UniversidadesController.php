<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class UniversidadesController extends Controller
{
    public function index(){
        $universidades = App\Universidad::all();
        return view('universidades', compact('universidades'));
    }
}
