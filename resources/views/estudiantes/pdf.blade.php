<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Test No.</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
        <style type="text/css">
            html {
                margin: 0;
            }
            body {
                background-color: #FFFFFF;
                font-size: 10px;
                margin: 36pt;
            }
        </style>
    </head>
    <body>
        <<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
{{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> --}}

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Estudiantes</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>CUI</th>
            {{-- <th>Primer Nombre</th>
            <th>Segundo Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th> --}}
            <th>Sexo</th>
            <th>Edad</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($datos as $estudiantes)
                @foreach($estudiantes as $estudiante)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$estudiante->ApellidoPaterno}} {{$estudiante->ApellidoMaterno}}, {{$estudiante->PrimerNombre}} {{$estudiante->SegundoNombre}}</td>
                        <td>{{$estudiante->CUI}}</td>
                        {{-- <td>{{$estudiante->PrimerNombre}}</td>
                        <td>{{$estudiante->SegundoNombre}}</td>
                        <td>{{$estudiante->ApellidoPaterno}}</td>
                        <td>{{$estudiante->ApellidoMaterno}}</td> --}}
                        <td>{{$estudiante->Sexo}}</td>
                        <td>{{$estudiante->Edad}}</td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
    </body>
</html>