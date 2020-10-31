@extends('layouts.app')

@section('content')

<style>
.fa.disabled,
.fa[disabled],
.disabled > .fa,
[disabled] > .fa {
  opacity: 0.5;
  /*optional*/ cursor: not-allowed;
  /*optional*/ pointer-events: none;
}
.delete 
{ 
background: #ffffff; 
background-position: 0px -401px; 
border:0; 
height: 21px;
margin-top: -1px;
padding-bottom: 2px;
}
.delete:hover {background: white;background-position: 0px -501px;color: #000000; }

</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">{{ __('NOTAS') }}</div>

                <div class="card-body">
                    <!-- <p>{{$datos[0]}}</p> -->
                    <!-- <p>{{$dat}}</p> -->
                    <!-- <p>{{$req}}</p> -->
                    <br>
                    <table class="table table-bordered"  cellspacing="0">
                        <tbody>
                            <tr class="bg-secondary text-white">
                                <td>Ciclo</td>
                                <td>Grado</td>
                                <td>Curso</td>
                            </tr>
                            <tr>
                                <td>{{$datos[0]->ciclo}}</td>
                                <td>{{$datos[0]->grado}}</td>
                                <td>{{$datos[0]->nombre}}</td>
                            </tr>
                        </body>
                    </table>

                    <table class="table table-bordered"  cellspacing="0">
                        <tbody>
                            <tr class="bg-secondary text-white">
                                <td>No.</td>
                                <td>Apellidos y nombres</td>
                                <td>Unidad 1</td>
                                <td>Unidad 2</td>
                                <td>Unidad 3</td>
                                <td>Unidad 4</td>
                                <td>Total</td>
                            </tr>
                            @foreach ($dat as $nota)            
                                <tr>
                                    <td>{{$loop->iteration}}
                                        <form  class="d-inline" method="POST" action="{{ url('/notas/create') }}">
                                            @csrf
                                            @method('PATCH')
                                            <input name="cgc" type="hidden" value=" {{$datos[0]->ciclo}} / {{$datos[0]->grado}} / {{$datos[0]->nombre}}">
                                            <input name="nombre" type="hidden" value="{{$nota->ApellidoPaterno}} {{$nota->ApellidoMaterno}}, {{$nota->PrimerNombre}} {{$nota->SegundoNombre}}">
                                            <input name="id" type="hidden" value="{{$nota->nota_id}}">
                                            <input name="estudiante" type="hidden" value=" {{$nota->est_id}}">
                                            <input name="curso" type="hidden" value="{{$datos[0]->id}}">
                                            <input name="unidad1" type="hidden" value="{{isset($nota->unidad1)?$nota->unidad1:0}}">
                                            <input name="unidad2" type="hidden" value="{{isset($nota->unidad2)?$nota->unidad2:0}}">
                                            <input name="unidad3" type="hidden" value="{{isset($nota->unidad3)?$nota->unidad3:0}}">
                                            <input name="unidad4" type="hidden" value="{{isset($nota->unidad4)?$nota->unidad4:0}}">
                                            <button class="delete" type="submit"><i class="fa fa-edit" aria-hidden="true" placeholder="Editar"></i> </button>

                                        </form>
                                    </td>
                                    <td>{{$nota->ApellidoPaterno}} {{$nota->ApellidoMaterno}}, {{$nota->PrimerNombre}} {{$nota->SegundoNombre}}</td>
                                    <td>{{isset($nota->unidad1)?$nota->unidad1:0}}</td>
                                    <td>{{isset($nota->unidad2)?$nota->unidad2:0}}</td>
                                    <td>{{isset($nota->unidad3)?$nota->unidad3:0}}</td>
                                    <td>{{isset($nota->unidad4)?$nota->unidad4:0}}</td>
                                    <td>{{($nota->unidad1+$nota->unidad2+$nota->unidad3+$nota->unidad4)/4}}</td>
                                </tr>

                            @endforeach
                        </body>
                    </table>


                    <form method="POST" action="{{ url('/cursos') }}">
 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 