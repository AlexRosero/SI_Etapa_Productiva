<h1>Lista Programa</h1>


<a style="padding:10px; border:1px solid grey; text-decoration:none;" href="{{url('programas/create')}}">+</a>



<table>
    <thead>
        <th>Nombres</th>
        <th>Nivel</th>
    </thead>
    <tbody>
        @foreach ($programas as $programa)
            <tr>
                <td style="padding-right:20px;">
                   {{$programa->Nombre}}
                </td>
                <td>
                    {{$programa->Nivel}}
                </td>
                <td>
                    <a href="{{url('programas/'.$programa->IdPrograma)}}">Show</a>
                </td>
                <td>
                    <a href="{{url('programas/'.$programa->IdPrograma."/edit")}}">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<!--{{$programas->links()}}-->


