@extends('adminlte::page')

@section('title', 'Inicio | Albercas Chulas')

@section('content_header')
    <h1 class="text-center text-primary font-weight-bold">🏝️ Albercas Chulas</h1>
@stop

@section('content')
    <div class="row mt-4">
        <div class="col-md-12 text-center">
            <p class="lead">¡Disfruta del mejor lugar para refrescarte y pasar un día inolvidable!</p>
            <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" 
                 alt="Piscina" 
                 class="img-fluid rounded shadow" 
                 style="max-height: 400px;">
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card bg-info text-white shadow">
                <div class="card-header">
                    <h4 class="card-title">Renta de Albercas</h4>
                </div>
                <div class="card-body">
                    <p>Espacios privados con albercas de distintos tamaños para eventos, fiestas o días de descanso.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-success text-white shadow">
                <div class="card-header">
                    <h4 class="card-title">Áreas Verdes</h4>
                </div>
                <div class="card-body">
                    <p>Jardines y zonas recreativas para toda la familia, perfectas para asar carne y jugar.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-warning text-dark shadow">
                <div class="card-header">
                    <h4 class="card-title">Paquetes Especiales</h4>
                </div>
                <div class="card-body">
                    <p>Ofrecemos paquetes para cumpleaños, reuniones familiares y eventos empresariales.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Sección de roles del sistema -->
    <div class="row mt-5">
        <div class="col-12 mb-4">
            <h2 class="text-center text-primary">¿Qué roles existen en el sistema?</h2>
        </div>
        <div class="col-md-4 mb-3">
            @component('components.rol_card', [
                'icon' => 'fas fa-user-shield',
                'title' => 'Administrador',
                'description' => 'Gestiona todo el sistema: usuarios, membresías, clases, pagos y reportes.',
                'features' => [
                    'Acceso total a todas las funciones',
                    'Alta, edición y eliminación de usuarios',
                    'Gestión de membresías y clases',
                    'Visualización de reportes y estadísticas',
                ]
            ])
            @endcomponent
        </div>
        <div class="col-md-4 mb-3">
            @component('components.rol_card', [
                'icon' => 'fas fa-user-tie',
                'title' => 'Empleado',
                'description' => 'Apoya en la gestión diaria, atención a clientes y registro de asistencias.',
                'features' => [
                    'Registro de asistencias a clases',
                    'Gestión de pagos y membresías',
                    'Consulta de información de clientes',
                ]
            ])
            @endcomponent
        </div>
        <div class="col-md-4 mb-3">
            @component('components.rol_card', [
                'icon' => 'fas fa-user',
                'title' => 'Cliente',
                'description' => 'Accede a sus datos, consulta membresías, clases y realiza pagos.',
                'features' => [
                    'Consulta de membresías activas',
                    'Visualización de clases disponibles',
                    'Historial de pagos y asistencias',
                ]
            ])
            @endcomponent
        </div>
    </div>
@stop

@section('css')
    <!-- FontAwesome para íconos de roles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-papm6p6Qw1Qw1Qw1Qw1Qw1Qw1Qw1Qw1Qw1Qw1Qw1Qw1Qw1Qw1Qw1Qw1Qw1Qw1Qw1Qw1Qw1Qw1Qw1Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background: linear-gradient(to right, #dfe9f3, #ffffff);
        }

        h1 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            border-radius: 1rem;
        }

        .card-header {
            font-weight: bold;
            font-size: 1.2rem;
        }
    </style>
@stop

@section('js')
    <script>
        console.log("Bienvenido a Albercas Chulas 🏖️");
    </script>
@stop
