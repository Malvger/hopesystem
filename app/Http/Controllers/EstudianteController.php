<?php



namespace App\Http\Controllers;



use App\estudiante;
use App\Grado;
use App\Ciclo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\EstudienteRequest;

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

       // $datos['estudiantes']=estudiante::all();
       $datos['estudiantes'] = estudiante::join("grados", "grados.id", "=", "estudiantes.grado")
       ->join("ciclos", "ciclos.id", "=", "grados.ciclo")
       ->select("estudiantes.id","estudiantes.ApellidoPaterno","estudiantes.ApellidoMaterno","estudiantes.PrimerNombre","estudiantes.SegundoNombre",
                 "estudiantes.CUI","estudiantes.Sexo","estudiantes.Edad","ciclos.ciclo", "grados.grado"
       )
       ->orderBy('estudiantes.ApellidoPaterno', 'ASC')
       ->orderBy('estudiantes.ApellidoMaterno', 'ASC')
       ->orderBy('estudiantes.PrimerNombre', 'ASC')
       ->orderBy('estudiantes.SegundoNombre', 'ASC')
       ->get();

        return view('estudiantes.index',$datos);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

       // $grados = Grado::all();
        //return view('estudiantes.create', compact('grados'));


        // return view('estudiantes.create');
        // $estudiante=estudiante::findOrFail($id);
        $grados = Ciclo::join("grados", "ciclos.id", "=", "grados.ciclo")
        ->select("grados.id",'grados.grado','ciclos.ciclo')
        ->orderBy('ciclos.ciclo', 'ASC')
        ->orderBy('grados.grado', 'ASC')
        ->get();
    

        return view('estudiantes.create', compact('grados'));

        // return view('estudiantes.edit', compact('estudiante','grados'));


    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(EstudienteRequest $request)

    {

        $estudiante = new estudiante(request()->except('_token'));
        $estudiante->save();

        Flash::success( "Se ha Registrado de forma exitosa ");
        return redirect()->route('estudiantes.index');

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
        $grados = Ciclo::join("grados", "ciclos.id", "=", "grados.ciclo")
        ->select("grados.id",'grados.grado','ciclos.ciclo')
        ->orderBy('ciclos.ciclo', 'ASC')
        ->orderBy('grados.grado', 'ASC')
        ->get();


        return view('estudiantes.edit', compact('estudiante','grados'));

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



        // return view('estudiantes.edit', compact('estudiante'));
        $grados = Ciclo::join("grados", "ciclos.id", "=", "grados.ciclo")
        ->select("grados.id",'grados.grado','ciclos.ciclo')
        ->orderBy('ciclos.ciclo', 'ASC')
        ->orderBy('grados.grado', 'ASC')
        ->get();


        return view('estudiantes.edit', compact('estudiante','grados'));



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

        // estudiante::destroy($id);

        $post = estudiante::find($id);

        $post->delete();

        return redirect('/estudiantes')->with('eliminar','ok'); 

    }
    
    public function getPdf(){

        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML('<h1>Test</h1>');
        // return $pdf->download('invoice.pdf');
         $datos['estudiantes']=estudiante::All();  
        //  $pdf = app('dompdf.wrapper');
         $pdf = \PDF::loadView('estudiantes.pdf', compact('datos'));
         //return $pdf->setPaper('a4')->stream();
        //  return $pdf.'';
         return $pdf->download('informeestudiantes.pdf');
        //return $pdf->download();

        // $pdf = \PDF::loadHTML('<h1>Test</h1>');
        // return $pdf->stream();
        // return $pdf->download('informeestudiantes.pdf');

        // $datos['estudiantes'] = estudiante::join("grados", "grados.id", "=", "estudiantes.grado")
        // ->join("ciclos", "ciclos.id", "=", "grados.ciclo")
        // ->select("estudiantes.id","estudiantes.ApellidoPaterno","estudiantes.ApellidoMaterno","estudiantes.PrimerNombre","estudiantes.SegundoNombre",
        //           "estudiantes.CUI","estudiantes.Sexo","estudiantes.Edad","ciclos.ciclo", "grados.grado"
        // )
        // ->orderBy('estudiantes.ApellidoPaterno', 'ASC')
        // ->orderBy('estudiantes.ApellidoMaterno', 'ASC')
        // ->orderBy('estudiantes.PrimerNombre', 'ASC')
        // ->orderBy('estudiantes.SegundoNombre', 'ASC')
        // ->get();
        // $pdf = \PDF::loadView('estudiantes.index',$datos);
        // return $pdf->download('informeestudiantes.pdf');
    }
}

