<br>
<table class="table table-bordered" width="100%" cellspacing="0">
    <tbody>
        <tr class="bg-secondary text-white">
            <td>{{ __('Observaciones') }}</td>
        </tr>
    </tbody>
</table>
    <textarea rows="8" id="Observaciones" type="text" class="form-control"
    name="Observaciones">{{isset($estudiante->Observaciones)?$estudiante->Observaciones:'' }}</textarea>