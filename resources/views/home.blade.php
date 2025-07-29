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
@stop

@section('css')
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
@stop
