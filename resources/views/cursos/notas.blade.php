@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">{{ __('NOTAS') }}</div>

                <div class="card-body">
                    <!-- <p>{{$datos[0]}}</p> -->
                    <!-- <p>{{$dat}}</p> -->
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
                                    <a href="#" > <i class="fa fa-edit ml-3" aria-hidden="true" placeholder="Editar"></i> </a>
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