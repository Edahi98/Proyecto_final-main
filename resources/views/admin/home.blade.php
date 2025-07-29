@extends('adminlte::page')

@section('title', 'Home | SquashPlash')

@section('content_header')
    <h1 class="mt-2 text-center">SQUASH<span>PLASH</span></h1>
@stop

@section('content')

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
            text-align: center;
            font-weight: bold;
        }

        span {
            font-weight: 200;
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
