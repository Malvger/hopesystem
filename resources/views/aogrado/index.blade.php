@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">{{ __('ASIGNACIÓN DE GRADO - ')  }} 
                {{$estudiante['0']->ApellidoPaterno}}
                {{$estudiante['0']->ApellidoMaterno}},
                {{$estudiante['0']->PrimerNombre}}
                {{$estudiante['0']->SegundoNombre}}
                <br>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                <div class="card-body">
                <form method="POST" action="{{ url('/aogrado',$id) }}">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <tbody>
                            <tr class="bg-secondary text-white">
                                <td >{{ __('Año')}}</td>
                                <td >{{ __('Grado')}}</td>
                                <td >{{ __('Acción')}}</td>
                            </tr>
                            <tr>
                                <td>
                                    <select  class="form-control" name="ano"> 
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                    </select>
                                </td>
                                <td>
                                    <select id="grado" class="form-control" name="grado">  
                                        @foreach($grados as $grad)
                                            <option value="{{$grad->id}}"
                                            {{isset($estudiante->grado)?$estudiante->grado==$grad->id?'selected':'':'' }}
                                            >{{$grad->ciclo}} - {{$grad->grado}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>     
                                        <button type="submit" class="btn btn-primary" >{{ __('Enviar') }}</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                <table class="table table-bordered" cellspacing="0">
                    <tbody>
                                <tr class="bg-secondary text-white">
                                    <td>Grado</td>
                                    <td>Año</td>
                                </tr>
                        @foreach ($aogrado as $est)            
                                <tr>
                                    <td>{{$est->grado}}</td>
                                    <td>{{$est->Ano}}</td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
