<form method="POST" action="{{url('programas/'.$programa->IdPrograma)}}" class="form-horizontal">
    @method('PUT')
    @csrf
    <fieldset>

    <!-- Form Name -->
    <legend>Editar Programa</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="">Nombre</label>
      <div class="col-md-4">
      <input value="{{$programa->Nombre}}" name="nombre" type="text" placeholder="Nombre" class="form-control input-md">

      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="">Nivel</label>
      <div class="col-md-4">
        <select value="{{$programa->Nivel}}" name="nivel" class="form-control">
          <option>Tecnólogo</option>
          <option>Técnico</option>
        </select>
      </div>
    </div>


    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for=""></label>
      <div class="col-md-4">
        <button id="" name="" class="btn btn-primary">Insert</button>
      </div>
    </div>

    </fieldset>
</form>
