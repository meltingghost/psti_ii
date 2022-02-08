<h1> {{$modo}} Asistencia </h1>
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
            <label for="fecha" class="title">Fecha:</label>
            <div class='input-group date' id='CalendarDate'>
                <input class="form-control" type="text" name="fecha" value="{{ isset($assist->fecha)?$assist->fecha:old('fecha', date('Y-m-d')) }}">
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
            <label for="hora" class="title">Hora:</label>
            <div class='input-group date' id='CalendarTime'>
                <input class="form-control" type="text" name="hora" value="{{ isset($assist->hora)?$assist->hora:old('hora', date('H:i')) }}">
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
        <label for="employee_id" class="title">ID del Empleado</label>
            <input class="form-control" type="text" name="employee_id" value="{{ isset($permission->fecha_de_culminacion)?$permission->fecha_de_culminacion:old('employee_id') }}">
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="observacion" class="title">Observacion:</label>
                <input class="form-control" type="text" name="observacion" value="{{ isset($assist->observacion)?$assist->observacion:old('observacion') }}">
            </div>
        </div>
    </div>
        <input class="btn btn-success" type="submit" value="{{$modo}} datos">
    <a id="add" class="btn btn-primary" href="{{ url('/control.index') }}">Regresar</a>
    <br>