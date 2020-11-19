<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <!--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />-->
        <link href="{{ asset('css/gus.css') }}" rel="stylesheet"/>
    </head>
    <body>
        <div class="container">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <tbody>
                    <tr class="bg-secondary text-white">
                        <td colspan="2"> {{ __('Apellidos') }}</td>
                        <td colspan="2">{{ __('Nombres') }}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><input id="Apellidos" type="text" class="form-control" name="Apellidos" 
                            value="{{isset($estudioS->Apellidos)?$estudioS->Apellidos:'' }}"></td>
                        <td colspan="2"><input id="Nombres" type="text" class="form-control" name="Nombres" 
                            value="{{isset($estudioS->Nombres)?$estudioS->Nombres:'' }}"></td>
                    </tr>
                    <tr class="bg-secondary text-white">
                        <td>{{ __('Sexo') }}</td>
                        <td>{{ __('Edad') }}</td>
                        <td>{{ __('CUI') }}</td>
                        <td>{{ __('Comunidad Étnica') }}</td>
                    </tr>
                    <tr>
                        <td><input id="Sexo" type="text" class="form-control" name="Sexo" 
                            value="{{isset($estudioS->Sexo)?$estudioS->Sexo:'' }}"></td>
                        <td><input id="Edad" type="text" class="form-control" name="Edad" 
                            value="{{isset($estudioS->Edad)?$estudioS->Edad:'' }}"></td>
                        <td><input id="CUI" type="text" class="form-control" name="CUI" 
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

            
            <div style="page-break-before: always;"></div>

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
            
            <div style="page-break-before: always;"></div>

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

        </div>
    </body>
</html>