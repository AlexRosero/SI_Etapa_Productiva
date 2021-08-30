<h1>Aprendiz</h1>

@if (session('rol') == "Aprendiz")
{{  session('rol')  }}
@else
{{  url('login') }}
@endif
