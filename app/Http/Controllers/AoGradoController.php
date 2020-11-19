<?php

namespace App\Http\Controllers;

use App\AoGrado;
use App\estudiante;
use App\Grado;
use App\Ciclo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AoGradoController extends Controller
{
    
    public function __construct()

    {

        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $aogrado = AoGrado::join("grados", "ao_grados.Grado", "=", "grados.id")
        ->select('grados.grado','ao_grados.Ano')
        ->where('Estudiante','=', $id)
        ->get();
        // $datos['id'] = $id;
        $estudiante = estudiante::select('PrimerNombre','SegundoNombre','ApellidoPaterno','ApellidoMaterno' )
        ->where('id','=', $id)
        ->get();
        $grados = Ciclo::join("grados", "ciclos.id", "=", "grados.ciclo")
        ->select("grados.id",'grados.grado','ciclos.ciclo')
        ->orderBy('ciclos.ciclo', 'ASC')
        ->orderBy('grados.grado', 'ASC')
        ->get();

        return view('aogrado.index', compact('aogrado','estudiante','grados', 'id'));
        
        
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
     * @param  \App\AoGrado  $aoGrado
     * @return \Illuminate\Http\Response
     */
    public function show(AoGrado $aoGrado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AoGrado  $aoGrado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('aogrado.index', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AoGrado  $aoGrado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        //return view('aogrado.index', $id);
        $datos=request()->except('_token','_method');
        $datos['Estudiante']=$id;
        // dd($datos);
        $aogrado = AoGrado::where('Ano','=', $datos['ano'])
        ->where('Estudiante','=', $id)
        ->get();
        if (sizeof($aogrado)>0){
            AoGrado::where('Ano','=', $datos['ano'])
            ->where('Estudiante','=', $id)
            ->update($datos);
        }else {
            AoGrado::insertOrIgnore($datos);
        }
        // dd(sizeof($aogrado));

        // dd($aogrado);

        //

        return redirect()->route('aogrado.index',$id);
        // return view('aogrado.index', compact('id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AoGrado  $aoGrado
     * @return \Illuminate\Http\Response
     */
    public function destroy(AoGrado $aoGrado)
    {
        //
    }
}
