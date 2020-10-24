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

       
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">ESTUDIANTES
          <div class="input-group md-form form-sm form-1 pl-0">
            <div class="input-group-prepend">
                <span class="input-group-text purple lighten-3" id="basic-text1"><i class="fas fa-search text-white" aria-hidden="true"></i></span>
            </div>
             <input id="buscar" class="form-control my-0 py-1" type="text" placeholder="Buscar" aria-label="Buscar">
          </div>
          <br>
          
            <!--Selección de Primaria o Diversificado-->
            <div>
                <select id="Area" class="form-control" name="Area">  
                    <option value="0" {{isset($estudiante->Area)?$estudiante->Area=='0'?'selected':'':'' }} > Preprimaria y Primero </option>  
                    <option value="1" {{isset($estudiante->Area)?$estudiante->Area=='1'?'selected':'':'' }}> Medio, Ciclo Diversificado</option>  
                </select>
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
                <th>Área de estudios</th>
                <th>CUI</th>
                {{-- <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th> --}}
                <th>Sexo</th>
                <th>Edad</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($estudiantes as $estudiante)            
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$estudiante->ApellidoPaterno}} {{$estudiante->ApellidoMaterno}}, {{$estudiante->PrimerNombre}} {{$estudiante->SegundoNombre}}</td>
                    <td>{{isset($estudiante->Area)?$estudiante->Area=='1'?'Medio, Ciclo Diversificado':'Preprimaria y Primero':'Preprimaria y Primero' }}</td>
                    <td>{{$estudiante->CUI}}</td>
                    {{-- <td>{{$estudiante->PrimerNombre}}</td>
                    <td>{{$estudiante->SegundoNombre}}</td>
                    <td>{{$estudiante->ApellidoPaterno}}</td>
                    <td>{{$estudiante->ApellidoMaterno}}</td> --}}
                    <td>{{$estudiante->Sexo}}</td>
                    <td>{{$estudiante->Edad}}</td>
                    <td><a href="{{url('/estudiantes/'.$estudiante->id.'/edit')}}" > <i class="fa fa-edit"   aria-hidden="true" placeholder="Editar"></i> </a>
                        <a  href="#"> <i class="fa fa-print ml-3 disabled"  placeholder="Imprimir"></i> </a>
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