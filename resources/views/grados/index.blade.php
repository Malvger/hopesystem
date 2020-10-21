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


</style>
<!-- Begin Page Content -->
<div class="container-fluid">

       
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">GRADO
          <div class="input-group md-form form-sm form-1 pl-0">
            <div class="input-group-prepend">
                <span class="input-group-text purple lighten-3" id="basic-text1"><i class="fas fa-search text-white" aria-hidden="true"></i></span>
            </div>
             <input id="buscar" class="form-control my-0 py-1" type="text" placeholder="Buscar" aria-label="Buscar">
             <span class="table-add ml-3 "><a href="{{ url('/grados/create') }}" class="text-success"><i
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
                <th>Grado</th>
                <!-- <th>Descripción de Curso</th> -->
                <th>Ciclo</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($grado as $grados)            
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$grados->grado}}</td>
                    <td>
                    @foreach ($ciclo as $ciclos)  
                    <!-- {{$loop->iteration}} -->
                      {{$ciclos->id==$grados->ciclo?$ciclos->ciclo:''}}
                    @endforeach
                    <!-- {{isset($grados->Area)?$grados->Area=='1'?'Medio, Ciclo Diversificado':'Preprimaria y Primero':'Preprimaria y Primero' }}</td> -->
                    
                    
                    <td><a href="{{url('/grados/'.$grados->id.'/edit')}}" > <i class="fa fa-edit" aria-hidden="true" placeholder="Editar"></i> </a>
                        <a  href="#"> <i class="fa fa-print ml-3 disabled"  placeholder="Imprimir"></i> </a>
                        <a  href="#"> <i class="fa fa-trash  ml-3 disabled"   placeholder="Eliminar"></i> </a>
 
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