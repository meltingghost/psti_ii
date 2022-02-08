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
                            <h2 class="text-center">Control de Asistencias</h2>
                        </div>
                        <div class="therows2" id="only-first">
                            <div id="butto" class="mt-3 ml-4 mb-3">
                                <a id="add" href="{{ url('/control/create') }}" class="btn btn-success">Agregar</a>
                            </div>
                            <div id="search-show">
                                <div id="search" class="col-xl-12">
                                        <form action="{{ route('control.index') }}" method="GET">
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
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Observaciones</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($assists)<=0)
                                        <tr>
                                            <td colspan="8">No hay resultados</td>
                                        </tr>
                                    @else
                                    @foreach ($assists as $assist)
                                    <tr>
                                        <td>{{ $assist->id }}</td>
                                        <td>{{ $assist->cedula }}</td>
                                        <td>{{ $assist->nombre }}</td>
                                        <td>{{ $assist->apellido }}</td>
                                        <td>{{ $assist->fecha }}</td>
                                        <td>{{ $assist->hora }}</td>
                                        <td>{{ $assist->observacion }}</td>
                                        <td>
                                            <a href="{{ url('/control/'.$assist->id.'/edit') }}" class="btn btn-outline-warning">
                                                Editar
                                            </a>
                                            <form action="{{ url('/control/'.$assist->id) }}" method="POST" class="d-inline">
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
                            {!! $assists->links() !!}
                        </div>
                    </fieldset>
            </div>
        </div>
    </div>
@endsection