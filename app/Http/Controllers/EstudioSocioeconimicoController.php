<?php

namespace App\Http\Controllers;

use App\EstudioSocioeconimico;
use Illuminate\Http\Request;
use App\Http\Requests\EstudioSocioEconimicoRequest;

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
        $datos['estudiosocioeconimico']=EstudioSocioeconimico::all();
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
    public function store(EstudioSocioEconimicoRequest $request)
    {
        //
              //$datosEstudiante=Request()->all();
              $datosEstudiante=request()->except('_token');
              EstudioSocioeconimico::insert($datosEstudiante);
              //return response()->json($datosEstudiante);
              $datos['estudiosocioeconimico']=EstudioSocioeconimico::all();
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
        //estudiosocioeconimico estudio_socioeconimicos
        $estudioS=EstudioSocioeconimico::findOrFail($id);

        return view('estudiosocioeconimico.edit', compact('estudioS'));
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
        $datosEstudiante['problemasSalud']=isset($datosEstudiante['problemasSalud'])?'1':'0';
        //$datosEstudiante['ProblemaSaludSi']=isset($datosEstudiante['ProblemaSaludSi'])?'1':'0';
        $datosEstudiante['DiscapacidadSi']=isset($datosEstudiante['DiscapacidadSi'])?'1':'0';
        $datosEstudiante['CertificadoSi']=isset($datosEstudiante['CertificadoSi'])?'1':'0';
        $datosEstudiante['OtroDiscapacidadSi']=isset($datosEstudiante['OtroDiscapacidadSi'])?'1':'0';
        $datosEstudiante['PropiaSi']=isset($datosEstudiante['PropiaSi'])?'1':'0';
        $datosEstudiante['CedidaSi']=isset($datosEstudiante['CedidaSi'])?'1':'0';
        $datosEstudiante['PrestadaSi']=isset($datosEstudiante['PrestadaSi'])?'1':'0';
        $datosEstudiante['PropiaS']=isset($datosEstudiante['PropiaS'])?'1':'0';
        $datosEstudiante['AlquiladaSi']=isset($datosEstudiante['AlquiladaSi'])?'1':'0';
        $datosEstudiante['InvasionSi']=isset($datosEstudiante['InvasionSi'])?'1':'0';
        $datosEstudiante['PatioSi']=isset($datosEstudiante['PatioSi'])?'1':'0';
        $datosEstudiante['SalaSi']=isset($datosEstudiante['SalaSi'])?'1':'0';
        $datosEstudiante['BanoSi']=isset($datosEstudiante['BanoSi'])?'1':'0';
        $datosEstudiante['GarajeSi']=isset($datosEstudiante['GarajeSi'])?'1':'0';

        $datosEstudiante['Block']=isset($datosEstudiante['Block'])?'1':'0';
        $datosEstudiante['Adobe']=isset($datosEstudiante['Adobe'])?'1':'0';
        $datosEstudiante['Madera']=isset($datosEstudiante['Madera'])?'1':'0';
        $datosEstudiante['ViviendaT']=isset($datosEstudiante['ViviendaT'])?'1':'0';
        $datosEstudiante['AguaP']=isset($datosEstudiante['AguaP'])?'1':'0';
        $datosEstudiante['Rio']=isset($datosEstudiante['Rio'])?'1':'0';
        $datosEstudiante['Pozo']=isset($datosEstudiante['Pozo'])?'1':'0';
        $datosEstudiante['Otro']=isset($datosEstudiante['Otro'])?'1':'0';
        $datosEstudiante['Electricidad']=isset($datosEstudiante['Electricidad'])?'1':'0';
        $datosEstudiante['Velas']=isset($datosEstudiante['Velas'])?'1':'0';
        $datosEstudiante['Otros']=isset($datosEstudiante['Otros'])?'1':'0';
        $datosEstudiante['Otros03']=isset($datosEstudiante['Otros03'])?'1':'0';
        $datosEstudiante['NoT']=isset($datosEstudiante['NoT'])?'1':'0';
        $datosEstudiante['Drenaje']=isset($datosEstudiante['Drenaje'])?'1':'0';
        $datosEstudiante['PozoS']=isset($datosEstudiante['PozoS'])?'1':'0';
        $datosEstudiante['Rio02']=isset($datosEstudiante['Rio02'])?'1':'0';
        $datosEstudiante['Otro02']=isset($datosEstudiante['Otro02'])?'1':'0';
        $datosEstudiante['Electricista02']=isset($datosEstudiante['Electricista02'])?'1':'0';
        $datosEstudiante['Lena']=isset($datosEstudiante['Lena'])?'1':'0';
        $datosEstudiante['Gas']=isset($datosEstudiante['Gas'])?'1':'0';
        $datosEstudiante['Otro03']=isset($datosEstudiante['Otro03'])?'1':'0';
        $datosEstudiante['Telefono02']=isset($datosEstudiante['Telefono02'])?'1':'0';
        $datosEstudiante['Cable']=isset($datosEstudiante['Cable'])?'1':'0';
        $datosEstudiante['Internet']=isset($datosEstudiante['Internet'])?'1':'0';
        $datosEstudiante['Celular']=isset($datosEstudiante['Celular'])?'1':'0';


        EstudioSocioeconimico::where('id','=', $id)->update($datosEstudiante);

        $estudioS=EstudioSocioeconimico::findOrFail($id);
        
        // return $datosEstudiante;

        return view('estudiosocioeconimico.edit', compact('estudioS'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EstudioSocioeconimico  $estudioSocioeconimico
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $post = EstudioSocioeconimico::find($id);
        $post->delete();
        return redirect('/estudiosocioeconimico')->with('eliminar','ok');;
    }

    public function imprimirInformePdf($id)
    {

        //estudiosocioeconimico estudio_socioeconimicos
        $estudioS=EstudioSocioeconimico::findOrFail($id);

        return view('estudiosocioeconimico.pdf_esocioeconomico', compact('estudioS'));

    }
}
