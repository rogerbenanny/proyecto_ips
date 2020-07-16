<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class UniversidadesController extends Controller
{
    public function index()
    {
        error_log('INFO: lista Universidades');
<<<<<<< HEAD
        $universidades = App\Universidad::orderBy('UniNom', 'asc')->take(10)->get();
        $departamentos = App\Departamento::orderBy('DepNom', 'asc')->get();
        return view('universidades', compact('universidades', 'departamentos'));
=======
        $universidades = App\Universidad::orderBy('UniNom', 'asc')->paginate(10);
       
        return view('universidades', compact('universidades'));
>>>>>>> feature-will
    }
    public function universidad ($uniCod = null)
    {
        error_log('INFO: Información universidad/'.$uniCod);
<<<<<<< HEAD
=======
        $universidad = App\Universidad::findOrFail($uniCod);
>>>>>>> feature-will
        $filiales =App\Filiales::all(); 
        $locales =App\Locales::all(); 
        $direcciones=App\Direcciones::all();
        $departamentos=App\Departamentos::all();
        $localesprogramas=App\LocalesProgramas::all();
        $programas=App\Programas::all();
        return view('universidad', compact('universidad','filiales','locales','direcciones','departamentos','localesprogramas','programas'));
<<<<<<< HEAD
=======
    }
    public function locales ($locCod = null)
    {
        error_log('INFO: Información de locales Programas/'.$locCod);
        $local = App\Locales::findOrFail($locCod);
        $filiales=App\Filiales::all();
        $localesprogramas=App\LocalesProgramas::all();
        $programas=App\Programas::all();
        return view('local', compact('local','localesprogramas','programas','filiales'));
>>>>>>> feature-will
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
