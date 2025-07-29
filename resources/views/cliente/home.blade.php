@extends('adminlte::page')

@section('title', 'Home | SquashPlash')

@section('content_header')
    <h1 class="mt-2 text-center">SQUASH<span>PLASH</span></h1>
@stop

@section('content')
<div class="container mt-5 animate__animated animate__fadeIn">
    <div class="row justify-content-center mb-4">
        <div class="col-md-10">
            <div class="card border-success shadow-lg bg-gradient-cliente">
                <div class="card-header bg-success text-white text-center">
                    <h3 class="mb-0"><i class="fas fa-gift"></i> ¡Bienvenido, disfruta tus beneficios!</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled mb-0 fs-5">
                                <li><i class="fas fa-check-circle text-success me-2"></i> 10% de descuento en tu próxima membresía</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Clase de prueba gratuita para familiares</li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Acceso prioritario a eventos especiales</li>
                            </ul>
                            <div class="mt-3">
                                <span class="badge bg-warning text-dark fs-6">¡Aprovecha estas promociones durante julio!</span>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" alt="Piscina" class="img-fluid rounded shadow-lg" style="max-height: 180px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center g-3">
        <div class="col-md-3">
            <a href="{{ route('membresias.cliente') }}" class="btn btn-outline-success w-100 animate__animated animate__zoomIn"><i class="fas fa-address-card"></i><br>Mis Membresías</a>
        </div>
        <div class="col-md-3">
            <a href="{{ route('clases.cliente') }}" class="btn btn-outline-info w-100 animate__animated animate__zoomIn animate__delay-1s"><i class="fas fa-water"></i><br>Mis Clases</a>
        </div>
        <div class="col-md-3">
            <a href="{{ route('pagos.historial') }}" class="btn btn-outline-warning w-100 animate__animated animate__zoomIn animate__delay-2s"><i class="fas fa-receipt"></i><br>Historial de Pagos</a>
        </div>
        <div class="col-md-3">
            <a href="{{ route('perfil.show') }}" class="btn btn-outline-primary w-100 animate__animated animate__zoomIn animate__delay-3s"><i class="fas fa-id-badge"></i><br>Mi Perfil</a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12 text-center">
            <h4 class="fw-bold text-success animate__animated animate__fadeInUp">¡Gracias por ser parte de SquashPlash! Tu satisfacción es nuestra prioridad.</h4>
        </div>
    </div>
</div>
@stop

@section('css')
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
