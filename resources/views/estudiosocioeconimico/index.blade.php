@extends('layouts.app')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Estudiantes Nivel Medio, Ciclo Diversificado</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($estudiosocioeconimico as $estudio)            
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$estudio->NombreApellido}}</td>
                    <td><a href="{{url('/estudiosocioeconimico/'.$estudio->id.'/edit')}}"> Editar </a>
        
                    {{-- <form method="POST" accept="{{url('/estudiosocioeconimico/'.$estudio->id)}}" >
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" onclick="return confirm('Borrar?')">Borrar</button>
                    </form> --}}
                    </td>
                </tr>

                @endforeach
                  
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  
@endsection