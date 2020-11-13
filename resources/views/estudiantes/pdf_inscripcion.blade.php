+<!DOCTYPE html>
<html lang="en">
    <!--
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
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    -->
    <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">{{ __('DATOS DEL ESTUDIANTE ') }}</div>

                    <div class="card-body">
                        <table class="table table-bordered" width="100%" cellspacing="0">
    <tbody>
        <tr class="bg-secondary text-white">
            <td colspan="4">{{ __('Nivel ') }}</td>
        </tr>
        <tr>
            <td colspan="4">
            
            <select id="Area" class="form-control" name="Area">  
                    <option value="0" {{isset($estudiante->Area)?$estudiante->Area=='0'?'selected':'':'' }} > Preprimaria y Primero </option>  
                    <option value="1" {{isset($estudiante->Area)?$estudiante->Area=='1'?'selected':'':'' }}> Medio, Ciclo Diversificado</option>  
                </select>
            
            </td> 
        </tr>

        <tr class="bg-secondary text-white">
            <td>{{ __('Primer Nombre') }}</td>
            <td>{{ __('Segundo Nombre') }}</td>
            <td>{{ __('Apellido Paterno') }}</td>
            <td>{{ __('Apellido Materno') }}</td>
        </tr>
        <tr>
            <td><input id="PrimerNombre" type="text" class="form-control" name="PrimerNombre" required
                value="{{isset($estudiante->PrimerNombre)?$estudiante->PrimerNombre:'' }}"></td>
            <td><input id="SegundoNombre" type="text" class="form-control" name="SegundoNombre" 
                value="{{isset($estudiante->SegundoNombre)?$estudiante->SegundoNombre:'' }}"></td>
            <td><input id="ApellidoPaterno" type="text" class="form-control" name="ApellidoPaterno"  required
                value="{{isset($estudiante->ApellidoPaterno)?$estudiante->ApellidoPaterno:'' }}"></td>
            <td><input id="ApellidoMaterno" type="text" class="form-control" name="ApellidoMaterno" 
                value="{{isset($estudiante->ApellidoMaterno)?$estudiante->ApellidoMaterno:'' }}"></td>
        </tr>
        <tr class="bg-secondary text-white">
            <td>{{ __('Sexo') }}</td>
            <td>{{ __('Edad') }}</td>
            <td>{{ __('CUI') }}</td>
            <td>{{ __('Comunidad Étnica') }}</td>
        </tr>
        <tr>
            <td><input id="Sexo" type="text" class="form-control" name="Sexo"  required
                value="{{isset($estudiante->Sexo)?$estudiante->Sexo:'' }}"></td>
            <td><input id="Edad" type="text" class="form-control" name="Edad"  required
                value="{{isset($estudiante->Edad)?$estudiante->Edad:'' }}"></td>
            <td><input id="CUI" type="text" class="form-control" name="CUI" required
                value="{{isset($estudiante->CUI)?$estudiante->CUI:'' }}"></td>
            <td><input id="ComunidadEtnica" type="text" class="form-control" name="ComunidadEtnica" 
                value="{{isset($estudiante->ComunidadEtnica)?$estudiante->ComunidadEtnica:'' }}"></td>
        </tr>
        <tr class="bg-secondary text-white">
            <td>{{ __('Lugar de Nacimiento') }}</td>
            <td>{{ __('Fecha de Nacimiento') }}</td>
            <td>{{ __('Idioma Materno') }}</td>
            <td>{{ __('Segundo Idioma') }}</td>
        </tr>
        <tr>
            <td><input id="LugarNacimiento" type="text" class="form-control" name="LugarNacimiento" 
                value="{{isset($estudiante->LugarNacimiento)?$estudiante->LugarNacimiento:'' }}"></td>
            <td><input id="FechaNacimiento" type="date" class="form-control" name="FechaNacimiento"
                value="{{isset($estudiante->FechaNacimiento)?$estudiante->FechaNacimiento:'' }}"></td>
            <td><input id="IdiomaMaterno" type="text" class="form-control" name="IdiomaMaterno" 
                value="{{isset($estudiante->IdiomaMaterno)?$estudiante->IdiomaMaterno:'' }}"></td>
            <td><input id="SugundoIdioma" type="text" class="form-control" name="SugundoIdioma" 
                value="{{isset($estudiante->SugundoIdioma)?$estudiante->SugundoIdioma:'' }}"></td>
        </tr>
    </tbody>
