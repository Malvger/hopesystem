
<br>
<table class="table table-bordered" width="100%" cellspacing="0">
    <tbody>
        <tr class="bg-secondary text-white">
            <td colspan="4">{{ __('Grado')}}</td>
        </tr>
        <tr>
            <td>
                <!-- <p>{{$grados}}</p> -->
                <select id="grado" class="form-control" name="grado">  
                    @foreach($grados as $grad)
                        <option value="{{$grad->id}}"
                        {{isset($estudiante->grado)?$estudiante->grado==$grad->id?'selected':'':'' }}
                        >{{$grad->ciclo}} - {{$grad->grado}}</option>
                    @endforeach
                </select>
            </td>
        </tr>
    </tbody>
</table>


<!--Gustavo's changing tabs code-->
<div class="row">
    <div class="col clearfix">
        <span class="float-left">
            <input type="button" class="btn btn-primary" value="<" onClick="selectTab('nav-observaciones');">
        </span>
    </div>
    <div class="col clearfix">
        <span class="float-right">
            <button type="submit" class="btn btn-primary" >{{ __('Guardar') }}</button>
        </span>
    </div>
</div>