@extends('layouts.master')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/login-style.css') }}">
    <title>Registrarse</title>
</head>
<body>
    <div class="container">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <img src="{{ asset('img/logo.jpg') }}" alt="Reading Rewards" class="image">
        <h2>Reading Rewards</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="email" name="email" placeholder="Correo electronico" value="{{ old('email') }}" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <input type="password" name="password_confirmation" placeholder="Confirmar contraseña" required>
            <label class="terms">
                <input type="checkbox" required>
                Acepto los términos y condiciones
            </label>
            <button type="submit">Registrarse</button>
            <p>¿Ya tienes cuenta? <a href="{{ route('login') }}">Iniciar sesión</a></p>
        </form>
    </div>
</body>
@endsection
