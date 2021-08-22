<form method="POST" action="{{url('usuarios')}}" class="form-horizontal">
    @csrf
    <fieldset>

    <!-- Form Name -->
    <legend>Crear Usuario</legend>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="">Nombre</label>
        <div class="col-md-4">
        <input name="nombre" value="{{old('nombre')}}" type="text" placeholder="" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="">Apellido</label>
        <div class="col-md-4">
        <input name="apellido" value="{{old('apellido')}}" type="text" placeholder="" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="">Fecha Nacimiento</label>
        <div class="col-md-4">
        <input name="fechaNacimiento" value="{{old('fechaNacimiento')}}" type="text" placeholder="" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <!--
      <div class="form-group">
        <label class="col-md-4 control-label" for="">Genero</label>
        <div class="col-md-4">
        <input name="genero" value="old('genero')}}" type="text" placeholder="" class="form-control input-md">

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
                <option {{old('genero') == "F" ? 'selected' : ''}}>F</option>
                <option {{old('genero') =="M" ? 'selected' : ''}}>M</option>
                </select>
            </div>
        </div>

    <!--////////////////////////////////////////////////////-->

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="">Tipo Documento</label>
        <div class="col-md-4">
        <input name="tipoD" type="text" value="{{old('tipoD')}}" placeholder="" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="">Número Documento</label>
        <div class="col-md-4">
        <input name="numeroD" value="{{old('numeroD')}}" type="text" placeholder="" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="">Email Personal</label>
        <div class="col-md-4">
        <input name="emailP" value="{{old('emailP')}}" type="text" placeholder="" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="">Email Sena</label>
        <div class="col-md-4">
        <input id="" name="emailS" value="{{old('emailS')}}" type="text" placeholder="" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="">Celular</label>
        <div class="col-md-4">
        <input id="" name="celular" value="{{old('celular')}}" type="text" placeholder="" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="">Telefono</label>
        <div class="col-md-4">
        <input id="" name="telefono" value="{{old('telefono')}}" type="text" placeholder="" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="">Dirección</label>
        <div class="col-md-4">
        <input id="" name="direccion" value="{{old('direccion')}}" type="text" placeholder="" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <!--
      <div class="form-group">
        <label class="col-md-4 control-label" for="">Estado</label>
        <div class="col-md-4">
        <input id="" name="estado" value="old('estado')}}" type="text" placeholder="" class="form-control input-md">

        </div>
      </div>
    -->
<!--/////////////////////////////////////////////////////////////-->
    <!-- Select Basic -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="">Estado</label>
    <div class="col-md-4">
      <select id="" name="estado" class="form-control">
        <option value="">Seleccione Estado...</option>
        <option>Activo</option>
        <option>Inactivo</option>
      </select>
    </div>
  </div>
  <!--/////////////////////////////////////////////////////////////-->

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for=""></label>
        <div class="col-md-4">
          <button id="" name="" class="btn btn-primary">Update</button>
        </div>
      </div>

    </fieldset>
    </form>

