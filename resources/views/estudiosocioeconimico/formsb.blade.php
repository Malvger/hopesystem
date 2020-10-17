<br>

<table class="table table-bordered" width="100%" cellspacing="0">
    <tbody>
        <tr class="bg-secondary text-white">
            <td colspan="8" >{{ __('El abastecimiento de aguas procede de:') }}</td>
        </tr>
        <tr>
            <td>Agua potable </td>
            <td><input id="AguaP" type="checkbox" class="form-control" name="AguaP"
            {{isset($estudioS->AguaP)?$estudioS->AguaP=='1'?'checked':'':'' }}
            value="1"></td>
            <td>Rio</td>
            <td><input id="Rio" type="checkbox" class="form-control" name="Rio"
            {{isset($estudioS->Rio)?$estudioS->Rio=='1'?'checked':'':'' }}
            value="1"></td>
            <td>Pozo</td>
            <td><input id="Pozo" type="checkbox" class="form-control" name="Pozo"
            {{isset($estudioS->Pozo)?$estudioS->Pozo=='1'?'checked':'':'' }}
            value="1"></td>
            <td>Otro </td>
            <td><input id="Otro" type="checkbox" class="form-control" name="Otro"
            {{isset($estudioS->Otro)?$estudioS->Otro=='1'?'checked':'':'' }}
            value="1"></td>
        </tr>
        <tr class="bg-secondary text-white">
            <td colspan="8" >{{ __('¿Cuál es el tipo de alumbrado que tiene la vivienda?') }}</td>
        </tr>
        <tr>
            <td>Electricidad </td>
            <td><input id="Electricidad" type="checkbox" class="form-control" name="Electricidad"
            {{isset($estudioS->Electricidad)?$estudioS->Electricidad=='1'?'checked':'':'' }}
            value="1"></td>
            <td>Velas </td>
            <td><input id="Velas" type="checkbox" class="form-control" name="Velas"
            {{isset($estudioS->Velas)?$estudioS->Velas=='1'?'checked':'':'' }}
            value="1"></td>
            <td>Otros</td>
            <td><input id="Otros03" type="checkbox" class="form-control" name="Otros03"
            {{isset($estudioS->Otros03)?$estudioS->Otros03=='1'?'checked':'':'' }}
            value="1"></td>
            <td>No tiene  </td>
            <td><input id="NoT" type="checkbox" class="form-control" name="NoT"
            {{isset($estudioS->NoT)?$estudioS->NoT=='1'?'checked':'':'' }}
            value="1"></td>
        </tr>

        <tr class="bg-secondary text-white">
            <td colspan="8" >{{ __('El servicio sanitario que tiene la vivienda está conectado a:') }}</td>
        </tr>
        <tr>
            <td>Drenaje  </td>
            <td><input id="Drenaje" type="checkbox" class="form-control" name="Drenaje"
            {{isset($estudioS->Drenaje)?$estudioS->Drenaje=='1'?'checked':'':'' }}
            value="1"></td>
            <td>Pozo séptico </td>
            <td><input id="PozoS" type="checkbox" class="form-control" name="PozoS"
            {{isset($estudioS->PozoS)?$estudioS->PozoS=='1'?'checked':'':'' }}
            value="1"></td>
            <td>Rio </td>
            <td><input id="Rio02" type="checkbox" class="form-control" name="Rio02"
            {{isset($estudioS->Rio02)?$estudioS->Rio02=='1'?'checked':'':'' }}
            value="1" ></td>
            <td>Otro  </td>
            <td><input id="Otro02" type="checkbox" class="form-control" name="Otro02"
            {{isset($estudioS->Otro02)?$estudioS->Otro02=='1'?'checked':'':'' }}
            value="1"></td>
        </tr>
        <tr class="bg-secondary text-white">
            <td colspan="8" >{{ __('Combustible mas utilizado para cocinar ') }}</td>
        </tr>
        <tr>
            <td>Electricista   </td>
            <td><input id="Electricista02" type="checkbox" class="form-control" name="Electricista02"
            {{isset($estudioS->Electricista02)?$estudioS->Electricista02=='1'?'checked':'':'' }}
            value="1"></td>
            <td>Leña  </td>
            <td><input id="Lena" type="checkbox" class="form-control" name="Lena"
            {{isset($estudioS->Lena)?$estudioS->Lena=='1'?'checked':'':'' }}
            value="1"></td>
            <td>Gas </td>
            <td><input id="Gas" type="checkbox" class="form-control" name="Gas"
            {{isset($estudioS->Gas)?$estudioS->Gas=='1'?'checked':'':'' }}
            value="1"></td>
            <td>Otro  </td>
            <td><input id="Otro03" type="checkbox" class="form-control" name="Otro03"
            {{isset($estudioS->Otro03)?$estudioS->Otro03=='1'?'checked':'':'' }}
            value="1"></td>
        </tr>
        <tr class="bg-secondary text-white">
            <td colspan="8" >{{ __('¿Con que otro servicio cuenta?') }}</td>
        </tr>
        <tr>
            <td>Teléfono fijo    </td>
            <td><input id="Telefono02" type="checkbox" class="form-control" name="Telefono02"
            {{isset($estudioS->Telefono02)?$estudioS->Telefono02=='1'?'checked':'':'' }}
            value="1"></td>
            <td>Cable   </td>
            <td><input id="Cable" type="checkbox" class="form-control" name="Cable"
            {{isset($estudioS->Cable)?$estudioS->Cable=='1'?'checked':'':'' }}
            value="1"></td>
            <td>Internet  </td>
            <td><input id="Internet" type="checkbox" class="form-control" name="Internet"
            {{isset($estudioS->Internet)?$estudioS->Internet=='1'?'checked':'':'' }}
            value="1"></td>
            <td>Celular   </td>
            <td><input id="Celular" type="checkbox" class="form-control" name="Celular"
            {{isset($estudioS->Celular)?$estudioS->Celular=='1'?'checked':'':'' }}
            value="1"></td>
        </tr>

    </tbody>
</table>

<!--Gustavo's changing tabs code-->

<div class="row">
    <div class="col clearfix">
        <span class="float-left">
            <input type="button" class="btn btn-primary" value="<" onClick="selectTab('nav-dFamiliar');">
        </span>
    </div>
    <div class="col clearfix">
        <span class="float-right">
            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        </span>
    </div>
</div>