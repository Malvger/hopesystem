<br>
<table class="table table-bordered" width="100%" cellspacing="0">
    <tbody>
        <tr class="bg-secondary text-white">
            <td>{{ __('Observaciones') }}</td>
        </tr>
        <tr>
            <td>
                <textarea 
                    rows="8"
                    id="Observaciones"
                    type="text"
                    class="form-control"
                    name="Observaciones">{{isset($estudiante->Observaciones)?$estudiante->Observaciones:''}}</textarea>
            </td>
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