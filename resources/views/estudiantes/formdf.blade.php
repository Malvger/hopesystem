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


<!--Gustavo's changing tabs code-->

<div class="row">
    <div class="col clearfix">
        <span class="float-left">
            <input type="button" class="btn btn-primary" value="<" onClick="selectTab('nav-sFisica');">
        </span>
    </div>
    <div class="col clearfix">
        <span class="float-right">
            <input type="button" class="btn btn-primary" value=">" onClick="selectTab('nav-observaciones');">
        </span>
    </div>
</div>