<br>

<div class="table-responsive">
<table class="table table-bordered" width="100%" cellspacing="0">
<tbody>
    <tr class="bg-secondary text-white">
      <th colspan="6" >La Vivienda que ocupa actualmente es:</th>
    </tr>
    <tr>
      <td>Propia, totalmente pagada</td>
      <td colspan="2">
                <input id="PropiaSi" type="checkbox" class="form-control" name="PropiaSi"
                {{isset($estudioS->PropiaSi)?$estudioS->PropiaSi=='1'?'checked':'':'' }}
                        value="1">
      </td>
      <td>Cedida por alguna institución</td>
      <td colspan="2"> 
                <input id="CedidaSi" type="checkbox" class="form-control" name="CedidaSi"
                {{isset($estudioS->CedidaSi)?$estudioS->CedidaSi=='1'?'checked':'':'' }}
                        value="1">
      </td>
      </tr>
    <tr>
      <td>Prestada</td>
      <td colspan="2">
                  <input id="PrestadaSi" type="checkbox" class="form-control" name="PrestadaSi"
                  {{isset($estudioS->PrestadaSi)?$estudioS->PrestadaSi=='1'?'checked':'':'' }}
                        value="1">
                </td>

      <td>Propia, pagándola a plazos</td>
      <td colspan="2"><input id="PropiaS" type="checkbox" class="form-control" name="PropiaS"
                    {{isset($estudioS->PropiaS)?$estudioS->PropiaS=='1'?'checked':'':'' }}
                          value="1">
      </td>
      </tr>
    <tr>
      <td>Alquilada</td>
      <td colspan="2">
                  <input id="AlquiladaSi" type="checkbox" class="form-control" name="AlquiladaSi"
                  {{isset($estudioS->AlquiladaSi)?$estudioS->AlquiladaSi=='1'?'checked':'':'' }}
                        value="1">
                </td>
      <td>Invasión</td>
      
      <td colspan="2">
                    <input id="InvasionSi" type="checkbox" class="form-control" name="InvasionSi"
                    {{isset($estudioS->InvasionSi)?$estudioS->InvasionSi=='1'?'checked':'':'' }}
                          value="1">
                </td>
    </tr>
    <tr>
    <td colspan="6">Otros (Especificar)</td>
    </tr>
    <tr>
    <td colspan="6">
                        <input id="Otros04" type="text" class="form-control" name="Otros04" placeholder="Especifique"
                        value="{{isset($estudioS->Otros04)?$estudioS->Otros04:'' }}"> 
                    </td>
    </tr>

    <tr class="bg-secondary text-white">
      <th colspan="6" >¿Cuántos ambientes tiene el hogar?</th>
    </tr>
    <tr>
      <td>Habitaciones</td>
      <td  colspan="2">
                <input id="Habitaciones" type="text" class="form-control" name="Habitaciones"
                value="{{isset($estudioS->Habitaciones)?$estudioS->Habitaciones:'' }}"> 
              </td>
      <td>Comedor</td>
      <td  colspan="2">
                <input id="Comedor" type="text" class="form-control" name="Comedor"
                        value="{{isset($estudioS->Comedor)?$estudioS->Comedor:'' }}"> 
              </td>
    </tr>
    <tr>
    <td>Cocina</td>
    <td  colspan="2">
                    <input id="Cocina" type="text" class="form-control" name="Cocina"
                        value="{{isset($estudioS->Cocina)?$estudioS->Cocina:'' }}"> 
                </td>
    <td>Lavandería</td>
    <td  colspan="2">
                    <input id="Lavanderia" type="text" class="form-control" name="Lavanderia"
                    value="{{isset($estudioS->Lavanderia)?$estudioS->Lavanderia:'' }}"> 
                </td>
    </tr>
    <tr class="bg-secondary text-white">
      <th colspan="6" >El hogar cuenta con un solo ambiente</th>
    </tr>
    <tr>
      <td>Patio</td>
      <td  colspan="2">
                <input id="PatioSi" type="checkbox" class="form-control" name="PatioSi"
                {{isset($estudioS->PatioSi)?$estudioS->PatioSi=='1'?'checked':'':'' }}
                        value="1">
              </td>
      <td>Sala</td>
        
        <td  colspan="2">
        <input id="SalaSi" type="checkbox" class="form-control" name="SalaSi"
                {{isset($estudioS->SalaSi)?$estudioS->SalaSi=='1'?'checked':'':'' }}
                        value="1">
          </td>
    </tr>
    <tr>
      <td>Baño</td>
      <td  colspan="2">
                  <input id="BanoSi" type="checkbox" class="form-control" name="BanoSi"
                  {{isset($estudioS->BanoSi)?$estudioS->BanoSi=='1'?'checked':'':'' }}
                        value="1">
                </td> 
      <td>Garaje</td>
      <td  colspan="2">
                    <input id="GarajeSi" type="checkbox" class="form-control" name="GarajeSi"
                    {{isset($estudioS->GarajeSi)?$estudioS->GarajeSi=='1'?'checked':'':'' }}
                          value="1">
                </td> 
    </tr>

        <tr class="bg-secondary text-white">
            <td colspan="6" >{{ __('cuál¿ es el material predomínate en la construcción de la vivienda?') }}</td>
        </tr>
        <tr>
            <td>Block</td>
            <td colspan="2"><input id="Block" type="checkbox" class="form-control" name="Block"
            {{isset($estudioS->Block)?$estudioS->Block=='1'?'checked':'':'' }}
            value="1"></td>
            <td>Adobe</td>
            <td colspan="2"><input id="Adobe" type="checkbox" class="form-control" name="Adobe"
            {{isset($estudioS->Adobe)?$estudioS->Adobe=='1'?'checked':'':'' }}
            value="1"></td>
        </tr>
        <tr>
            <td>Madera</td>
            <td colspan="2"><input id="Madera" type="checkbox" class="form-control" name="Madera"
            {{isset($estudioS->Madera)?$estudioS->Madera=='1'?'checked':'':'' }}
            value="1"></td>
            <td>Vivienda tipo champa</td>
            <td colspan="2"><input id="ViviendaT" type="checkbox" class="form-control" name="ViviendaT"
            {{isset($estudioS->ViviendaT)?$estudioS->ViviendaT=='1'?'checked':'':'' }}
            value="1"></td>
        </tr>

    </tbody>
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