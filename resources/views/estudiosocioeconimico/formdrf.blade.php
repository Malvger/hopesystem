<br>

<!-- <h5>I.	DATOS DE RESPONSABLE DE LA FAMILIA </h5> -->
<table class="table table-bordered" width="100%" cellspacing="0">
    <tbody>
        <tr class="bg-secondary text-white">
            <td colspan="2"> {{ __('Apellidos') }}</td>
            <td colspan="2">{{ __('Nombres') }}</td>
        </tr>
        <tr>
            <td colspan="2"><input id="Apellidos" type="text" class="form-control" name="Apellidos" required
                value="{{isset($estudioS->Apellidos)?$estudioS->Apellidos:'' }}"></td>
            <td colspan="2"><input id="Nombres" type="text" class="form-control" name="Nombres" required
                value="{{isset($estudioS->Nombres)?$estudioS->Nombres:'' }}"></td>
        </tr>
        <tr class="bg-secondary text-white">
            <td>{{ __('Sexo') }}</td>
            <td>{{ __('Edad') }}</td>
            <td>{{ __('CUI') }}</td>
            <td>{{ __('Comunidad Étnica') }}</td>
        </tr>
        <tr>
            <td><input id="Sexo" type="text" class="form-control" name="Sexo" required
                value="{{isset($estudioS->Sexo)?$estudioS->Sexo:'' }}"></td>
            <td><input id="Edad" type="text" class="form-control" name="Edad" required
                value="{{isset($estudioS->Edad)?$estudioS->Edad:'' }}"></td>
            <td><input id="CUI" type="text" class="form-control" name="CUI" required
                value="{{isset($estudioS->CUI)?$estudioS->CUI:'' }}"></td>
            <td><input id="ComunidadEtnica" type="text" class="form-control" name="ComunidadEtnica" 
                value="{{isset($estudioS->ComunidadEtnica)?$estudioS->ComunidadEtnica:'' }}"></td>
        </tr>
        <tr class="bg-secondary text-white">
            <td>{{ __('Estado Civil') }}</td>
            <td>{{ __('Idioma Materno') }}</td>
            <td>{{ __('Segundo Idioma') }}</td>
            <td>{{ __('No. Telefono') }}</td>
        </tr>
        <tr>
            <td><input id="EstadoS" type="text" class="form-control" name="EstadoS" 
                value="{{isset($estudioS->EstadoS)?$estudioS->EstadoS:'' }}"></td>
            <td><input id="IdiomaMaterno" type="text" class="form-control" name="IdiomaMaterno"
                value="{{isset($estudioS->IdiomaMaterno)?$estudioS->IdiomaMaterno:'' }}"></td>
            <td><input id="SugundoIdioma" type="text" class="form-control" name="SugundoIdioma" 
                value="{{isset($estudioS->SugundoIdioma)?$estudioS->SugundoIdioma:'' }}"></td>
            <td><input id="NoTelefono" type="text" class="form-control" name="NoTelefono" 
                value="{{isset($estudioS->NoTelefono)?$estudioS->NoTelefono:'' }}"></td>
        </tr>
        </tr>
        <tr class="bg-secondary text-white">
            <td>{{ __('Profesión u oficio ') }}</td>
            <td>{{ __('Tipo de empleo ') }}</td>
            <td>{{ __('Ingresos mensuales ') }}</td>
            <td>{{ __('Egresos mensuales') }}</td>
        </tr>
        <tr>
            <td><input id="Proficion" type="text" class="form-control" name="Proficion" 
                value="{{isset($estudioS->Proficion)?$estudioS->Proficion:'' }}"></td>
            <td><input id="Empleo" type="text" class="form-control" name="Empleo"
                value="{{isset($estudioS->Empleo)?$estudioS->Empleo:'' }}"></td>
            <td><input id="IngresoM" type="text" class="form-control" name="IngresoM" 
                value="{{isset($estudioS->IngresoM)?$estudioS->IngresoM:'' }}"></td>
            <td><input id="Egresos" type="text" class="form-control" name="Egresos" 
                value="{{isset($estudioS->Egresos)?$estudioS->Egresos:'' }}"></td>
        </tr>
        <tr class="bg-secondary text-white">
            <td colspan="4">{{ __('Dirección domiciliar  ') }}</td>
        </tr>
        <tr>
            <td colspan="4"> <input id="DireccionD" type="text" class="form-control" name="DireccionD" 
                value="{{isset($estudioS->DireccionD)?$estudioS->DireccionD:'' }}"></td>
        </tr>
    </tbody>
</table>






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