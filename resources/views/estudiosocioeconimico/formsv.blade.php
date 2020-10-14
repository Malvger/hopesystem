<br>
<h5>La Vivienda que ocupa actualmente es:</h5>
<br>

<div class="table-responsive">
    <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr class="bg-secondary text-white">
            <th scope="col">Propia, totalmente pagada</th>
            <th scope="col">Cedida por alguna institución</th>
          <tr>
              <td>
                <input id="PropiaSi" type="checkbox" class="form-control" name="PropiaSi"
                {{isset($estudioS->PropiaSi)?$estudioS->PropiaSi=='1'?'checked':'':'' }}
                        value="1">
              </td>
    
              <td>
                <input id="CedidaSi" type="checkbox" class="form-control" name="CedidaSi"
                {{isset($estudioS->CedidaSi)?$estudioS->CedidaSi=='1'?'checked':'':'' }}
                        value="1">
              </td>
          </tr>
        </thead>
    
        <thead>
            <tr class="bg-secondary text-white"> 
              <th scope="col">Prestada</th>
              <th scope="col">Propia, pagándola a plazos</th>
            </tr>

            <tr>
                <td>
                  <input id="PrestadaSi" type="checkbox" class="form-control" name="PrestadaSi"
                  {{isset($estudioS->PrestadaSi)?$estudioS->PrestadaSi=='1'?'checked':'':'' }}
                        value="1">
                </td>
      
                <td>
                    <input id="PropiaSi" type="checkbox" class="form-control" name="PropiaSi"
                    {{isset($estudioS->PropiaSi)?$estudioS->PropiaSi=='1'?'checked':'':'' }}
                          value="1">
                </td>
            </tr>
          </thead>

          <thead>
            <tr class="bg-secondary text-white">
              <th scope="col">Alquilada</th>            
              <th scope="col">Invasión</th>
              
            </tr>

            <tr>
                <td>
                  <input id="AlquiladaSi" type="checkbox" class="form-control" name="AlquiladaSi"
                  {{isset($estudioS->AlquiladaSi)?$estudioS->AlquiladaSi=='1'?'checked':'':'' }}
                        value="1">
                </td>
      
                <td>
                    <input id="InvasionSi" type="checkbox" class="form-control" name="InvasionSi"
                    {{isset($estudioS->InvasionSi)?$estudioS->InvasionSi=='1'?'checked':'':'' }}
                          value="1">
                </td>
            </tr>
          </thead>
      </table>
    </div>
<br>

<div class="table-responsive">
    <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
            <thead>
                <tr class="bg-secondary text-white"> 
                  <th scope="col">Otros (Especificar)</th> 
                </tr>

                <tr>
                    <td>
                        <input id="Otros" type="text" class="form-control" name="Otros"
                        value="{{isset($estudioS->Otros)?$estudioS->Otros:'' }}"> 
                    </td>
                </tr>
        </thead>
    </table>
</div>

<br>
<h5>¿Cuántos ambientes tiene el hogar?</h5>
<br>

<div class="table-responsive">
    <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr class="bg-secondary text-white"> <!--Filas-->
            <th scope="col">Habitaciones</th> <!--Encabezados-->
            <th scope="col">Comedor</th>
          <tr>
              <td>
                <input id="Habitaciones" type="text" class="form-control" name="Habitaciones"
                value="{{isset($estudioS->Habitaciones)?$estudioS->Habitaciones:'' }}"> 
              </td>
    
              <td>
                <input id="Comedor" type="text" class="form-control" name="Comedor"
                        value="{{isset($estudioS->Comedor)?$estudioS->Comedor:'' }}"> 
              </td>
          </tr>
        </thead>
    
        <thead>
            <tr class="bg-secondary text-white">
              <th scope="col">Cocina</th>  
              <th scope="col">Lavandería</th> 
            </tr>

            <tr>
                <td>
                    <input id="Cocina" type="text" class="form-control" name="Cocina"
                        value="{{isset($estudioS->Cocina)?$estudioS->Cocina:'' }}"> 
                </td>
      
                <td>
                    <input id="Lavanderia" type="text" class="form-control" name="Lavanderia"
                    value="{{isset($estudioS->Lavanderia)?$estudioS->Lavanderia:'' }}"> 
                </td>
            </tr>
          </thead>
        </table>
</div>


<br>
<h5>El hogar cuenta con un solo ambiente</h5>
<br>

<div class="table-responsive">
    <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr class="bg-secondary text-white"> 
            <th scope="col">Patio</th> 
            <th scope="col">Sala</th>
          <tr>
              <td>
                <input id="PatioSi" type="checkbox" class="form-control" name="PatioSi"
                {{isset($estudioS->PatioSi)?$estudioS->PatioSi=='1'?'checked':'':'' }}
                        value="1">
              </td>
    
              <td>
                <input id="SalaSi" type="checkbox" class="form-control" name="SalaSi"
                {{isset($estudioS->SalaSi)?$estudioS->SalaSi=='1'?'checked':'':'' }}
                        value="1">
              </td>
          </tr>
        </thead>
    
        <thead>
            <tr class="bg-secondary text-white"> 
              <th scope="col">Baño</th> 
              <th scope="col">Garaje</th>
            </tr>

            <tr>
                <td>
                  <input id="BanoSi" type="checkbox" class="form-control" name="BanoSi"
                  {{isset($estudioS->BanoSi)?$estudioS->BanoSi=='1'?'checked':'':'' }}
                        value="1">
                </td>
      
                <td>
                    <input id="GarajeSi" type="checkbox" class="form-control" name="GarajeSi"
                    {{isset($estudioS->GarajeSi)?$estudioS->GarajeSi=='1'?'checked':'':'' }}
                          value="1">
                </td>
            </tr>
          </thead>
        </table>
</div>


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