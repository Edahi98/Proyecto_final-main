@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
    <div class="container-fluid">
        <a href="{{ route('usuarios.nuevo') }}" class="btn btn-primary mb-3">Nuevo Usuario</a>
        <div class="card border-info">
            <div class="card-header bg-info text-white">
                <h4 class="mb-0">Listado de Usuarios</h4>
            </div>
            <div class="card-body bg-light">
                <table class="table table-bordered table-hover table-striped text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->id }}</td>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>{{ $usuario->rol }}</td>
                            <td>
                                <a href="{{ route('usuarios.editar', $usuario->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('usuarios.eliminar', $usuario->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
