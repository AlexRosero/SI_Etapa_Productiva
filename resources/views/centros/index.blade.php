<h1>Lista Centros</h1>
<table>
    <thead>
        <th>Nombre</th>
        <th>Sede</th>
    </thead>
    <tbody>
        @foreach ($centros as $centro)
            <tr>
                <td style="padding-right:20px;">
                    {{$centro->Nombre}}
                </td>
                <td>
                    {{$centro->Sede}}
                </td>
                <td>
                    <a href="{{url('centros/'.$centro->IdCentro)}}">Show</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$centros->links()}}