</table>

<table class="table table-bordered" width="100%" cellspacing="0">
    <tbody>
        <tr class="bg-secondary text-white">
            <td>{{ __('Nombre y Apellidos de la Madre') }}</td>
            <td>{{ __('Nombre y Apellidos del Padre') }}</td>
        </tr>
        <tr>
            <td><input id="NombreApellidoMadre" type="text" class="form-control" name="NombreApellidoMadre" 
                value="{{isset($estudiante->NombreApellidoMadre)?$estudiante->NombreApellidoMadre:'' }}"></td>
            <td><input id="NombreApellidoPadre" type="text" class="form-control" name="NombreApellidoPadre" 
                value="{{isset($estudiante->NombreApellidoPadre)?$estudiante->NombreApellidoPadre:'' }}"></td>
        </tr>
    </tbody>
</table>
<table class="table table-bordered" width="100%" cellspacing="0">
    <tbody>
        <tr class="bg-secondary text-white">
            <td>{{ __('DPI de la Madre') }}</td>
            <td>{{ __('No. Tel de la Madre') }}</td>
            <td>{{ __('DPI del Padre') }}</td>
            <td>{{ __('No. Tel. del Padre') }}</td>
        </tr>
        <tr>
            <td><input id="DPIMadre" type="text" class="form-control" name="DPIMadre" 
                value="{{isset($estudiante->DPIMadre)?$estudiante->DPIMadre:'' }}"></td>
            <td><input id="TelMadre" type="text" class="form-control" name="TelMadre" 
                value="{{isset($estudiante->TelMadre)?$estudiante->TelMadre:'' }}"></td>
            <td><input id="DPIPadre" type="text" class="form-control" name="DPIPadre" 
                value="{{isset($estudiante->DPIPadre)?$estudiante->DPIPadre:'' }}"></td>
            <td><input id="TelPadre" type="text" class="form-control" name="TelPadre" 
                value="{{isset($estudiante->TelPadre)?$estudiante->TelPadre:'' }}"></td>
        </tr>
    </tbody>
</table>

<table class="table table-bordered" width="100%" cellspacing="0">
    <tbody>
        <tr class="bg-secondary text-white">
            <td>{{ __('Nombres y Apellidos del Encargado') }}</td>
            <td>{{ __('DPI del Encargado') }}</td>
            <td>{{ __('No. Tel. del Encargado') }}</td>
        </tr>
        <tr>
            <td><input id="NombreApellidoEncargado" type="text" class="form-control" name="NombreApellidoEncargado" 
                value="{{isset($estudiante->NombreApellidoEncargado)?$estudiante->NombreApellidoEncargado:'' }}"></td>
            <td><input id="DPIMadreEncargado" type="text" class="form-control" name="DPIMadreEncargado" 
                value="{{isset($estudiante->DPIMadreEncargado)?$estudiante->DPIMadreEncargado:'' }}"></td>
            <td><input id="TelMadreEncargado" type="text" class="form-control" name="TelMadreEncargado" 
                value="{{isset($estudiante->TelMadreEncargado)?$estudiante->TelMadreEncargado:'' }}"></td>
        </tr>
    </tbody>
</table>
<table class="table table-bordered" width="100%" cellspacing="0">
    <tbody>
        <tr class="bg-secondary text-white">
            <td>{{ __('Dirección Domiciliar del Estudiante') }}</td>
        </tr>
        <tr>
            <td><input id="DireccionDomicilioEstudiante" type="text" class="form-control" name="DireccionDomicilioEstudiante"
                value="{{isset($estudiante->DireccionDomicilioEstudiante)?$estudiante->DireccionDomicilioEstudiante:'' }}"></td>
        </tr>
    </tbody>
</table>
<br>
<h5>DATOS ACADÉMICOS</h5>

<table class="table table-bordered" width="100%" cellspacing="0">
    <tbody>
        <tr class="bg-secondary text-white">
            <td>{{ __('Establecimiento del que Proviene') }}</td>
        </tr>
        <tr>
            <td><input id="EstablecimientoProviene" type="text" class="form-control" name="EstablecimientoProviene" 
                value="{{isset($estudiante->EstablecimientoProviene)?$estudiante->EstablecimientoProviene:'' }}"></td>
        </tr>
    </tbody>
