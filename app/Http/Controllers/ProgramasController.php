<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\universidad;
use App;
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
        $universidades = App\Models\progrmas::orderBy('ProNom', 'asc')->paginate(10);
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
        $programas = App\Models\Progrmas::findOrFail($uniCod);
        $universidad=App\Universidad::all();
        $filiales =App\Models\Filiales::all();
        $locales =App\Models\Locales::all();
        $direcciones=App\Models\Direcciones::all();
        $departamentos=App\Models\Departamentos::all();
        $localesprograma=App\Models\Localesprogramas::all();
        $clasesprogramas=App\Models\Clasesprogramas::all();
        return view('Programas/index1', compact('programas','universidad','filiales','locales','direcciones','departamentos','localesprograma','clasesprogramas'));
    }


    public function filtro (){
        $programas=App\Models\Progrmas::all();
        $universidades=App\Models\Progrmas::all();
        return view('Programas/index', compact('universidades','programas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
=======
use App;

class ProgramasController extends Controller
{
    public function index()
    {
        error_log('INFO: lista Programas');
        $programas = App\Programas :: orderBy('ProNom', 'asc')->paginate(10);
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
        return view('programa', compact('programas','filiales','universidad','locales','localesprogramas'));
    }

    public function filtro (Request $request){
        error_log('INFO: filtro Programas');
        if ($request->get('busqueda') != null) {
            $programas = App\Programas::where('ProNom', 'like', '%'.strtoupper($request->get('busqueda')).'%', 'and')
                                            ->where('ProNivAca',$request->get('grado'))
                                            ->orderBy('ProNom',$request->get('orden'))
                                            ->take($request->get('cantidad'))
                                            ->get();
        }
        else{
            $programas = App\Programas::where('ProNivAca',$request->get('grado'))
                                            ->orderBy('ProNom',$request->get('orden'))
                                            ->take($request->get('cantidad'))
                                            ->get();
        }
        return view('programasacademicos', compact('programas'));
>>>>>>> feature-will
    }
}
