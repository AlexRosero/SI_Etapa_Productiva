<h1>{{$programa->Nombre}}</h1>
    <ul>
        <li>Nombre: {{$programa->Nombre}}</li>
        <li>Nivel: {{$programa->Nivel}}</li>
        <li>{{$programa->fichas()->select('NumeroFicha')->get()}}</li>
    </ul>
