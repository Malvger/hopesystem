

  <nav>
    <div class="nav nav-tabs nav-justified" id="tabs" role="tablist">
      <a class="nav-item nav-link active" id="datos-estudiantes" data-toggle="tab" href="#nav-estudiantes" role="tab" aria-controls="nav-estudiantes" aria-selected="true">DATOS DEL ESTUDIENTE</a>
      <a class="nav-item nav-link" id="nav-sFisica-tab" data-toggle="tab" href="#nav-sFisica" role="tab" aria-controls="nav-sFisica" aria-selected="false">SALUD FÍSICA</a>
      <a class="nav-item nav-link" id="nav-dFamiliar-tab" data-toggle="tab" href="#nav-dFamiliar" role="tab" aria-controls="nav-dFamiliar" aria-selected="false">DINÁMICA FAMILIAR</a>
      <a class="nav-item nav-link" id="nav-observaciones-tab" data-toggle="tab" href="#nav-observaciones" role="tab" aria-controls="nav-observaciones" aria-selected="false">OBSERVACIONES</a>
      <a class="nav-item nav-link" id="nav-asignacion-tab" data-toggle="tab" href="#nav-asignacion" role="tab" aria-controls="nav-asignacion" aria-selected="false">GRADO</a>
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-estudiantes" role="tabpanel" aria-labelledby="datos-estudiante">@include('estudiantes.formde')</div>
    <div class="tab-pane fade" id="nav-sFisica" role="tabpanel" aria-labelledby="nav-sFisica-tab">@include('estudiantes.formsf')</div>
    <div class="tab-pane fade" id="nav-dFamiliar" role="tabpanel" aria-labelledby="nav-dFamiliar-tab">@include('estudiantes.formdf')</div>
    <div class="tab-pane fade" id="nav-observaciones" role="tabpanel" aria-labelledby="nav-observaciones-tab">@include('estudiantes.formo')</div>
    <div class="tab-pane fade" id="nav-asignacion" role="tabpanel" aria-labelledby="nav-asignacion-tab">@include('estudiantes.frmasig')</div>
  </div>

<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script>

  function selectTab(tab){
    $('.nav-tabs a[href="#' + tab + '"]').tab('show');
  };

</script>