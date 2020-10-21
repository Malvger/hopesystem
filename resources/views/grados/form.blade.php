{{-- {{$Modo =='crear' ? 'Agregar':'modificar'}} --}}
<br>
<table class="table table-bordered" width="100%" cellspacing="0">
    <tbody>
    <tr class="bg-secondary text-white">
            <td >{{ __('Ciclo ') }}</td>
        </tr>
        <tr>
            <td >
            
            <select id="ciclo" class="form-control" name="ciclo">  

            @foreach ($ciclo as $ciclos)           
                         <option value="{{$ciclos->id}}" {{isset($grado->ciclo)?$grado->ciclo==$ciclos->id?'selected':'':'' }} >
                         {{$ciclos->ciclo}}   
                         </option>
                     @endforeach
                
                </select>
            
            </td>  
        </tr>
        <tr class="bg-secondary text-white">
            <td >Nombre </td>
        </tr>
        <tr>
            <td > <input id="grado" type="text" class="form-control" name="grado"  required
                value="{{isset($grado->grado)?$grado->grado:'' }}"> </td>
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