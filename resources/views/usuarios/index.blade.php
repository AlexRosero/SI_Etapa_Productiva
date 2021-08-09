<h1>Lista Usuarios</h1>

<a href="{{url('usuarios/create')}}">+</a></button>

<table>
    <thead>
        <th>Nombres</th>
        <th>Apellido</th>
        <th>Fecha Nacimiento</th>
        <th>Genero</th>
        <th>Tipo D.</th>
        <th>Número D.</th>
        <th>Celular</th>
        <th>Telefono</th>
        <th>Email Personal</th>
        <th>Email Sena</th>
        <th>Dirección</th>
        <th>Estado</th>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
                <td style="padding-right:20px;">
                   {{$usuario->Nombre}}
                </td>
                <td>
                    {{$usuario->Apellido}}
                </td>
                <td>
                    {{$usuario->FechaNacimiento}}
                </td>
                <td>
                    {{$usuario->Genero}}
                </td>
                <td>
                    {{$usuario->TipoDocumento}}
                </td>
                <td>
                    {{$usuario->NumeroIdentificación}}
                </td>
                <td>
                    {{$usuario->NumeroCelular}}
                </td>
                <td>
                    {{$usuario->NumeroFijo}}
                </td>
                <td>
                    {{$usuario->EmailPersonal}}
                </td>
                <td>
                    {{$usuario->EmailSena}}
                </td>
                <td>
                    {{$usuario->Dirección}}
                </td>
                <td>
                    {{$usuario->Estado}}
                </td>
                <td>
                    {{$usuario->rol()->select('tipoRol')->get()}}
                </td>

                <td>
                    <a href="{{url('usuarios/'.$usuario->IdUsuario)}}">Show</a>
                </td>
                <td>
                    <a href="{{url('usuarios/'.$usuario->IdUsuario."/edit")}}">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{$usuarios->links()}}


