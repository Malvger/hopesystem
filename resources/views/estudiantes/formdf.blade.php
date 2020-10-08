
<form action="{{ url('/estudiantes') }}" method="post">

    {{csrf_field()}} <!--Token de Seguridad-->



<div class="table-responsive">
<table class="table table-bordered" width="100%" cellspacing="0">
    <thead>
      <tr class="bg-secondary text-white"> <!--Filas-->
        <th scope="col">¿Presenta algún problema familiar que desee poner en conocimiento de las autoridades del Centro Educativo?</th> <!--Encabezados-->

        <th scope="col">Si la respuesta es si explique</th>
        
      </>
      <tr>
          <td>
            <input id="ProblemaFamiliarSi" type="checkbox" class="form-control" name="ProblemaFamiliarSi">
          </td>

          <td>
            <input id="Explique" type="text" class="form-control" name="Explique"> 
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
              <input id="PadreSeparadosSi" type="checkbox" class="form-control" name="PadresSeparadosSi">
            </td>
  
            <td>
              <input id="Razones" type="text" class="form-control" name="Razones"> 
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
                        <input id="Razones" type="text" class="form-control" name="Razones"> 
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
            <input id="ProblemaFamiliarSi" type="checkbox" class="form-control" name="ProblemaFamiliarSi">
          </td>

          <td>
            <input id="ProblemaFamiliarSi" type="checkbox" class="form-control" name="ProblemaFamiliarSi">
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
              <input id="PadreSeparadosSi" type="checkbox" class="form-control" name="PadresSeparadosSi">
            </td>
  
            <td>
                <input id="PadreSeparadosSi" type="checkbox" class="form-control" name="PadresSeparadosSi">
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
                <input id="PadreSeparadosSi" type="checkbox" class="form-control" name="PadresSeparadosSi">
            </td>
            <td>
                <input id="PadreSeparadosSi" type="checkbox" class="form-control" name="PadresSeparadosSi"> 
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
                <input id="PadreSeparadosSi" type="checkbox" class="form-control" name="PadresSeparadosSi">
            </td>
            <td>
                <input id="PadreSeparadosSi" type="checkbox" class="form-control" name="PadresSeparadosSi"> 
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
                        <input id="PadreSeparadosSi" type="checkbox" class="form-control" name="PadresSeparadosSi">
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