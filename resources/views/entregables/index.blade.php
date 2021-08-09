<h1>Lista Entregables</h1>

<a href="{{url('entregables/create')}}">+</a>
<table>
    <thead>
        <th>Titulo</th>
        <th>Descripción</th>
        <th>Fecha Inicial</th>
        <th>Fecha Final</th>
        <th>Instructor</th>
    </thead>
    <tbody>
        @foreach ($entregables as $entregable)
            <tr>
                <td style="padding-right:20px;">
                    {{$entregable->Titulo}}
                </td>
                <td>
                    {{$entregable->Descripcion}}
                </td>
                <td>
                    {{$entregable->FechaHoraInicial}}
                </td>
                <td>
                    {{$entregable->FechaHoraFinal}}
                </td>
                <td>
                    {{$entregable->IdInstructor}}
                </td>
                <td>
                    <a href="{{url('entregables/'.$entregable->IdEntregables)}}" >Show</a>
                </td>
                <td>
                    <a href="{{url('entregables/'.$entregable->IdEntregables.'/edit')}}" >Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$entregables->links()}}
