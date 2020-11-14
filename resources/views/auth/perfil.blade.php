@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">{{ __('PERFIL ') }}
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('perfil') }}"  files="true" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{method_field('PATCH')}}
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <tbody>
                                <!-- <tr class="bg-secondary text-white">
                                    <td >id</td>
                                </tr>
                                <tr>
                                    <td >
                                    <input  type="text" class="form-control" name="id"
                                        value="{{isset($data->id)?$data->id:'' }}">
                                    </td>
                                </tr> -->
                                <input  type="hidden" class="form-control" name="id" value="{{isset($data->id)?$data->id:'' }}">
                                <tr class="bg-secondary text-white">
                                    <td >Nombre</td>
                                </tr>
                                <tr>
                                    <td >
                                    <input  type="text" class="form-control" name="name"
                                        value="{{isset($data->name)?$data->name:'' }}">
                                    </td>
                                </tr>
                                <tr class="bg-secondary text-white">
                                    <td >Teléfono</td>
                                </tr>
                                <tr>
                                    <td >
                                    <input  type="text" class="form-control" name="tel"
                                        value="{{isset($data->tel)?$data->tel:'' }}">
                                    </td>
                                </tr>
                                <tr class="bg-secondary text-white">
                                    <td >Dirección </td>
                                </tr>
                                <tr>
                                    <td >
                                    <input  type="text" class="form-control" name="direc"
                                        value="{{isset($data->direc)?$data->direc:'' }}">
                                    </td>
                                </tr>
                                <tr class="bg-secondary text-white">
                                    <td >Foto</td>
                                </tr>
                                <tr>
                                    <td >
                                    <!-- <input  type="text" class="form-control" name="id"
                                        value="{{isset($data->url)?$data->url:'' }}"> -->
                                        
                                        <img src="{{isset($data->url)?$data->url:'' }}" alt="{{isset($data->name)?$data->name:'' }}" style="width:48px;height:48px;">
                                        <input type="file" name="url">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <input type="submit" value="Enviar datos" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection