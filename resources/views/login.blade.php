@extends('layouts.master')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/login-style.css') }}">
    <title>Iniciar Sesión</title>
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
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" placeholder="Correo electronico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <label class="terms">
                <input type="checkbox" required>
                Acepto los términos y condiciones
            </label>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>
@endsection

