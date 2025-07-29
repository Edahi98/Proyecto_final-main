@extends('adminlte::page')

@section('title', 'Mi Perfil')

@section('content_header')
    <h1 class="text-center text-primary">Mi Perfil</h1>
@stop

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-gradient-admin text-white text-center">
                    <h4 class="mb-0">Información Personal</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-sm-4 text-end fw-bold">Nombre:</div>
                        <div class="col-sm-8">{{ $user->name }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4 text-end fw-bold">Correo electrónico:</div>
                        <div class="col-sm-8">{{ $user->email }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4 text-end fw-bold">Rol:</div>
                        <div class="col-sm-8">
                            @if($user->rol === 'Admin')
                                <span class="badge bg-primary"><i class="fas fa-user-shield me-1"></i> Administrador</span>
                            @elseif($user->rol === 'Empleado')
                                <span class="badge bg-info"><i class="fas fa-user-tie me-1"></i> Empleado</span>
                            @else
                                <span class="badge bg-success"><i class="fas fa-user me-1"></i> Cliente</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4 text-end fw-bold">Fecha de registro:</div>
                        <div class="col-sm-8">{{ $user->created_at->format('d/m/Y H:i') }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4 text-end fw-bold">Última actualización:</div>
                        <div class="col-sm-8">{{ $user->updated_at->format('d/m/Y H:i') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .bg-gradient-admin {
            background: linear-gradient(135deg, #e3f0ff 0%, #007bff 100%) !important;
        }
    </style>
@stop
