<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class UniversidadesController extends Controller
{
    public function index()
    {
        error_log('INFO: lista Universidades');
        $universidades = App\Universidad::orderBy('UniNom', 'asc')->take(10)->get();
       
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
    public function filtro (Request $request){
        error_log('INFO: filtro Universidades');
        if ($request->get('busqueda') != null) {
            $universidades = App\Universidad::where('UniNom', 'like', '%'.strtoupper($request->get('busqueda')).'%', 'and')
                                            ->where('UniTipGes',$request->get('gestion'))
                                            ->orderBy('UniNom',$request->get('orden'))
                                            ->take($request->get('cantidad'))
                                            ->get();
        }
        else{
            $universidades = App\Universidad::where('UniTipGes',$request->get('gestion'))
                                            ->orderBy('UniNom',$request->get('orden'))
                                            ->take($request->get('cantidad'))
                                            ->get();
        }
        return view('universidades', compact('universidades'));
    }
}
