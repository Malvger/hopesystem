{{-- {{$Modo =='crear' ? 'Agregar':'modificar'}} --}}
<br>
<table class="table table-bordered" width="100%" cellspacing="0">
    <tbody>
    <tr class="bg-secondary text-white">
            <td >{{ __('Ciclo - Grado ') }}
            


            </td>
        </tr>
        <tr>
            <td >  
                <select id="grado" class="form-control" name="grado">  
                    @foreach ($grado as $grados)           
                         <option value="{{$grados->id}}" 
                                {{isset($grados->ciclo)?
                                    isset($curso->grado)?
                                        $grados->id==$curso->grado?'selected':''
                                            :''
                                        :'' }} >
                        
                            @foreach ($ciclo as $ci) 
                                {{$grados->ciclo==$ci->id?$ci->ciclo:''}}
                            @endforeach
                            - {{$grados->grado}}
                         </option>
                     @endforeach
                 </select>
            </td> 
        </tr>
        <tr class="bg-secondary text-white">
            <td >Nombre</td>
        </tr>
        <tr>
            <td > <input id="nombre" type="text" class="form-control" name="nombre"  required
                value="{{isset($curso->nombre)?$curso->nombre:'' }}"> </td>
        </tr>
        <tr class="bg-secondary text-white">
            <td >Descripción</td>
        </tr>
        <tr>
            <td >
            <input id="descrip" type="text" class="form-control" name="descrip" required
                value="{{isset($curso->descrip)?$curso->descrip:'' }}">
            </td>
        </tr>
    </tbody>
</table>

<div class="row">
    <div class="col clearfix">
        <span class="float-right">
            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        </span>
    </div>
</div>