<?php

namespace App\Http\Controllers;

use App\Estudiantes1;
use Illuminate\Http\Request;

class Estudiantes1Controller extends Controller
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
    public function index()
    {
        //
        $datos['estudiantes']=Estudiantes1::paginate(5);
        return view('estudiantes1.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('estudiantes1.create');
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
        $datosEstudiante=request()->except('_token');
        Estudiantes1::insert($datosEstudiante);
        //return response()->json($datosEstudiante);
        $datos['estudiantes']=Estudiantes1::paginate(5);
        return view('estudiantes1.index',$datos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estudiantes1  $estudiantes1
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiantes1 $estudiantes1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estudiantes1  $estudiantes1
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $estudiante=Estudiantes1::findOrFail($id);

        return view('estudiantes1.edit', compact('estudiante1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estudiantes1  $estudiantes1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $datosEstudiante=request()->except('_token','_method');

        
        $datosEstudiante['RepitenteSi']=isset($datosEstudiante['RepitenteSi'])?'1':'0';
        $datosEstudiante['RepitenteNo']=isset($datosEstudiante['RepitenteNo'])?'1':'0';

        Estudiantes1::where('id','=', $id)->update($datosEstudiante);

        $estudiante=Estudiantes1::findOrFail($id);
        
        // return $datosEstudiante;

        return view('estudiantes1.edit', compact('estudiante1'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estudiantes1  $estudiantes1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiantes1 $estudiantes1)
    {
        //
    }
}
