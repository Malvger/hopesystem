{{-- {{$Modo =='crear' ? 'Agregar':'modificar'}} --}}
<br>
<table class="table table-bordered" width="100%" cellspacing="0">
    <tbody>
        <tr class="bg-secondary text-white">
            <td >Ciclo/Grado/Curso

            </td>
        </tr>
        <tr>
            <td >
            {{isset($cgc)?$cgc:'' }}
              </td>
        </tr>
        <tr class="bg-secondary text-white">
            <td >Estudiante</td>
        </tr>
        <tr>
            <td >
            {{isset($nombre)?$nombre:'' }}
            <input name="id" type="hidden" value="{{isset($id)?$id:'' }}">
            <input name="estudiante" type="hidden" value="{{isset($estudiante)?$estudiante:'' }}">
            <input name="curso" type="hidden" value="{{isset($curso)?$curso:'' }}">

            </td>
        </tr>
        <tr class="bg-secondary text-white">
            <td >Unidad 1</td>
        </tr>
        <tr>
            <td >
            <input type="text" class="form-control" name="unidad1" type="number" min="0" max="100"
                value="{{isset($unidad1)?$unidad1:'' }}">
            </td>
        </tr>
        <tr class="bg-secondary text-white">
            <td >Unidad 2</td>
        </tr>
        <tr>
            <td >
            <input  type="text" class="form-control" name="unidad2" type="number" min="0" max="100"
                value="{{isset($unidad2)?$unidad2:'' }}">
            </td>
        </tr>
        <tr class="bg-secondary text-white">
            <td >Unidad 3</td>
        </tr>
        <tr>
            <td >
            <input  type="text" class="form-control" name="unidad3" type="number" min="0" max="100"
                value="{{isset($unidad3)?$unidad3:'' }}">
            </td>
        </tr>
        <tr class="bg-secondary text-white">
            <td >Unidad 4</td>
        </tr>
        <tr>
            <td >
            <input  type="text" class="form-control" name="unidad4" type="number" min="0" max="100"
                value="{{isset($unidad3)?$unidad3:'' }}">
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