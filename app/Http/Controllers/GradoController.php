<?php

namespace App\Http\Controllers;

use App\Grado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['grado']=Grado::paginate(5);
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
        return view('grados.create');
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
                //
        //$datosEstudiante=Request()->all();
        $datosGrado=request()->except('_token');
        Grado::insert($datosGrado);
        //return response()->json($datosEstudiante);
        $datos['grados']=Grado::paginate(5);
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

        return view('grados.edit', compact('grado'));
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

        return view('grados.edit', compact('grado'));
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
        Grado::destroy($id);
    }
}