</table>
<table class="table table-bordered" width="100%" cellspacing="0">
    <tbody>
        <tr class="bg-secondary text-white">
            <td>{{ __('Grado a Ingresar') }}</td>
            <td>{{ __('Repitente') }}</td>
            <td>{{ __('No. de Veces') }}</td>
        </tr>
        <tr>
            <td><input id="GradoIngresar" type="text" class="form-control" name="GradoIngresar" 
                value="{{isset($estudiante->GradoIngresar)?$estudiante->GradoIngresar:'' }}"></td>
            <td>
                <input id="RepitenteSi" type="checkbox" class="form-control" name="RepitenteSi" 

                    {{isset($estudiante->RepitenteNo)?$estudiante->RepitenteSi=='1'?'checked':'':'' }}
                    {{-- {{$estudiante->RepitenteSi=='1'?'checked':'' }} --}}
                    value="1"
                    >
                {{-- NO <input id="RepitenteNo" type="text" class="form-control" name="RepitenteNo" 
                    value="{{isset($estudiante->RepitenteNo)?$estudiante->RepitenteNo:'' }}"> --}}
                {{-- NO <input id="RepitenteNo" type="checkbox" class="form-control" name="RepitenteNo" 
                    {{$estudiante->RepitenteSi=='1'?'checked':'' }} --}}
                    {{-- {{isset($estudiante->RepitenteNo)?'checked':'' }} --}}
                    {{-- value="1"
                    > --}}

            </td>
            <td>
                {{-- <input id="Noveces" type="text" class="form-control" name="Noveces" 
                value="{{isset($estudiante->Noveces)?$estudiante->Noveces:'' }}"> --}}
                <select id="Noveces" class="form-control" name="Noveces">  
                    <option value="0" {{isset($estudiante->Noveces)?$estudiante->Noveces=='0'?'selected':'':'' }} > 0 </option>  
                    <option value="1" {{isset($estudiante->Noveces)?$estudiante->Noveces=='1'?'selected':'':'' }}> 1 </option>  
                    <option value="2" {{isset($estudiante->Noveces)?$estudiante->Noveces=='2'?'selected':'':'' }}> 2 </option>  
                    <option value="3" {{isset($estudiante->Noveces)?$estudiante->Noveces=='3'?'selected':'':'' }}> 3 </option>  
                    <option value="4" {{isset($estudiante->Noveces)?$estudiante->Noveces=='4'?'selected':'':'' }}> 4 </option>  
                    <option value="5" {{isset($estudiante->Noveces)?$estudiante->Noveces=='5'?'selected':'':'' }}> 5 </option>  
                </select>
            </td>
        </tr>
    </tbody>
</table>

<br>
<table class="table table-bordered" width="100%" cellspacing="0">
    <tbody>
            <tr class="bg-secondary text-white text-center">
                <td>{{ __('Salud Física') }}</td>
            </tr>
        </tbody>
    </table>
<table class="table table-bordered" width="100%" cellspacing="0">
    <tbody>
        <tr>
            <td>
                {{ __('¿El estudiante sufre algún problema de salud?')}}
            </td>
            {{-- <td >
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="checkes">
                </div>
            </td> --}}
            <td>
              <input type="text" id="ProbSaludEstudiante" name="ProbSaludEstudiante" placeholder="Especifique" class="form-control" 
                value="{{isset($estudiante->ProbSaludEstudiante)?$estudiante->ProbSaludEstudiante:'' }}">
            </td>
        </tr>
        <tr>
            <td>
                {{ __('¿Algún miembro que conforma su hogar presenta un problema de salud?')}}
            </td>
            {{-- <td>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input">
                </div>
            </td> --}}
            <td>
                <input type="text" id="ProbSaludHogar" name="ProbSaludHogar" placeholder="Especifique" class="form-control"
                value="{{isset($estudiante->ProbSaludHogar)?$estudiante->ProbSaludHogar:'' }}">
            </td>
        </tr>
        <tr>
            <td>
                {{'Si la respuesta es si, ¿a qué miembro que conforma su hogar afecta la enfermedad?'}}
            </td>
            <td colspan="3">
                <input type="text" id="NombProbSaludHogar" name="NombProbSaludHogar" placeholder="Nombres y Apellidos" class="form-control"
                value="{{isset($estudiante->NombProbSaludHogar)?$estudiante->NombProbSaludHogar:'' }}">
            </td>
        </tr>
    </tbody>
</table>

