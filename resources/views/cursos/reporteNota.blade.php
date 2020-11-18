<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de notas {{$datos[0]->nombre}}  |  {{$datos[0]->grado}}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="container-fluid">

                <br>
                <h1 class="text-center">{{ __('REPORTE DE NOTAS') }}</h1>
                <hr align="center" size="2" width="100%" />

                <!-- <p>{{$datos[0]}}</p> -->
                <!-- <p>{{$dat}}</p> -->
                <!-- <p>{{$req}}</p> -->
                <br>
                <table class="table table-bordered table-sm col-6">
                    <thead class="table-active">
                        <tr>
                            <th>Ciclo</th>
                            <th>Grado</th>
                            <th>Curso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$datos[0]->ciclo}}</td>
                            <td>{{$datos[0]->grado}}</td>
                            <td>{{$datos[0]->nombre}}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-bordered table-sm">
                    <thead class="table-active">
                        <tr>
                            <th class="text-center">No.</th>
                            <th>Apellidos y Nombres</th>
                            <th class="text-center">Unidad I</th>
                            <th class="text-center">Unidad II</th>
                            <th class="text-center">Unidad III</th>
                            <th class="text-center">Unidad IV</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dat as $nota)            
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td>{{$nota->ApellidoPaterno}} {{$nota->ApellidoMaterno}}, {{$nota->PrimerNombre}} {{$nota->SegundoNombre}}</td>
                                <td class="text-center">{{isset($nota->unidad1)?$nota->unidad1:0}}</td>
                                <td class="text-center">{{isset($nota->unidad2)?$nota->unidad2:0}}</td>
                                <td class="text-center">{{isset($nota->unidad3)?$nota->unidad3:0}}</td>
                                <td class="text-center">{{isset($nota->unidad4)?$nota->unidad4:0}}</td>
                                <th class="text-center">{{($nota->unidad1+$nota->unidad2+$nota->unidad3+$nota->unidad4)/4}}</th>
                            </tr>
                        @endforeach
                    </body>
                </table>  
                <br>
                <hr align="center" size="2" width="100%" />
            </div>
        </div>
    </div> 
</body>
</html>