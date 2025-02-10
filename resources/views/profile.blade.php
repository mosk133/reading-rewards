@extends('layouts.master')
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-profile.css">
</head>

@section('content')
    <!-- Sección del Perfil -->
    <div class="container profile-mt-5">
        <div class="row justify-content-center">
            <!-- Barra de navegación lateral -->
            <div class="col-md-3">
                <div class="profile-card bootstrap-card shadow-sm">
                    <div class="card-body">
                        <ul class="list-group profile-list-group">
                            <li class="list-group-item profile-list-item"><a href="#" class="profile-link">Mis Libros</a></li>
                            <li class="list-group-item profile-list-item"><a href="#" class="profile-link">Cartera R-Coins</a></li>
                            <li class="list-group-item profile-list-item"><a href="#" class="profile-link">Recompensas</a></li>
                            <li class="list-group-item profile-list-item"><a href="#" class="profile-link">Desafíos de Lectura</a></li>
                            <li class="list-group-item profile-list-item"><a href="#" class="profile-link">Notificaciones</a></li>
                            <li class="list-group-item profile-list-item"><a href="#" class="profile-link">Contactos</a></li>
                            <li class="list-group-item profile-list-item"><a href="#" class="profile-link">Ayuda y Soporte</a></li>
                            <li class="list-group-item profile-list-item"><a href="#" class="profile-link">Configuracion</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Contenido del perfil -->
            <div class="col-md-6 profile-container">
                <div class="profile-card bootstrap-card shadow-sm">
                    <div class="card-body text-center profile-card-body">
                        <!-- Foto de perfil -->
                        <img src="img/profile.png" alt="Foto de perfil" class="profile-picture rounded-circle">

                        <p class="profile-email">test@gmail.com</p>
                        <div class="progress profile-progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">489 xp</div>
                        </div>

                        <!-- Información de usuario -->
                        <div class="row profile-info">
                            <div class="col-md-4">
                                <h5 class="profile-heading">Nombre</h5>
                                <p class="profile-text">Juan Pérez</p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="profile-heading">Amigos</h5>
                                <p class="profile-text">35</p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="profile-heading">R-Coins</h5>
                                <p class="profile-text"><img src="img/r-coin.png" alt="R-Coins" class="profile-coin-icon">500</p>
                            </div>
                        </div>

                        <!-- Bonificaciones -->
                        <div class="profile-bonuses">
                            <h5 class="profile-heading">Bonificaciones</h5>
                            <p class="profile-text">Recibe +50 R-Coins por completar el desafío del mes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
