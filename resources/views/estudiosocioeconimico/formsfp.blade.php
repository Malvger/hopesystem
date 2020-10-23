<br>
<table class="table table-bordered" width="100%" cellspacing="0">
    <tbody>
        <tr class="bg-secondary text-white">
            <td >{{ __('¿Algún miembro que conforma su hogar presenta problema de salud? ') }}</td>
            <td>
                    <input id="problemasSalud" type="checkbox" class="form-control" name="problemasSalud"
                    {{isset($estudioS->problemasSalud)?$estudioS->problemasSalud=='1'?      'checked':'':'' }}
                    value="1">
              </td>
        </tr>
        <tr>
          <td colspan="2">
            <input id="Especifique" type="text" class="form-control" name="Especifique" placeholder="Especifique"
            value="{{isset($estudioS->Especifique)?$estudioS->Especifique:'' }}"> 
          </td>
        </tr>
        <tr>
          <td colspan="2">
              <input id="NombreApellido" type="text" class="form-control" name="NombreApellido" placeholder="Si la respuesta fue si ¿Quién? (Nombre y Apellido)"
                value="{{isset($estudioS->NombreApellido)?$estudioS->NombreApellido:'' }}"> 
                </td>
        </tr>

        <tr class="bg-secondary text-white">
            <td >{{ __('¿Existe en la familia algún miembro con discapacidad?') }}</td>
            <td>
                    <input id="DiscapacidadSi" type="checkbox" class="form-control" name="DiscapacidadSi"
                    {{isset($estudioS->DiscapacidadSi)?$estudioS->DiscapacidadSi=='1'?      'checked':'':'' }}
                    value="1">
              </td>
        </tr>
        <tr>
          <td colspan="2">
            <input id="Especifice01" type="text" class="form-control" name="Especifice01" placeholder="Especifique"
            value="{{isset($estudioS->Especifice01)?$estudioS->Especifice01:'' }}"> 
          </td>
        </tr>
        <tr>
          <td colspan="2">
              <input id="NombreApellido02" type="text" class="form-control" name="NombreApellido02" placeholder="Si la respuesta fue si ¿Quién? (Nombre y Apellido)"
                value="{{isset($estudioS->NombreApellido02)?$estudioS->NombreApellido02:'' }}"> 
                </td>
        </tr>

        <tr class="bg-secondary text-white">
            <td >{{ __('¿Hay en el hogar personas mayores de edad?') }}</td>
            <td>
                    <input id="Mayor" type="checkbox" class="form-control" name="Mayor"
                    {{isset($estudioS->Mayor)?$estudioS->Mayor=='1'?      'checked':'':'' }}
                    value="1">
              </td>
        </tr>
        <tr>
          <td colspan="2">
            <input id="Espesifique02" type="text" class="form-control" name="Espesifique02" placeholder="Especifique"
            value="{{isset($estudioS->Espesifique02)?$estudioS->Espesifique02:'' }}"> 
          </td>
        </tr>


    </tbody>
</table>
    

<br>

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