<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class ProgramasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        error_log('INFO: lista Programas');
        $universidades = App\Programas::orderBy('ProNom', 'asc')->paginate(10);
        return view('Programas/index', compact('universidades'));
    }
    public function programa ($uniCod = null)
    {
        //error_log('INFO: Información universidad/'.$uniCod);
        //$universidad = App\Models\Progrmas::findOrFail($uniCod);
        //return view('Programas/index1', compact('universidad'));
        //$ar=App\Models\Progrmas::find($uniCod);
        //dd($ar);
        error_log('INFO: Información universidad/'.$uniCod);
        $programas = App\Programas::findOrFail($uniCod);
        $universidad=App\Universidad::all();
        $filiales =App\Filiales::all();
        $locales =App\Locales::all();
        $direcciones=App\Direcciones::all();
        $departamentos=App\Departamentos::all();
        $localesprograma=App\LocalesProgramas::all();
        $clasesprogramas=App\ClasesProgramas::all();
        return view('Programas/index1', compact('programas','universidad','filiales','locales','direcciones','departamentos','localesprograma','clasesprogramas'));
    }


    public function filtro (){
        $universidades=App\Universidad::all();
        $programas=App\Programas::all();
        return view('Programas/index', compact('universidades','programas'));
    }


}
