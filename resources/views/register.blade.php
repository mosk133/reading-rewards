@extends('layouts.master')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/login-style.css') }}">
    <title>Registrarse</title>
</head>
<body>
    <div class="login-container">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <img src="{{ asset('img/logo.jpg') }}" alt="Reading Rewards" class="login-image">
        <h2 class="login-title">Reading Rewards</h2>

        <form class="login-form" method="POST" action="{{ route('register') }}">
            @csrf
            <input type="email" name="email" class="login-input" placeholder="Correo electrónico" value="{{ old('email') }}" required>
            <input type="password" name="password" class="login-input" placeholder="Contraseña" required>
            <input type="password" name="password_confirmation" class="login-input" placeholder="Confirmar contraseña" required>
            <label class="login-terms">
                <input type="checkbox" required>
                Acepto los términos y condiciones
            </label>
            <button type="submit" class="login-button">Registrarse</button>
            <p>¿Ya tienes cuenta? <a href="{{ route('login') }}" class="login-link">Iniciar sesión</a></p>
        </form>
    </div>
</body>
@endsection

