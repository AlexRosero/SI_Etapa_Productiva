<h1>Lista Fichas</h1>

<a href="{{url('fichas\create')}}">Nueva Ficha</a>

<table>
    <thead>
        <th>Número</th>
        <th>Inicio Lectiva</th>
        <th>Fin Lectiva</th>
        <th>Inicio Productiva</th>
        <th>Fin Productiva</th>
        <th>Jornada</th>
        <th>Estado</th>
        <th>Programa</th>
    </thead>
    <tbody>
        @foreach ($fichas as $ficha)
            <tr>
                <td style="padding-right:20px;">
                    {{$ficha->NumeroFicha}}
                </td>
                <td>
                    {{$ficha->InicioLectiva}}
                </td>
                <td>
                    {{$ficha->FinLectiva}}
                </td>
                <td>
                    {{$ficha->InicioProductiva}}
                </td>
                <td>
                    {{$ficha->FinProductiva}}
                </td>
                <td>
                    {{$ficha->Jornada}}
                </td>
                <td>
                    {{$ficha->Estado}}
                </td>
                <td>
                    {{$ficha->programa()->select('Nivel')->get()}}
                </td>
                <td>
                    <a href="{{url('fichas/'.$ficha->IdFicha)}}">Show</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$fichas->links()}}
