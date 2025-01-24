<!DOCTYPE html>
<html lang="es">
@extends('layouts.master')
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style-mybooks.css">
</head>

@section('content')
<body>
    <header class="text-white py-5 text-center bg-primary">
        <div class="container">
            <h1>Mis Libros</h1>
            <p class="lead">Tu colección personal de libros</p>
        </div>
    </header>

    <section id="my-books" class="py-5">
        <div class="container">
            <h2 class="mb-4">Tu Biblioteca</h2>
            <div class="row g-4">
                <!-- Libro 1 -->
                <div class="col-md-4">
                    <div class="card p-3 shadow-sm">
                        <img src="books/laurel_indias.jpg" alt="A la sombra de un laurel de Indias" class="img-fluid">
                        <h5 class="mt-3">A la sombra de un laurel de Indias</h5>
                        <p class="my-2 me-2 fs-6 text-black-50">Jesús Nadador</p>
                        <div class="d-flex align-items-center">
                            <img src="img/r-coin.png" alt="R-Coins" style="width: 16px; height: 16px;" class="coin-icon">
                            <span class="fs-6 text-black">194 R-Coins</span>
                        </div>
                        <!-- Barra de progreso -->
                        <div class="progress mt-3">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40% Leído</div>
                        </div>
                        <a href="/leer/laurel_indias" class="btn btn-primary mt-3 w-100">Continuar Leyendo</a>
                    </div>
                </div>
                <!-- Libro 2 -->
                <div class="col-md-4">
                    <div class="card p-3 shadow-sm">
                        <img src="books/cuco_cristal.jpg" alt="El cuco de cristal" class="img-fluid">
                        <h5 class="mt-3">El cuco de cristal</h5>
                        <p class="my-2 me-2 fs-6 text-black-50">Javier Castillo</p>
                        <div class="d-flex align-items-center">
                            <img src="img/r-coin.png" alt="R-Coins" style="width: 16px; height: 16px;" class="coin-icon">
                            <span class="fs-6 text-black">354 R-Coins</span>
                        </div>
                        <!-- Barra de progreso -->
                        <div class="progress mt-3">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65% Leído</div>
                        </div>
                        <a href="/leer/cuco_cristal" class="btn btn-primary mt-3 w-100">Continuar Leyendo</a>
                    </div>
                </div>
                <!-- Libro 3 -->
                <div class="col-md-4">
                    <div class="card p-3 shadow-sm">
                        <img src="books/quinto_invitado.jpg" alt="El quinto invitado" class="img-fluid">
                        <h5 class="mt-3">El quinto invitado</h5>
                        <p class="my-2 me-2 fs-6 text-black-50">Jenny Knight</p>
                        <div class="d-flex align-items-center">
                            <img src="img/r-coin.png" alt="R-Coins" style="width: 16px; height: 16px;" class="coin-icon">
                            <span class="fs-6 text-black">452 R-Coins</span>
                        </div>
                        <!-- Barra de progreso -->
                        <div class="progress mt-3">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80% Leído</div>
                        </div>
                        <a href="/leer/quinto_invitado" class="btn btn-primary mt-3 w-100">Continuar Leyendo</a>
                    </div>
                </div>
                <!-- Libro 4 -->
                <div class="col-md-4">
                    <div class="card p-3 shadow-sm">
                        <img src="books/herededas_singer.jpg" alt="Las herederas de la Singer" class="img-fluid">
                        <h5 class="mt-3">Las herederas de la Singer</h5>
                        <p class="my-2 me-2 fs-6 text-black-50">Ana Lena Rivera</p>
                        <div class="d-flex align-items-center">
                            <img src="img/r-coin.png" alt="R-Coins" style="width: 16px; height: 16px;" class="coin-icon">
                            <span class="fs-6 text-black">152 R-Coins</span>
                        </div>
                        <!-- Barra de progreso -->
                        <div class="progress mt-3">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30% Leído</div>
                        </div>
                        <a href="/leer/herederas_singer" class="btn btn-primary mt-3 w-100">Continuar Leyendo</a>
                    </div>
                </div>
                <!-- Libro 5 -->
                <div class="col-md-4">
                    <div class="card p-3 shadow-sm">
                        <img src="books/alquimista.jpg" alt="El Alquimista" class="img-fluid">
                        <h5 class="mt-3">El Alquimista</h5>
                        <p class="my-2 me-2 fs-6 text-black-50">Paulo Coelho</p>
                        <div class="d-flex align-items-center">
                            <img src="img/r-coin.png" alt="R-Coins" style="width: 16px; height: 16px;" class="coin-icon">
                            <span class="fs-6 text-black">590 R-Coins</span>
                        </div>
                        <!-- Barra de progreso -->
                        <div class="progress mt-3">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95% Leído</div>
                        </div>
                        <!-- Botón Continuar Leyendo -->
                        <a href="/leer/el_alquimista" class="btn btn-primary mt-3 w-100">Continuar Leyendo</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card p-3 shadow-sm">
                        <img src="books/alguacil.jpg" alt="El alguacil" class="img-fluid">
                        <h5 class="mt-3">El alguacil</h5>
                        <p class="my-2 me-2 fs-6 text-black-50">Carlos Pérez</p>
                        <div class="d-flex align-items-center">
                            <img src="img/r-coin.png" alt="R-Coins" style="width: 16px; height: 16px;" class="coin-icon">
                            <span class="fs-6 text-black">225 R-Coins</span>
                        </div>
                        <!-- Barra de progreso -->
                        <div class="progress mt-3">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50% Leído</div>
                        </div>
                        <!-- Botón Continuar Leyendo -->
                        <a href="/leer/el_alguacil" class="btn btn-primary mt-3 w-100">Continuar Leyendo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
@endsection
