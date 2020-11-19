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

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">ESTUDIO SOCIOECONÓMICO
        <div class="input-group md-form form-sm form-1 pl-0">
            <div class="input-group-prepend">
                <span class="input-group-text purple lighten-3" id="basic-text1"><i class="fas fa-search text-white" aria-hidden="true"></i></span>
            </div>
             <input id="buscar" class="form-control my-0 py-1" type="text" placeholder="Buscar" aria-label="Buscar">
             <span class="table-add ml-3 "><a href="{{ url('/estudiosocioeconimico/create') }}" class="text-success"><i
            class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
          </div>
        </h6>
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
                    <td>{{$estudio->Apellidos}}, {{$estudio->Nombres}}</td>
                    <td><a href="{{url('/estudiosocioeconimico/'.$estudio->id.'/edit')}}"><i class="fa fa-edit" aria-hidden="true" placeholder="Editar"></i> </a>
                        <a href="{{route('imprimir-informe-esocioeconomico', $estudio->id)}}" target="_blank"> <i class="fa fa-print ml-3 disabled"  placeholder="Imprimir"></i> </a>
                        <form method="POST" action="{{ url('/estudiosocioeconimico/'.$estudio->id) }}"  class="d-inline form-eliminar">
                          @csrf
                          @method('DELETE')
                          <button class='delete' type="submit" > <i class="fa fa-trash-alt  ml-3"   placeholder="Eliminar"></i> </button>
                          
                        </form>
                    </td>
                </tr>

                @endforeach
                  
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script>
$(document).ready(function(){
  $("#buscar").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#dataTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@endsection

 

@section('js')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  @if (session('eliminar') == 'ok')
    <script>
      Swal.fire(
        '¡Eliminado con éxito!',
        'Se ha eliminado el registro',
        'success'
      )
    </script>
      
  @endif

  <script>
    
    $('.form-eliminar').submit(function(event){
        event.preventDefault();
        Swal.fire({
        title: '¿Está seguro de eliminar?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'Cancelar'
        }).then((result) => {
        if (result.isConfirmed) {
            this.submit();
          }
        })
    });
  </script>
@endsection