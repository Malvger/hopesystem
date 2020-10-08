<?php

namespace App\Http\Controllers;

use App\DinamicaFamiliar;
use Illuminate\Http\Request;

class DinamicaFamiliarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('estudiantes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('estudiantes.create');
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
     * @param  \App\DinamicaFamiliar  $dinamicaFamiliar
     * @return \Illuminate\Http\Response
     */
    public function show(DinamicaFamiliar $dinamicaFamiliar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DinamicaFamiliar  $dinamicaFamiliar
     * @return \Illuminate\Http\Response
     */
    public function edit(DinamicaFamiliar $dinamicaFamiliar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DinamicaFamiliar  $dinamicaFamiliar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DinamicaFamiliar $dinamicaFamiliar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DinamicaFamiliar  $dinamicaFamiliar
     * @return \Illuminate\Http\Response
     */
    public function destroy(DinamicaFamiliar $dinamicaFamiliar)
    {
        //
    }
}
