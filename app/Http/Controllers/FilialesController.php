<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class FilialesController extends Controller
{
    public function index()
    {
        error_log('INFO: lista filiales');
        $filiales = App\Filiales::orderBy('FilCod', 'asc')->take(10)->get();
        return view('universidad/' , compact('filiales'));
    }
}
