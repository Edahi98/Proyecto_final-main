@extends('adminlte::page')

@section('title', 'Nuevo Usuario')

@section('content_header')
    <h1>Nuevo Usuario</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4>Formulario de Usuario</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('usuarios.guardar') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $usuario->id ?? 0 }}">

                    <div class="form-group mb-3">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="name" value="{{ $usuario->name ?? '' }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Correo</label>
                        <input type="email" class="form-control" name="email" value="{{ $usuario->email ?? '' }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" name="password" {{ $usuario->id ? '' : 'required' }}>
                        @if($usuario->id)
                            <small class="form-text text-muted">Déjalo vacío si no quieres cambiar la contraseña.</small>
                        @endif
                    </div>

                    <div class="form-group mb-3">
                        <label for="password_confirmation">Confirmar Contraseña</label>
                        <input type="password" class="form-control" name="password_confirmation" {{ $usuario->id ? '' : 'required' }}>
                    </div>

                    <div class="form-group mb-3">
                        <label for="rol">Rol</label>
                        <select name="rol" class="form-control" required>
                            <option value="">-- Selecciona un rol --</option>
                            <option value="Admin" {{ $usuario->rol == 'Admin' ? 'selected' : '' }}>Admin</option>
                            <option value="Empleado" {{ $usuario->rol == 'Empleado' ? 'selected' : '' }}>Empleado</option>
                            <option value="Cliente" {{ $usuario->rol == 'Cliente' ? 'selected' : '' }}>Cliente</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Guardar Usuario</button>
                </form>
            </div>
        </div>
    </div>
@stop