<table class="table table-bordered" width="100%" cellspacing="0">
    <tbody>
        <tr class="bg-secondary text-white text-center">
            <td>{{__('Salud Psicológica')}}</td>
        </tr>
    </tbody>
</table>
<table class="table table-bordered" width="100%" cellspacing="0">
    <tbody>
        <tr>
            <td>
                {{__('¿El estudiante presenta algún tipo de discapacidad?')}}
                <br>
                <input type="text" id="DiscEstudiante" name="DiscEstudiante" class="form-control" placeholder="Especifique"
                value="{{isset($estudiante->DiscEstudiante)?$estudiante->DiscEstudiante:'' }}">
            </td>
            {{-- <td>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input">
                </div>
            </td> --}}
        </tr>
        <tr>
            <td>
                {{__('¿En caso de existir discapacidad ¿cuentan con algún certificado u otro documento que acredite la discapacidad?')}}
                <br>
                <input type="text" id="CertificadoDiscapacidad" name="CertificadoDiscapacidad" class="form-control" placeholder="De no contar con el certificado de discapacidad, señale el motivo"
                value="{{isset($estudiante->CertificadoDiscapacidad)?$estudiante->CertificadoDiscapacidad:'' }}">
            </td>
            {{-- <td>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input">
                </div>
            </td> --}}
        </tr>
        <tr>
            <td>
                {{__('Además del estudiante ¿otro miembro de la familia presenta discapacidad?')}}
                <br>
                <input id="DiscFamilia" name="DiscFamilia" type="text" class="form-control" placeholder="Especifique"
                value="{{isset($estudiante->DiscFamilia)?$estudiante->DiscFamilia:'' }}">

            </td>
            {{-- <td>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input">
                </div>
            </td> --}}
        </tr>
    </tbody>
</table>
<h5>DINÁMICA FAMILIAR</h5>
<div class="table-responsive">
<table class="table table-bordered" width="100%" cellspacing="0">
    <thead>
      <tr class="bg-secondary text-white"> <!--Filas-->
        <th scope="col">¿Presenta algún problema familiar que desee poner en conocimiento de las autoridades del Centro Educativo?</th> <!--Encabezados-->
        <th scope="col">Si la respuesta es si explique</th>
      <tr>
          <td>
            <input id="ProblemaFamiliarSi" type="checkbox" class="form-control" name="ProblemaFamiliarSi"
            {{isset($estudiante->ProblemaFamiliarSi)?$estudiante->ProblemaFamiliarSi=='1'?'checked':'':'' }}
                    value="1">
          </td>

          <td>
            <input id="Explique" type="text" class="form-control" name="Explique"
            value="{{isset($estudiante->Explique)?$estudiante->Explique:'' }}"> 
          </td>
      </tr>
    </thead>

    <thead>
        <tr class="bg-secondary text-white"> <!--Filas-->
          <th scope="col">En el caso de padres separados ¿el estudiante mantiene relación con ambos padres?
          </th> <!--Encabezados-->
          
          <th scope="col">Si no mantiene comunicación con los padres mencione con quién</th>
          
        </tr>
        <tr>
            <td>
              <input id="PadresSeparadosSi" type="checkbox" class="form-control" name="PadresSeparadosSi"
              {{isset($estudiante->PadresSeparadosSi)?$estudiante->PadresSeparadosSi=='1'?'checked':'':'' }}
                    value="1">
            </td>
  
            <td>
              <input id="Razones" type="text" class="form-control" name="Razones"
              value="{{isset($estudiante->Razones)?$estudiante->Razones:'' }}"> 
            </td>
        </tr>
      </thead>
        </tr>
      </thead>
  </table>
</div>

<div class="table-responsive">
    <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
            <thead>
                <tr class="bg-secondary text-white"> <!--Filas-->
                  <th scope="col">Razones por los que no se comunican
                  </th> <!--Encabezados-->
                  
                </tr>
                <tr>
                    <td>
                        <input id="RazonesPorque" type="text" class="form-control" name="RazonesPorque"
                        value="{{isset($estudiante->RazonesPorque)?$estudiante->RazonesPorque:'' }}"> 
                    </td>
        
        </thead>
    </table>
</div>

<!--Documentación Entegada-->

<h5>DOCUMENTACIÓN ENTREGADA</h5>

