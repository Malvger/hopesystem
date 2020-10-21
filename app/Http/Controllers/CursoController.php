<?php

namespace App\Http\Controllers;

use App\curso;
use App\Grado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CursoController extends Controller
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
        $datos['cursos']=curso::all();
        return view('cursos.index',$datos);
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $grado=Grado::all();

        return view('cursos.create', compact('grado'));
        // return view('cursos.create');
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
        $datosCursos=request()->except('_token');
        curso::insert($datosCursos);
        //return response()->json($datosEstudiante);
        $datos['cursos']=curso::all();
        return view('cursos.index',$datos);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $curso=curso::findOrFail($id);

        $grado=Grado::all();

        return view('cursos.edit', compact('curso','grado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $datosCursos=request()->except('_token','_method');

        curso::where('id','=', $id)->update($datosCursos);

        $curso=curso::findOrFail($id);

        $grado=Grado::all();

        return view('cursos.edit', compact('curso','grado'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        // curso::destroy($id);
        $post = curso::find($id);
        $post->delete();
        return redirect('/cursos');
    }
}
