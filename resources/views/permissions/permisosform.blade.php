<h1> {{$modo}} Permiso </h1>
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
    </div>
    <div class="row">
    <div class="col">
        <div class="form-group">
                <label for="employee_id" class="title">ID del Empleado:</label>
                <input class="form-control" type="text" name="employee_id" value="{{ isset($permission->employee_id)?$permission->employee_id:old('employee_id') }}">
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col">
        <div class="form-group">
            <label for="fecha_de_inicio" class="title">Fecha de Inicio:</label>
            <div class='input-group date' id='CalendarDate'>
                <input class="form-control" type="text" name="fecha_de_inicio" value="{{ isset($permission->fecha_de_inicio)?$permission->fecha_de_inicio:old('fecha_de_inicio') }}">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="fecha_de_culminacion" class="title">Fecha de Culminacion:</label>
            <div class='input-group date' id='CalendarDate1'>
                <input class="form-control" type="text" name="fecha_de_culminacion" value="{{ isset($permission->fecha_de_culminacion)?$permission->fecha_de_culminacion:old('fecha_de_culminacion') }}">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    </div>
        <input class="btn btn-success" type="submit" value="{{$modo}} datos">
    <a id="add" class="btn btn-primary" href="{{ url('/permisos.index') }}">Regresar</a>
<br>