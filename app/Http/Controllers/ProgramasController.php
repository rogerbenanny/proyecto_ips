<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ProgramasController extends Controller
{
    public function index()
    {
        error_log('INFO: lista Programas');
        $programas = App\Programas::orderBy('ProNom', 'asc')->paginate(10);
        return view('Programas/index', compact('programas'));
    }
    public function programas ($proCod = null)
    {
        error_log('INFO: Información Programas/'.$proCod);
        $programas = App\Programas::findOrFail($proCod);
        $universidad = App\Universidad::all();
        $departamentos = App\Departamentos::all();
        $filiales =App\Filiales::all();
        $locales =App\Locales::all();
        $direcciones =App\Direcciones::all();
        $localesprograma=App\LocalesProgramas::all();
        $clasesprogramas=App\ClasesProgramas::all();
        return view('Programas/index1', compact('departamentos','programas','filiales','universidad','locales','localesprograma','clasesprogramas','direcciones'));
    }

    public function filtro (Request $request){
        error_log('INFO: filtro Programas');
        $programas = App\Programas::nombre($request->get('busqueda'))
                                ->nivelgestion($request->get('nivel'))
                                ->orderBy('ProNom',$request->get('orden'))
                                ->paginate($request->get('cantidad'));

        return view('Programas/index', compact('programas'));
    }
}
