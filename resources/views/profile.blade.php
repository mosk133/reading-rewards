@extends('layouts.master', ['disableMasterStyles' => true])
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-profile.css">
</head>

@section('content')
    <!-- Sección del Perfil -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <!-- Barra de navegación lateral -->
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">Mis Libros</a></li>
                            <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">Cartera R-Coins</a></li>
                            <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">Recompensas</a></li>
                            <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">Desafíos de Lectura</a></li>
                            <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">Notificaciones</a></li>
                            <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">Contactos</a></li>
                            <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">Ayuda y Soporte</a></li>
                            <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">Configuracion</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Contenido del perfil -->
            <div class="col-md-6 profile-container">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <!-- Foto de perfil -->
                        <img src="img/profile.png" alt="Foto de perfil" style="width: 120px; margin-bottom: 25px; margin-top: 10px" class="rounded-circle">

                        <p class="text">test@gmail.com</p>
                        <div class="progress mt-3" style="height: 20px; width: 60%; margin: 0 auto; margin-bottom: 50px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">489 xp</div>
                        </div>

                        <!-- Información de usuario -->
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <h5>Nombre</h5>
                                <p>Juan Pérez</p>
                            </div>
                            <div class="col-md-4">
                                <h5>Amigos</h5>
                                <p>35</p>
                            </div>
                            <div class="col-md-4">
                                <h5>R-Coins</h5>
                                <p><img src="img/r-coin.png" alt="R-Coins" style="width: 10px; height: 10px;" class="coin-icon">500</p>
                            </div>
                        </div>

                        <!-- Bonificaciones -->
                        <div class="mt-4">
                            <h5 style="padding-top: 15px;">Bonificaciones</h5>
                            <p>Recibe +50 R-Coins por completar el desafío del mes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    @endsection