<div class="table-responsive">
<table class="table table-bordered" width="100%" cellspacing="0">
    <thead>
      <tr class="bg-secondary text-white"> <!--Filas-->
        <th scope="col">Certificación de Nacimiento (RENAP)</th> <!--Encabezados-->

        <th scope="col">Fotocopia DPI de Papá</th>
        
      </tr>
      <tr>
          <td>
            <input id="CertificadoRENAP" type="checkbox" class="form-control" name="CertificadoRENAP"
            {{isset($estudiante->CertificadoRENAP)?$estudiante->CertificadoRENAP=='1'?'checked':'':'' }}
            value="1">
          </td>

          <td>
            <input id="DPIPapa" type="checkbox" class="form-control" name="DPIPapa"
            {{isset($estudiante->DPIPapa)?$estudiante->DPIPapa=='1'?'checked':'':'' }}
            value="1">
          </td>
      </tr>
    </thead>

    <thead>
        <tr class="bg-secondary text-white"> <!--Filas-->
          <th scope="col">Fotocopia Tarjeta de vacunas
          </th> <!--Encabezados-->
          
          <th scope="col">Fotocopia DPI de Mamá</th>
          
        </tr>
        <tr>
            <td>
              <input id="vacunacion" type="checkbox" class="form-control" name="vacunacion"
              {{isset($estudiante->vacunacion)?$estudiante->vacunacion=='1'?'checked':'':'' }}
            value="1">
            </td>
  
            <td>
                <input id="DPIMama" type="checkbox" class="form-control" name="DPIMama"
                {{isset($estudiante->DPIMama)?$estudiante->DPIMama=='1'?'checked':'':'' }}
            value="1">
            </td>
        </tr>
      </thead>

      <thead>
        <tr class="bg-secondary text-white"> <!--Filas-->
          <th scope="col">Constancia y diploma de preparatoria
          </th> <!--Encabezados-->
          <th scope="col">Fotocopia DPI Encargado</th>
          
        </tr>
        <tr>
            <td>
                <input id="diplomapre" type="checkbox" class="form-control" name="diplomapre"
                {{isset($estudiante->diplomapre)?$estudiante->diplomapre=='1'?'checked':'':'' }}
            value="1">
            </td>
            <td>
                <input id="DPISi" type="checkbox" class="form-control" name="DPISi"
                {{isset($estudiante->DPISi)?$estudiante->DPISi=='1'?'checked':'':'' }}
            value="1"> 
            </td>

        </tr>
      </thead>

      <thead>
        <tr class="bg-secondary text-white"> <!--Filas-->
          <th scope="col">Constancia de código personal
          </th> <!--Encabezados-->
          <th scope="col">Constancia de buena conducta</th>
          
        </tr>
        <tr>
            <td>
                <input id="codigopersonalSi" type="checkbox" class="form-control" name="codigopersonalSi"
                {{isset($estudiante->codigopersonalSi)?$estudiante->codigopersonalSi=='1'?'checked':'':'' }}
            value="1">
            </td>
            <td>
                <input id="buenaConductaSi" type="checkbox" class="form-control" name="buenaConductaSi"
                {{isset($estudiante->buenaConductaSi)?$estudiante->buenaConductaSi=='1'?'checked':'':'' }}
            value="1"> 
            </td>

        </tr>
      </thead>

     
  </table>
</div>

<div class="table-responsive">
    <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
            <thead>
                <tr class="bg-secondary text-white"> <!--Filas-->
                  <th scope="col">Certificados Originales
                  </th> <!--Encabezados-->
                  
                </tr>
                <tr>
                    <td>
                        <input id="certificadoOriginal" type="checkbox" class="form-control" name="certificadoOriginal"
                        {{isset($estudiante->certificadoOriginal)?$estudiante->certificadoOriginal=='1'?'checked':'':'' }}
            value="1">
                    </td>
        
        </thead>
    </table>
</div>

<br>
<table class="table table-bordered" width="100%" cellspacing="0">
    <tbody>
        <tr class="bg-secondary text-white">
            <td>{{ __('Observaciones') }}</td>
        </tr>
        <tr>
            <td>
                <textarea 
                    rows="8"
                    id="Observaciones"
                    type="text"
                    class="form-control"
                    name="Observaciones">{{isset($estudiante->Observaciones)?$estudiante->Observaciones:''}}</textarea>
            </td>
        </tr>
        <!-- <tr>
            <td>
            @if(count($errors))
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There were some problems with your input.
				<br/>
				<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
        </td>
        </tr> -->
    </tbody>
</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>