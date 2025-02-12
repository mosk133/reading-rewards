@extends('layouts.master')

@section('content')
<head>
    <title>Iniciar Sesión</title>
</head>
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
        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" class="login-input" placeholder="Correo electrónico" required>
            <input type="password" name="password" class="login-input" placeholder="Contraseña" required>
            <label class="login-terms">
                <input type="checkbox" required>
                Acepto los términos y condiciones
            </label>
            <button class="login-button" type="submit">Iniciar Sesión</button>
        </form>
    </div>
@endsection
