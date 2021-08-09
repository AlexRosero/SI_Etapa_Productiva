<h1>Lista Aprendices</h1>
<table>
    <thead>
        <th>id</th>
        <th>id</th>
    </thead>
    <tbody>
        @foreach ($aprendices as $aprendiz)
            <tr>
                <td style="padding-right:20px;">
                    {{$aprendiz->id_empresa}}
                </td>
                <td>
                    {{$aprendiz->id_usuario}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$aprendices->links()}}
