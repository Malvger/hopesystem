{{-- {{$Modo =='crear' ? 'Agregar':'modificar'}} --}}
<br>

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

<!--Gustavo's changing tabs code-->

<div class="row">
    <div class="col clearfix">
        <span class="float-left">
            <input type="button" disabled="true" class="btn btn-primary" value="<" onClick="selectTab('nav-sFisica');">
        </span>
    </div>
    <div class="col clearfix">
        <span class="float-right">
            <input type="button" class="btn btn-primary" value=">" onClick="selectTab('nav-sFisica');">
        </span>
    </div>
</div>