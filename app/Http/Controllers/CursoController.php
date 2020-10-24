<?php

namespace App\Http\Controllers;

use App\curso;
use App\Grado;
use App\Ciclo;
use App\notas;
use App\estudiante;
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
        // $datos['cursos']=curso::all();
        // $datos['grado']=Grado::all();
        // $datos['ciclo']=Ciclo::all();

        $datos['cursos'] = curso::join("grados", "cursos.grado", "=", "grados.id")
                            ->join("ciclos", "grados.ciclo", "=", "ciclos.id")
                            ->select("cursos.id","cursos.nombre","cursos.descrip","grados.grado","ciclos.ciclo")
                            ->orderBy('grados.grado', 'ASC')
                            ->orderBy('ciclos.ciclo', 'ASC')
                            ->orderBy('cursos.nombre', 'ASC')
                            ->get();


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
        $ciclo=Ciclo::all();

        return view('cursos.create', compact('grado','ciclo'));
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
        // $datos['cursos']=curso::all();

        $datos['cursos'] = curso::join("grados", "cursos.grado", "=", "grados.id")
        ->join("ciclos", "grados.ciclo", "=", "ciclos.id")
        ->select("cursos.id","cursos.nombre","cursos.descrip","grados.grado","ciclos.ciclo")
        ->orderBy('grados.grado', 'ASC')
        ->orderBy('ciclos.ciclo', 'ASC')
        ->orderBy('cursos.nombre', 'ASC')
        ->get();


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
        $ciclo=Ciclo::all();

        return view('cursos.edit', compact('curso','grado','ciclo'));
    }
    public function notas(Request $request, $id)
    {

        $req=request()->except('_token','_method');

        if (strcmp(json_encode($req),"[]")) {
            if(is_null($req['id'])){
                notas::insert($req);
                $req="Insert". json_encode($req);
            } else {
                
                notas::where('id','=', $req['id'])->update($req);
                $req="update " . json_encode($req);
            }
        }else {
            $req=json_encode($req);
        } 

        //  
        $datos = curso::join("grados", "cursos.grado", "=", "grados.id")
        ->join("ciclos", "grados.ciclo", "=", "ciclos.id")
        ->select("cursos.id","cursos.nombre","cursos.descrip","grados.grado","ciclos.ciclo", "grados.id as grado_id")
        ->where('cursos.id','=', $id)
        ->orderBy('grados.grado', 'ASC')
        ->orderBy('ciclos.ciclo', 'ASC')
        ->orderBy('cursos.nombre', 'ASC')
        ->get();
        // $datos = $datos[0];
        $grado = $datos[0]->grado_id;


        $dat=estudiante::Join("grados", "grados.id", "=", "estudiantes.grado")
        ->leftJoin("cursos", "cursos.grado", "=", "grados.id")
        ->leftJoin("notas", [["notas.estudiante", "=", "estudiantes.id"],["notas.curso","=","cursos.id"]])
        ->select('estudiantes.id as est_id','estudiantes.PrimerNombre','estudiantes.SegundoNombre','estudiantes.ApellidoPaterno','estudiantes.ApellidoMaterno','estudiantes.grado',
        'notas.unidad1','notas.unidad2','notas.unidad3','notas.unidad4', 'notas.id as nota_id', 'notas.curso' )
        ->where('grados.id','=', $grado)
        ->where('cursos.id','=', $id)
        ->orderBy('estudiantes.ApellidoPaterno', 'ASC')
        ->orderBy('estudiantes.ApellidoMaterno', 'ASC')
        ->orderBy('estudiantes.PrimerNombre', 'ASC')
        ->orderBy('estudiantes.SegundoNombre', 'ASC')
        ->get();

        return view('cursos.notas',compact('datos', 'dat','req'));
        // return view('cursos.notas', compact('curso','grado','ciclo'));
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
        $ciclo=Ciclo::all();
        $grado=Grado::all();

        return view('cursos.edit', compact('curso','grado','ciclo'));
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
