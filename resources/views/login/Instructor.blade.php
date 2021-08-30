<h1>Instructor</h1>


@if (session('rol') == "Instructor")
{{session('rol')}}
@else
{{  url('login')    }}
@endif
