<?php

namespace App\Http\Controllers;

use App\notas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
     * @param  \App\notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function show(notas $notas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function edit($id )
    {
        //
        // return view('notas.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, notas $notas)
    {
        //
        $datos=request()->except('_token','_method');
        return view('notas.create',$datos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function destroy(notas $notas)
    {
        //
    }
}
