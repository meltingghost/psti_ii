<h1> {{$modo}} Empleado </h1>
@if (count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach ( $errors->all() as $error )
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
        <div class="row">
        <div class="col">
        <div class="form-group">
            <label for="cedula" class="title">Cédula:</label>
            <input class="form-control" type="text" name="cedula" value="{{ isset($employee->cedula)?$employee->cedula:old('cedula') }}">
        </div>
        </div>
        <div class="col">
        <div class="form-group">
            <label for="nombre" class="title">Nombre:</label>
            <input class="form-control" type="text" name="nombre" value="{{ isset($employee->nombre)?$employee->nombre:old('nombre') }}">
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col">
        <div class="form-group">
            <label for="apellido" class="title">Apellido:</label>
            <input class="form-control" type="text" name="apellido" value="{{ isset($employee->apellido)?$employee->apellido:old('apellido') }}">
        </div>
        </div>
        <div class="col">
        <label for="fecha_de_nacimiento" class="title">Fecha de Nacimiento:</label>
        <div class="form-group">
            <div class='input-group date' id='CalendarDate'>
                <input class="form-control" type='text' name="fecha_de_nacimiento" value="{{ isset($employee->fecha_de_nacimiento)?$employee->fecha_de_nacimiento:old('fecha_de_nacimiento') }}">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col">
        <div class="form-group">
            <label for="edad" class="title">Edad:</label>
            <input class="form-control" type="text" name="edad" value="{{ isset($employee->edad)?$employee->edad:old('edad') }}">
        </div>
        </div>
        <div class="col">
        <div class="form-group">
            <label for="sexo" class="title">Sexo:</label>
            <select class="form-control" id=dropdown-sex name="sexo" value="{{ isset($employee->sexo)?$employee->sexo:old('sexo') }}">
                <option value="select">Selecciona una opción</option>
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
            </select>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col">
        <div class="form-group">
            <label for="correo" class="title">Correo:</label>
            <input class="form-control" type="text" name="correo" value="{{ isset($employee->correo)?$employee->correo:old('correo') }}">
        </div>
        </div>
        <div class="col">
        <div class="form-group">
            <label for="telefono" class="title">Teléfono:</label>
            <input class="form-control" type="text" name="telefono" value="{{ isset($employee->telefono)?$employee->telefono:old('telefono') }}">
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col">
        <div class="form-group">
            <label for="cargo" class="title">Cargo:</label>
            <input class="form-control" type="text" name="cargo" value="{{ isset($employee->cargo)?$employee->cargo:old('cargo') }}">
        </div>
        </div>
        </div>
        <input class="btn btn-success" type="submit" value="{{$modo}} datos">
    <a id="add" class="btn btn-primary" href="{{ url('/registro.index') }}">Regresar</a>
    <br>
