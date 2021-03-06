<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class UniversidadesController extends Controller
{
    public function index()
    {
        error_log('INFO: lista Universidades');
        $universidades = App\Universidad::orderBy('UniNom', 'asc')->paginate(10);

        return view('universidades', compact('universidades'));
    }
    public function universidad ($uniCod = null)
    {
        error_log('INFO: Información universidad/'.$uniCod);
        $universidad = App\Universidad::findOrFail($uniCod);
        $filiales =App\Filiales::all();
        $locales =App\Locales::all();
        $direcciones=App\Direcciones::all();
        $departamentos=App\Departamentos::all();
        $localesprogramas=App\LocalesProgramas::all();
        $programas=App\Programas::all();
        return view('universidad', compact('universidad','filiales','locales','direcciones','departamentos','localesprogramas','programas'));
    }
    public function locales ($locCod = null)
    {
        error_log('INFO: Información de locales Programas/'.$locCod);
        $local = App\Locales::findOrFail($locCod);
        $filiales=App\Filiales::all();
        $localesprogramas=App\LocalesProgramas::all();
        $programas=App\Programas::all();
        return view('local', compact('local','localesprogramas','programas','filiales'));
    }
    public function filtro (Request $request){
        error_log('INFO: filtro Universidades');

        $universidades = App\Universidad::nombre($request->get('busqueda'))
                                        ->nivel($request->get('gestion'))
                                        ->orderBy('UniNom',$request->get('orden'))
                                        ->paginate($request->get('cantidad'));

        return view('universidades', compact('universidades'));
    }
}
