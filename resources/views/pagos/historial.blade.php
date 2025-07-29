@extends('adminlte::page')

@section('title', 'Historial de Pagos')

@section('content_header')
    <h1 class="text-center text-warning">Historial de Pagos</h1>
@stop

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-warning shadow-lg">
                <div class="card-header bg-warning text-dark text-center">
                    <h4 class="mb-0"><i class="fas fa-receipt"></i> Tus pagos realizados</h4>
                </div>
                <div class="card-body">
                    <p class="text-center">Aquí podrás consultar el historial de tus pagos realizados en SquashPlash.</p>
                    <div class="alert alert-info text-center">
                        <i class="fas fa-info-circle"></i> Próximamente podrás descargar tus recibos y ver detalles de cada pago.
                    </div>
                    <!-- Aquí iría la tabla de pagos si existiera -->
                </div>
            </div>
        </div>
    </div>
</div>
@stop
