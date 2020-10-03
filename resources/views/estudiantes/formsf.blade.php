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

<!--Gustavo's changing tabs code-->

<div class="row">
    <div class="col clearfix">
        <span class="float-left">
            <input type="button" class="btn btn-primary" value="<" onClick="selectTab('nav-estudiantes');">
        </span>
    </div>
    <div class="col clearfix">
        <span class="float-right">
            <input type="button" class="btn btn-primary" value=">" onClick="selectTab('nav-dFamiliar');">
        </span>
    </div>
</div>