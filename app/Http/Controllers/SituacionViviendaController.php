<?php

namespace App\Http\Controllers;

use App\SituacionVivienda;
use Illuminate\Http\Request;

class SituacionViviendaController extends Controller
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
     * @param  \App\SituacionVivienda  $situacionVivienda
     * @return \Illuminate\Http\Response
     */
    public function show(SituacionVivienda $situacionVivienda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SituacionVivienda  $situacionVivienda
     * @return \Illuminate\Http\Response
     */
    public function edit(SituacionVivienda $situacionVivienda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SituacionVivienda  $situacionVivienda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SituacionVivienda $situacionVivienda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SituacionVivienda  $situacionVivienda
     * @return \Illuminate\Http\Response
     */
    public function destroy(SituacionVivienda $situacionVivienda)
    {
        //
    }
}
