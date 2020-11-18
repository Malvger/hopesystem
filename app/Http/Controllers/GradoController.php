<?php

namespace App\Http\Controllers;

use App\Grado;
use App\Ciclo;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;

class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()

    {

        $this->middleware('auth');

    }
    public function index()
    {
        //
        // $datos['grado']=Grado::all();

        // $datos['ciclo']=Ciclo::all();
            //{"id":3,"Area":null,"ciclo":"Medio","grado":"Primero"}
        $datos['grado'] = Grado::join("ciclos", "ciclos.id", "=", "grados.ciclo")
                            ->select("grados.id","ciclos.ciclo","grados.grado")
                            ->orderBy('ciclos.ciclo', 'ASC')
                            ->orderBy('grados.grado', 'ASC')
                            ->get();

        return view('grados.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ciclo=Ciclo::all();

        return view('grados.create', compact('ciclo'));
        // return view('grados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
        $datosGrado=request()->except('_token');
        Grado::insert($datosGrado);


        $datos['grado'] = Grado::join("ciclos", "ciclos.id", "=", "grados.ciclo")
        ->select("grados.id","ciclos.ciclo","grados.grado")
        ->orderBy('ciclos.ciclo', 'ASC')
        ->orderBy('grados.grado', 'ASC')
        ->get();
        
        return view('grados.index',$datos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function show(Grado $grado)
    {
        //
    }

    /** 
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $grado=Grado::findOrFail($id);

        $ciclo=Ciclo::all();

        return view('grados.edit', compact('grado','ciclo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $datosGrado=request()->except('_token','_method');


        Grado::where('id','=', $id)->update($datosGrado);

        $grado=Grado::findOrFail($id);
        
        // return $datosEstudiante;

        //return view('grados.edit', compact('grado'));
        
        $ciclo=Ciclo::all();

        return view('grados.edit', compact('grado','ciclo'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
    //     Grado::findOrFail($id)->delete();
    //    return redirect('grado');
        // Grado::destroy($id);
        $post = Grado::find($id);
        $post->delete();
        return redirect('/grados')->with('eliminar','ok'); 
 

    }
}
