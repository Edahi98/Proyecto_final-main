@extends('adminlte::page')

@section('title', 'Home | SquashPlash')

@section('content_header')
    <h1 class="mt-2 text-center">SQUASH<span>PLASH</span></h1>
@stop

@section('content')

    <!-- Sección de roles del sistema (mejorada) -->
    <div class="row justify-content-center mt-5 mb-4 animate__animated animate__fadeIn">
        <div class="col-12 mb-4">
            <h2 class="text-center text-gradient display-5 fw-bold" style="background: linear-gradient(90deg,#007bff,#00c6ff,#00e6b8,#00ffb8);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">¿Qué roles existen en el sistema?</h2>
            <p class="text-center text-secondary fs-5">Cada usuario tiene un rol con permisos y funciones específicas para una mejor experiencia.</p>
        </div>
        <div class="col-md-4 mb-4">
            @component('components.rol_card', [
                'icon' => 'fas fa-user-shield fa-4x mb-3 text-admin',
                'title' => 'Administrador',
                'description' => 'Gestiona todo el sistema: usuarios, membresías, clases, pagos y reportes.',
                'features' => [
                    '<i class="fas fa-check-circle text-admin me-2"></i>Acceso total a todas las funciones',
                    '<i class="fas fa-check-circle text-admin me-2"></i>Alta, edición y eliminación de usuarios',
                    '<i class="fas fa-check-circle text-admin me-2"></i>Gestión de membresías y clases',
                    '<i class="fas fa-check-circle text-admin me-2"></i>Visualización de reportes y estadísticas',
                ],
                'cardClass' => 'h-100 card border-0 shadow-lg role-card bg-gradient-admin animate__animated animate__zoomIn',
                'bodyClass' => 'card-body text-center'
            ])
            @endcomponent
        </div>
        <div class="col-md-4 mb-4">
            @component('components.rol_card', [
                'icon' => 'fas fa-user-tie fa-4x mb-3 text-empleado',
                'title' => 'Empleado',
                'description' => 'Apoya en la gestión diaria, atención a clientes y registro de asistencias.',
                'features' => [
                    '<i class="fas fa-check-circle text-empleado me-2"></i>Registro de asistencias a clases',
                    '<i class="fas fa-check-circle text-empleado me-2"></i>Gestión de pagos y membresías',
                    '<i class="fas fa-check-circle text-empleado me-2"></i>Consulta de información de clientes',
                ],
                'cardClass' => 'h-100 card border-0 shadow-lg role-card bg-gradient-empleado animate__animated animate__zoomIn animate__delay-1s',
                'bodyClass' => 'card-body text-center'
            ])
            @endcomponent
        </div>
        <div class="col-md-4 mb-4">
            @component('components.rol_card', [
                'icon' => 'fas fa-user fa-4x mb-3 text-cliente',
                'title' => 'Cliente',
                'description' => 'Accede a sus datos, consulta membresías, clases y realiza pagos.',
                'features' => [
                    '<i class="fas fa-check-circle text-cliente me-2"></i>Consulta de membresías activas',
                    '<i class="fas fa-check-circle text-cliente me-2"></i>Visualización de clases disponibles',
                    '<i class="fas fa-check-circle text-cliente me-2"></i>Historial de pagos y asistencias',
                ],
                'cardClass' => 'h-100 card border-0 shadow-lg role-card bg-gradient-cliente animate__animated animate__zoomIn animate__delay-2s',
                'bodyClass' => 'card-body text-center'
            ])
            @endcomponent
        </div>
    </div>
@stop

@section('css')
    <!-- FontAwesome para íconos de roles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Animate.css para animaciones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

        .role-card {
            transition: transform 0.2s, box-shadow 0.2s;
            border-radius: 1.5rem;
            background: #fff;
        }
        .role-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 0.5rem 2rem rgba(0,0,0,0.15);
            z-index: 2;
        }
        .text-gradient {
            background: linear-gradient(90deg,#007bff,#00c6ff,#00e6b8,#00ffb8);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
        }
        .text-admin { color: #007bff; }
        .text-empleado { color: #00c6ff; }
        .text-cliente { color: #00e6b8; }
        .bg-gradient-admin { background: linear-gradient(135deg, #e3f0ff 0%, #f8fbff 100%); }
        .bg-gradient-empleado { background: linear-gradient(135deg, #e0f7fa 0%, #f8fbff 100%); }
        .bg-gradient-cliente { background: linear-gradient(135deg, #e0fff7 0%, #f8fbff 100%); }
        .card-body ul li {
            margin-bottom: 0.5rem;
            font-size: 1.05rem;
        }
    </style>
@stop

@section('js')
    <script>
        console.log("Bienvenido a Albercas Chulas 🏖️");
    </script>
@stop
