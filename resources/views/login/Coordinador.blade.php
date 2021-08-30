<h1>Coordinador</h1>

@if (session('rol') == "Coordinador")
{{session('rol')}}
@else
{{      url('login')     }}
@endif
