<?php

namespace App\Http\Controllers;

use App\estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PDF;

class EstudianteController extends Controller
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
        $datos['estudiantes']=estudiante::paginate(5);
        return view('estudiantes.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('estudiantes.create');
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
        //$datosEstudiante=Request()->all();
        $datosEstudiante=request()->except('_token');
        estudiante::insert($datosEstudiante);
        //return response()->json($datosEstudiante);
        $datos['estudiantes']=estudiante::paginate(5);
        return view('estudiantes.index',$datos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $estudiante=estudiante::findOrFail($id);

        return view('estudiantes.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $datosEstudiante=request()->except('_token','_method');

        
        $datosEstudiante['RepitenteSi']=isset($datosEstudiante['RepitenteSi'])?'1':'0';
        $datosEstudiante['RepitenteNo']=isset($datosEstudiante['RepitenteNo'])?'1':'0';

        estudiante::where('id','=', $id)->update($datosEstudiante);

        $estudiante=estudiante::findOrFail($id);
        
        // return $datosEstudiante;

        return view('estudiantes.edit', compact('estudiante'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        estudiante::destroy($id);
    }
    
    public function getPdf(){

        $datos['estudiantes']=estudiante::All();
        
        $pdf = \PDF::loadView('estudiantes.pdf', compact('datos'));
        return $pdf->download('informeestudiantes.pdf');
    }
}
