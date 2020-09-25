<?php

namespace App\Http\Controllers;

use App\EstudioSocioeconimico;
use Illuminate\Http\Request;

class EstudioSocioeconimicoController extends Controller
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
        $datos['estudiosocioeconimico']=EstudioSocioeconimico::paginate(5);
        return view('estudiosocioeconimico.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('estudiosocioeconimico.create');
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
              EstudioSocioeconimico::insert($datosEstudiante);
              //return response()->json($datosEstudiante);
              $datos['estudiosocioeconimico']=EstudioSocioeconimico::paginate(5);
              return view('estudiosocioeconimico.index',$datos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EstudioSocioeconimico  $estudioSocioeconimico
     * @return \Illuminate\Http\Response
     */
    public function show(EstudioSocioeconimico $estudioSocioeconimico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EstudioSocioeconimico  $estudioSocioeconimico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $estudiante=EstudioSocioeconimico::findOrFail($id);

        return view('estudiosocioeconimico.edit', compact('estudiosocioeconimico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EstudioSocioeconimico  $estudioSocioeconimico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //

        $datosEstudiante=request()->except('_token','_method');


        EstudioSocioeconimico::where('id','=', $id)->update($datosEstudiante);

        $estudiante=EstudioSocioeconimico::findOrFail($id);
        
        // return $datosEstudiante;

        return view('estudiosocioeconimico.edit', compact('estudiosocioeconimico'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EstudioSocioeconimico  $estudioSocioeconimico
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstudioSocioeconimico $estudioSocioeconimico)
    {
        //
    }
}
