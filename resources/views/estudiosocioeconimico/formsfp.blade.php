<br>
<h5>Salud Física</h5>
<br>

<div class="table-responsive">
    <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr class="bg-secondary text-white">
                <th scope="col">¿El estudiante sufre algún problema de salud?</th>
        
                <th scope="col">Especifique:</th>
          </tr>

          <tr>
              <td>
                    <input id="problemasSalud" type="checkbox" class="form-control" name="problemasSalud"
                    {{isset($estudioS->problemasSalud)?$estudioS->problemasSalud=='1'?      'checked':'':'' }}
                    value="1">
              </td>
    
              <td>
                    <input id="Especifique" type="text" class="form-control" name="Especifique"
                    value="{{isset($estudioS->Especifique)?$estudioS->Especifique:'' }}"> 
              </td>
          </tr>
        </thead>
    
        <thead>
            <tr class="bg-secondary text-white">
              <th scope="col">¿Algún miembro que conforma su hogar presenta un problema de salud?</th>
              
              <th scope="col">Especifique:</th>
            </tr>

            <tr>
                <td>
                  <input id="ProblemaSaludSi" type="checkbox" class="form-control" name="ProblemaSaludSi"
                  {{isset($estudioS->ProblemaSaludSi)?$estudioS->ProblemaSaludSi=='1'?'checked':'':'' }}
                    value="1">
                </td>
      
                <td>
                  <input id="Especifice01" type="text" class="form-control" name="Especifice01"
                  value="{{isset($estudioS->Especifice01)?$estudioS->Especifice01:'' }}"> 
                </td>
            </tr>
        </thead>
    </table>
</div>

<br>
<h5>Si la respuesta es sí, ¿a qué miembro que conforma su hogar afecta la enfermedad?</h5>
<br>

<div class="table-responsive">
    <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
                <tr class="bg-secondary text-white">
                  <th scope="col">Nombres y Apellidos:</th>
                </tr>

                <tr>
                    <td>
                        <input id="NombreApellido" type="text" class="form-control" name="NombreApellido"
                        value="{{isset($estudioS->NombreApellido)?$estudioS->NombreApellido:'' }}"> 
                    </td>
                </tr>        
        </thead>
    </table>
</div>
    

<br>
<h5>Salud Psicológica</h5>
<br>

<div class="table-responsive">
    <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr class="bg-secondary text-white"> <!--Filas-->
            <th scope="col">¿El estudiante presenta algún tipo de discapacidad?</th> <!--Encabezados-->
            <th scope="col">Especifique:</th>
          <tr>
              <td>
                <input id="DiscapacidadSi" type="checkbox" class="form-control" name="DiscapacidadSi"
                {{isset($estudioS->DiscapacidadSi)?$estudioS->DiscapacidadSi=='1'?'checked':'':'' }}
                        value="1">
              </td>
    
              <td>
                <input id="Espesifique02" type="text" class="form-control" name="Espesifique02"
                value="{{isset($estudioS->Espesifique02)?$estudioS->Espesifique02:'' }}"> 
              </td>
          </tr>
        </thead>
    
        <thead>
            <tr class="bg-secondary text-white">
              <th scope="col">En caso de existir discapacidad, ¿Cuentan con algún certificado u otro documento que acredite la disccapacidad?</th>
              
              <th scope="col">De no contar con el certificado de discapacidad, señale el motivo</th>
              
            </tr>
            <tr>
                <td>
                  <input id="CertificadoSi" type="checkbox" class="form-control" name="CertificadoSi"
                  {{isset($estudioS->CertificadoSi)?$estudioS->CertificadoSi=='1'?'checked':'':'' }}
                        value="1">
                </td>
      
                <td>
                  <input id="Motivo" type="text" class="form-control" name="Motivo"
                  value="{{isset($estudioS->Motivo)?$estudioS->Motivo:'' }}"> 
                </td>
            </tr>
          </thead>
    </table>
</div>


<div class="table-responsive">
    <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
            <thead>
                <tr class="bg-secondary text-white"> 
                  <th scope="col">Además del estudiante, ¿otro miembro de la familia presenta discapacidad?</th>
                  
                </tr>
                <tr>
                    <td>
                        <input id="OtroDiscapacidadSi" type="checkbox" class="form-control" name="OtroDiscapacidadSi"
                  {{isset($estudioS->OtroDiscapacidadSi)?$estudioS->OtroDiscapacidadSi=='1'?'checked':'':'' }}
                        value="1">
                    </td>
        
        </thead>
    </table>
</div>

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