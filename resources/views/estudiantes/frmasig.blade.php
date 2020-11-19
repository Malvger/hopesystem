
<br>
<table class="table table-bordered" cellspacing="0">
    <tbody>
                <tr class="bg-secondary text-white">
                    <td>Grado</td>
                    <td>Año</td>
                </tr>
        @foreach ($aogrado as $est)            
                <tr>
                    <td>{{$est->grado}}</td>
                    <td>{{$est->Ano}}</td>
                </tr>
        @endforeach
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