{{-- {{$Modo =='crear' ? 'Agregar':'modificar'}} --}}
{{-- <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active" id="nav-de-tab" data-toggle="tab" href="#nav-de" role="tab" aria-controls="nav-de" aria-selected="true">DATOS DEL ESTUDIANTE</a>
      <a class="nav-item nav-link" id="nav-sf-tab" data-toggle="tab" href="#nav-sf" role="tab" aria-controls="nav-sf" aria-selected="false">SALUD FÍSICA</a>
      <a class="nav-item nav-link" id="nav-df-tab" data-toggle="tab" href="#nav-df" role="tab" aria-controls="nav-df" aria-selected="false">DINÁMICA FAMILIAR</a>
      <a class="nav-item nav-link" id="nav-o-tab" data-toggle="tab" href="#nav-o" role="tab" aria-controls="nav-o" aria-selected="false">OBSERVACIONES</a>
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-de" role="tabpanel" aria-labelledby="nav-de-tab">
        @include('estudiantes.formde')
        
    </div>
    <div class="tab-pane fade" id="nav-sf" role="tabpanel" aria-labelledby="nav-sf-tab">@include('estudiantes.formsf')</div>
    <div class="tab-pane fade" id="nav-df" role="tabpanel" aria-labelledby="nav-df-tab">@include('estudiantes.formdf')</div>
    <div class="tab-pane fade" id="nav-o" role="tabpanel" aria-labelledby="nav-o-tab">@include('estudiantes.formo')</div>
  </div> --}}
  {{-- <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script>
    $('#btnNext').click(function(){
    $('.nav-tabs > .active').next('a')..trigger('click');
  });
  
    $('#btnPrevious').click(function(){
    $('.nav-tabs > .active').prev('li').find('a').trigger('click');
  });
  </script> --}}
  <nav>
    <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active" id="datos-estudiantes" data-toggle="tab" href="#nav-estudiantes" role="tab" aria-controls="nav-estudiantes" aria-selected="true">Datos del Estudiente</a>
      <a class="nav-item nav-link" id="nav-sFisica-tab" data-toggle="tab" href="#nav-sFisica" role="tab" aria-controls="nav-sFisica" aria-selected="false">Salud Física</a>
      <a class="nav-item nav-link" id="nav-dFamiliar-tab" data-toggle="tab" href="#nav-dFamiliar" role="tab" aria-controls="nav-dFamiliar" aria-selected="false">Dinámica Familiar</a>
      <a class="nav-item nav-link" id="nav-observaciones-tab" data-toggle="tab" href="#nav-observaciones" role="tab" aria-controls="nav-contact" aria-selected="false">Observaciones</a>
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-estudiantes" role="tabpanel" aria-labelledby="datos-estudiante">@include('estudiantes.formde')</div>
    <div class="tab-pane fade" id="nav-sFisica" role="tabpanel" aria-labelledby="nav-sFisica-tab">@include('estudiantes.formsf')</div>
    <div class="tab-pane fade" id="nav-dFamiliar" role="tabpanel" aria-labelledby="nav-dFamiliar-tab">@include('estudiantes.formdf')</div>
    <div class="tab-pane fade" id="nav-observaciones" role="tabpanel" aria-labelledby="nav-observaciones-tab">@include('estudiantes.formo')</div>
  </div>