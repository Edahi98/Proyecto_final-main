@extends('adminlte::page')

@section('title', 'Nueva Membresia')

@section('content_header')
    <h1>Nueva Membresia</h1>
@stop

@section('content')
    <div class="container-fluid"> {{-- Usamos container-fluid para que ocupe todo el ancho --}}
        <div class="row">
            <div class="col-12"> {{-- Columna a todo el ancho en todos los tamaños de pantalla --}}
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4>Formulario de Membresía</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('membresia.guardar') }}" method="POST">
                            <input type="hidden" value="{{$membresia->id}}" name="id">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="id_usuario">Usuario</label>
                                <select name="id_usuario" id="id_usuario" class="form-control select2" required>
                                    <option value="">-- Selecciona un Usuario --</option>
                                    @foreach ($usuarios as $usuario)
                                        <option value="{{$usuario->id}}" {{$membresia->id_usuario == $usuario->id ? 'selected' : ''}}> {{$usuario->name}} </option>
                                    @endforeach
                                </select>
                                <!-- <input type="number" class="form-control" id="id_usuario" name="id_usuario" required> -->
                            </div>
                            <div class="form-group mb-3">
                                <label for="cuantas_clases">Clases Adquiridas</label>
                                <input type="number" value="{{$membresia->clases_adquiridas}}" class="form-control" id="cuantas_clases" name="clases_adquiridas" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="clases_disponibles">Clases disponibles</label>
                                <input type="number" value="{{$membresia->clases_disponibles}}" class="form-control" id="clases_disponibles" name="clases_disponibles" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="clases_ocupadas">Clases ocupadas</label>
                                <input type="number" class="form-control" id="clases_ocupadas" name="clases_ocupadas" required>
                            </div>
                            <button type="submit" class="btn btn-success" name="guardar">Guardar Membresía</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop