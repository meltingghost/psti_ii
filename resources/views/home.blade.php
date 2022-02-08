@extends('layouts.homelayout')

@section('content')
<div class="container">
    <div class="row-justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Página Principal</div>
                <div class="card-body">
                    <div class="col-auto my-2">
                        <a class="btn btn-success btn-lg btn-block" href="/registro/create" role="button">Agregar Empleado</a>
                    </div>
                    <div class="col-auto my-2">
                        <a class="btn btn-primary btn-lg btn-block" href="/control/create" role="button">Agregar Asistencia</a>
                    </div>
                    <div class="col-auto my-2">
                        <a class="btn btn-warning btn-lg btn-block" href="/permisos/create" role="button">Agregar Permiso</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection