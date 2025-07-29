@extends('adminlte::auth.login')


@section('auth_footer')
    <div class="text-center mb-3">
        <a href="{{ route('login.google') }}" class="btn btn-danger btn-block">
            <i class="fab fa-google"></i> Iniciar sesión con Google
        </a>
    </div>
    @parent

    @if (session('message'))
        <div class="alert alert-warning">
            {{ session('message') }}
        </div>
    @endif
@endsection