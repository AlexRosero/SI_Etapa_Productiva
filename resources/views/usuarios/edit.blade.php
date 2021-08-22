<form method="POST" action="{{url('usuarios/'.$usuario->IdUsuario)}}" class="form-horizontal">
    @method('PUT')
    @csrf
    <fieldset>

    <!-- Form Name -->
    <legend>Actualizar Usuario</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="">Nombre</label>
      <div class="col-md-4">
      <input name="nombre" value="{{$usuario->Nombre}}" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="">Apellido</label>
      <div class="col-md-4">
      <input name="apellido" value="{{$usuario->Apellido}}" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="">Fecha Nacimiento</label>
      <div class="col-md-4">
      <input name="fechaNacimiento" value="{{$usuario->FechaNacimiento}}" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <!-- Text input-->
    <!--
    <div class="form-group">
      <label class="col-md-4 control-label" for="">Genero</label>
      <div class="col-md-4">
      <input name="genero" value="$usuario->Genero}}" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>
    -->

<!--////////////////////////////////////////////////////-->
    <!-- Select Basic -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="">Genero</label>
        <div class="col-md-4">
            <select id="" name="genero" class="form-control">
            <option value="">Seleccione genero...</option>
            <option {{$usuario->Genero=="F" ? 'selected' : ''}}>F</option>
            <option {{$usuario->Genero=="M" ? 'selected' : ''}}>M</option>
            </select>
        </div>
    </div>

<!--////////////////////////////////////////////////////-->

    <!-- Text input-->
    <!--
    <div class="form-group">
      <label class="col-md-4 control-label" for="">Tipo Documento</label>
      <div class="col-md-4">
      <input name="tipoD" type="text" value="$usuario->TipoDocumento}}" placeholder="" class="form-control input-md">

      </div>
    </div>
    -->
    <!--////////////////////////////////////////////////-->
    <!-- Select Basic -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="">Genero</label>
    <div class="col-md-4">
      <select id="" name="" class="form-control">
        <option value="">CC</option>
        <option value="">TI</option>
        <option value="">CE</option>
        <option value="">NIP</option>
        <option value="">NIT</option>
        <option value="">PAP</option>
      </select>
    </div>
  </div>
  <!--////////////////////////////////////////////////-->

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="">Número Documento</label>
      <div class="col-md-4">
      <input name="numeroD" value="{{$usuario->NumeroIdentificacion}}" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="">Email Personal</label>
      <div class="col-md-4">
      <input name="emailP" value="{{$usuario->EmailPersonal}}" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="">Email Sena</label>
      <div class="col-md-4">
      <input id="" name="emailS" value="{{$usuario->EmailSena}}" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="">Celular</label>
      <div class="col-md-4">
      <input id="" name="celular" value="{{$usuario->NumeroCelular}}" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="">Telefono</label>
      <div class="col-md-4">
      <input id="" name="telefono" value="{{$usuario->NumeroFijo}}" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="">Dirección</label>
      <div class="col-md-4">
      <input id="" name="direccion" value="{{$usuario->Direccion}}" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="">Estado</label>
      <div class="col-md-4">
      <input id="" name="estado" value="{{$usuario->Estado}}" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for=""></label>
      <div class="col-md-4">
        <button id="" name="" class="btn btn-primary">Update</button>
      </div>
    </div>

    </fieldset>
    </form>

