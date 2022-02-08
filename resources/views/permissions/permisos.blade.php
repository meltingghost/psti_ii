@extends('layouts.homelayout')

@section('content')

<div class="alert alert-success" role="alert">
    @if (Session::has('mensaje'))
    {{ Session::get('mensaje') }}
    @endif
    
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="row justify-content-center">
    <div class="col-md-11">
        <div class="card">
                @csrf
                <fieldset>
                    <div class="mt-3">
                            <h2 class="text-center">Solicitud de Permisos</h2>
                        </div>
                        <div class="therows2" id="only-first">
                            <div id="butto" class="mt-3 ml-4 mb-3">
                                <a id="add" href="{{ url('/permisos/create') }}" class="btn btn-success">Agregar</a>
                            </div>
                            <div id="search-show">
                                <div id="search" class="col-xl-12">
                                        <form action="{{ route('permisos.index') }}" method="GET">
                                            <div class="form-row my-1">
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="texto" value="{{ $texto }}">
                                                </div>
                                                <div class="col-auto my-1">
                                                    <input type="submit" class="btn btn-primary" value="Buscar">
                                                </div>
                                            </div>
                                        </form>
                                        <div class="col-auto my-1">
                                            <a href="javascript:window.print()" class="btn btn-secondary">Imprimir</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="therows2">
                                <table class="table table-light">
                                    <thead class="thead-light">
                                        <tr>
                                        <th>#</th>
                                        <th>Cédula</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Fecha de Inicio</th>
                                        <th>Fecha de Culminación</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($permissions)<=0)
                                        <tr>
                                            <td colspan="8">No hay resultados</td>
                                        </tr>
                                    @else
                                    @foreach ($permissions as $permission)
                                    <tr>
                                        <td>{{ $permission->id }}</td>
                                        <td>{{ $permission->cedula }}</td>
                                        <td>{{ $permission->nombre }}</td>
                                        <td>{{ $permission->apellido }}</td>
                                        <td>{{ $permission->fecha_de_inicio }}</td>
                                        <td>{{ $permission->fecha_de_culminacion }}</td>
                                        <td>
                                            <a href="{{ url('/permisos/'.$permission->id.'/edit') }}" class="btn btn-outline-warning">
                                                Editar
                                            </a>
                                            |
                                            <form action="{{ url('/permisos/'.$permission->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <input class="btn btn-outline-danger" type="submit" onclick="return confirm('¿Está seguro que desea borrar?')" value="Borrar">
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            {!! $permissions->links() !!}
                        </div>
                    </fieldset>
            </div>
        </div>
    </div>
@endsection
