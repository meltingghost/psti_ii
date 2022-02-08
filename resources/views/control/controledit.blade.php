@extends('layouts.app')
@section('content')
<div class="container">
<form id="content" action="{{ url('/control/'.$assist->id) }}" method="POST">
    @csrf
    {{ method_field('PATCH') }}
    <div id="register-assistance" class="register-modal">
        <div class="register-modal-content">
            <div class="register-modal-header">
                <span class="register-close">&times;</span>
            </div>
            <h1> Editar Asistencia </h1>
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
                <input class="form-control" type="text" name="fecha" value="{{ isset($assist->fecha)?$assist->fecha:old('fecha') }}">
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
                <input class="form-control" type="text" name="hora" value="{{ isset($assist->hora)?$assist->hora:old('hora') }}">
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
        <input class="btn btn-success" type="submit" value="Editar datos">
    <a id="add" class="btn btn-primary" href="{{ url('/control.index') }}">Regresar</a>
    <br>
        </div>
    </div>
    </form>
</div>
@endsection