<?php

namespace App\Http\Controllers;

use App\AoGrado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AoGradoController extends Controller
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
    public function index($id)
    {
        //
        $aogrado = AoGrado::join("grados", "ao_grados.Grado", "=", "grados.id")
        ->select('grados.grado','ao_grados.Ano')
        ->where('Estudiante','=', $id)
        ->get();
        // $datos['id'] = $id;

        return view('aogrado.index', compact('aogrado'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AoGrado  $aoGrado
     * @return \Illuminate\Http\Response
     */
    public function show(AoGrado $aoGrado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AoGrado  $aoGrado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('aogrado.index', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AoGrado  $aoGrado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        //return view('aogrado.index', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AoGrado  $aoGrado
     * @return \Illuminate\Http\Response
     */
    public function destroy(AoGrado $aoGrado)
    {
        //
    }
}
