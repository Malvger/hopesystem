{{-- {{$Modo =='crear' ? 'Agregar':'modificar'}} --}}
<br>
<table class="table table-bordered" width="100%" cellspacing="0">
    <tbody>
    <tr class="bg-secondary text-white">
            <td >{{ __('Nivel - Grado ') }}
            


            </td>
        </tr>
        <tr>
            <td >  
                <select id="curso" class="form-control" name="curso">  
                    @foreach ($grado as $grados)           
                         <option value="{{$grados->id}}" {{isset($grados->Area)?$grados->id==$curso->curso?'selected':'':'' }} >
                         {{$grados->grado}}  -
                         {{$grados->Area=='0'?'Preprimaria y Primero':'Medio, Ciclo Diversificado'}}    
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