<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ProgramasController extends Controller
{
    public function index()
    {
        error_log('INFO: lista Programas');
        $programas = App\Programas :: orderBy('ProNom', 'asc')->take(10)->get();
        $universidad = App\Universidad::all();
        $filiales =App\Filiales::all();
        $locales =App\Locales::all();
        $localesprogramas=App\LocalesProgramas::all();
        return view('programasacademicos', compact('programas','filiales','universidad','locales','localesprogramas'));
    }
    public function programas ($proCod = null)
    {
        error_log('INFO: Información Programas/'.$proCod);
        $programas = App\Programas::findOrFail($proCod);
        $universidad = App\Universidad::all();
        $filiales =App\Filiales::all();
        $locales =App\Locales::all();
        $localesprogramas=App\LocalesProgramas::all();
        return view('programas', compact('programas','filiales','universidad','locales','localesprogramas'));
    }

    public function filtro (Request $request){
        error_log('INFO: filtro Programas');
        if ($request->get('busqueda') != null) {
            $programas = App\Programas::where('ProNom', 'like', '%'.strtoupper($request->get('busqueda')).'%', 'and')
                                            ->where('ProTipNivAca',$request->get('grado'))
                                            ->orderBy('ProNom',$request->get('orden'))
                                            ->take($request->get('cantidad'))
                                            ->get();
        }
        else{
            $programas = App\Programas::where('ProTipNivAca',$request->get('gestion'))
                                            ->orderBy('ProNom',$request->get('orden'))
                                            ->take($request->get('cantidad'))
                                            ->get();
        }
        return view('programasacademicos', compact('programas'));
    }
}
