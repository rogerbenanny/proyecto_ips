<?php

namespace App\Http\Controllers;

use App;

class LocalController extends Controller
{
    //
    public function index ($locCod = null)
    {
        error_log('INFO: Información Programas/'.$locCod);
        $locales = App\Locales::findOrFail($locCod);
        $localesprogramas=App\LocalesProgramas::all();
        $programas=App\Programas::all();
        return view('local', compact('locales','localesprogramas','programas'));
    }
}
