<h1>Administrador</h1>

@if (session('rol') == "Administrador")
{{session('rol')}}
@else
{{      url('login')    }}
@endif
