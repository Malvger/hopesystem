<?php

namespace App\Http\Controllers;

use App\estudiante;
use Illuminate\Http\Request;

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


        $datosEstudiante['DPISi']=isset($datosEstudiante['DPISi'])?'1':'0';
        $datosEstudiante['ProblemaFamiliarSi']=isset($datosEstudiante['ProblemaFamiliarSi'])?'1':'0';
        $datosEstudiante['PadresSeparadosSi']=isset($datosEstudiante['PadresSeparadosSi'])?'1':'0';
        $datosEstudiante['CertificadoRENAP']=isset($datosEstudiante['CertificadoRENAP'])?'1':'0';
        $datosEstudiante['DPIPapa']=isset($datosEstudiante['DPIPapa'])?'1':'0';
        $datosEstudiante['vacunacion']=isset($datosEstudiante['vacunacion'])?'1':'0';
        $datosEstudiante['diplomapre']=isset($datosEstudiante['diplomapre'])?'1':'0';
        $datosEstudiante['DPIMama']=isset($datosEstudiante['DPIMama'])?'1':'0';
        $datosEstudiante['codigopersonalSi']=isset($datosEstudiante['codigopersonalSi'])?'1':'0';
        $datosEstudiante['buenaConductaSi']=isset($datosEstudiante['buenaConductaSi'])?'1':'0';
        $datosEstudiante['certificadoOriginal']=isset($datosEstudiante['certificadoOriginal'])?'1':'0';

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
}
