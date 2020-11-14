<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\estudiante;
use App\Grado;
use App\Ciclo;
use App\User;


class UserController extends Controller
{
    //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }
    public function update(Request $request)
    {
        //

                $data=request()->except('_token','_method');

                $id=$data['id'];
                if(count($data)>1){

                    if (isset($data['url'])){
                        $file = $request->file('url');
                        $nombre =$data['id'] . " - " . $file->getClientOriginalName();
                        $file->move("assets/user",$nombre);
                        
                        $data['url']="assets/user/".$nombre;
                    }else{
                        unset($data['url']);
                    }


                    User::where('id','=', $id)->update($data);
                }

                $data=User::findOrFail($id);
        
        
                return view('auth.perfil', compact('data'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
