@extends('adminlte::page')

@section('title', 'Home | SquashPlash')

@section('content_header')
    <h1 class="mt-2 text-center">SQUASH<span>PLASH</span></h1>
@stop

@section('content')
<div class="container mt-5 animate__animated animate__fadeIn">
    <div class="row justify-content-center mb-4">
        <div class="col-md-10">
            <div class="card border-info shadow-lg bg-gradient-empleado">
                <div class="card-header bg-info text-white text-center">
                    <h3 class="mb-0"><i class="fas fa-bullhorn"></i> ¡Bienvenido Empleado!</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled mb-0 fs-5">
                                <li><i class="fas fa-gift text-success me-2"></i> Participa en la rifa mensual de vales de restaurante</li>
                                <li><i class="fas fa-star text-warning me-2"></i> Reconocimiento al empleado del mes</li>
                                <li><i class="fas fa-calendar-alt text-info me-2"></i> Acceso a capacitaciones exclusivas</li>
                            </ul>
                            <div class="mt-3">
                                <span class="badge bg-warning text-dark fs-6">¡No olvides registrar tus asistencias y participar en la rifa!</span>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2" alt="Empleado" class="img-fluid rounded shadow-lg" style="max-height: 180px;">
                        </div>
                    </div>
                    <hr>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <a href="{{ route('clases') }}" class="btn btn-outline-info w-100 animate__animated animate__zoomIn"><i class="fas fa-water"></i><br>Ver Clases</a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('membresias.cliente') }}" class="btn btn-outline-success w-100 animate__animated animate__zoomIn animate__delay-1s"><i class="fas fa-address-card"></i><br>Ver Membresías</a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('perfil.show') }}" class="btn btn-outline-primary w-100 animate__animated animate__zoomIn animate__delay-2s"><i class="fas fa-id-badge"></i><br>Mi Perfil</a>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 text-center">
                            <h4 class="fw-bold text-info animate__animated animate__fadeInUp">¡Gracias por tu esfuerzo y dedicación en SquashPlash!</h4>
                        </div>
                    </div>
                </div>
            </div>
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
