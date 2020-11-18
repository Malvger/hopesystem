



<table>
    <tbody>

@foreach ($aogrado as $est)            
        <tr>
            <td>
            {{$est->grado}} - {{$est->Ano}}
            </td>
        </tr>
@endforeach
    </tbody>
</table>