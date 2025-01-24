<!DOCTYPE html>
<html lang="es">
@extends('layouts.master')
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style-home.css">
</head>

@section('content')
<body>

    <header class="text-white py-5 text-center">
        <div class="container">
            <h1>Bienvenido a Reading Rewards</h1>
            <p class="lead">La plataforma que te recompensa por disfrutar de tus libros favoritos.</p>
            <a href="#about" class="btn btn-primary mt-3">Descubre más</a>
        </div>
    </header>

    <section id="about" class="py-5 bg-light">
        <div class="container text-center">
            <h2 style="font-weight: 500" class="mb-4">¿Cómo funciona?</h2>
            <p class="mb-5">
                En Reading Rewards, transformamos tu pasión por la lectura en recompensas. Lee libros,
                acumula puntos y canjéalos por productos exclusivos, descuentos, y más.
            </p>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card p-4 shadow">
                        <h5 style="font-weight: 500">1. Escoge un libro</h5>
                        <p>Explora nuestra amplia biblioteca y selecciona los títulos que más te interesen.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4 shadow">
                        <h5 style="font-weight: 500">2. Lee y avanza</h5>
                        <p>Disfruta de la lectura desde cualquier dispositivo mientras acumulas puntos por cada página.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4 shadow">
                        <h5 style="font-weight: 500">3. Obtén recompensas</h5>
                        <p>Canjea tus puntos por descuentos en libros, productos exclusivos y mucho más.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Sección Testimonios -->
<section id="testimonials" class="bg-light padding-medium">
    <div class="container text-center">
        <h2 class="mb-4">Opiniones de nuestros lectores</h2>
        <div class="swiper testimonial-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <blockquote class="blockquote">
                        <p>"La mejor forma de motivarme a leer más. ¡Las recompensas son geniales!"</p>
                        <footer class="blockquote-footer">Ana Martínez</footer>
                    </blockquote>
                </div>
                <div class="swiper-slide">
                    <blockquote class="blockquote">
                        <p>"He descubierto nuevos libros y además he ganado descuentos. ¡Increíble!"</p>
                        <footer class="blockquote-footer">Carlos López</footer>
                    </blockquote>
                </div>
            </div>
            <!-- Navegación específica para testimonios -->
            <div class="testimonial-button-next swiper-button-next"></div>
            <div class="testimonial-button-prev swiper-button-prev"></div>
        </div>
    </div>
</section>

<!-- Sección Libros destacados -->
<section id="featured-books" class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 style="font-weight: 600">Libros más populares</h2>
            <a href="/shop" class="btn btn-primary">Ver tienda</a>
        </div>
        <div class="swiper product-swiper">
            <div class="swiper-wrapper">
                <!-- Slides de libros destacados -->
                <div class="swiper-slide">
                    <div class="card p-3 shadow-sm">
                        <img src="books/laurel_indias.jpg" alt="A la sombra de un laurel de Indias" class="img-fluid">
                        <h5 class="mt-3">A la sombra de un laurel</h5>
                        <p class="text">Jesús Nadador</p>
                        <span class="price text-primary fw-bold">21,75 € - 430 R-Coins</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card p-3 shadow-sm">
                        <img src="books/grieta_silencio.jpg" alt="La grieta del silencio" class="img-fluid">
                        <h5 class="mt-3">La grieta del silencio</h5>
                        <p class="text">Javier Castillo</p>
                        <span class="price text-primary fw-bold">18,50 € - 370 R-Coins</span>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card p-3 shadow-sm">
                        <img src="books/vinedo_luna.jpg" alt="El viñedo de la luna" class="img-fluid">
                        <h5 class="mt-3">El viñedo de la luna</h5>
                        <p class="text">Carla Montero</p>
                        <span class="price text-primary fw-bold">25,00 € - 500 R-Coins</span>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card p-3 shadow-sm">
                        <img src="books/nietos.jpg" alt="Los Nietos" class="img-fluid">
                        <h5 class="mt-3">Los Nietos</h5>
                        <p class="text">Ángel Fernández</p>
                        <span class="price text-primary fw-bold">19,99 € - 400 R-Coins</span>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card p-3 shadow-sm">
                        <img src="books/herededas_singer.jpg" alt="Las herederas de la Singer" class="img-fluid">
                        <h5 class="mt-3">Herederas de la Singer</h5>
                        <p class="text">Ana Lena Rivera</p>
                        <span class="price text-primary fw-bold">17,50 € - 350 R-Coins</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="featured-books-2">
    <div class="container">
        <div class="swiper product-swiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="card p-3 shadow-sm">
                        <img src="books/cuco_cristal.jpg" alt="El cuco de cristal" class="img-fluid">
                        <h5 class="mt-3">El cuco de cristal</h5>
                        <p class="text">Javier Castillo</p>
                        <span class="price text-primary fw-bold">21,75 € - 430 R-Coins</span>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card p-3 shadow-sm">
                        <img src="books/quinto_invitado.jpg" alt="El quinto invitado" class="img-fluid">
                        <h5 class="mt-3">El quinto invitado</h5>
                        <p class="text">Jenny Knight</p>
                        <span class="price text-primary fw-bold">18,50 € - 370 R-Coins</span>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card p-3 shadow-sm">
                        <img src="books/cien_anos.jpg" alt="Cien años de soledad" class="img-fluid">
                        <h5 class="mt-3">Cien años de soledad</h5>
                        <p class="text">Gabriel García Márquez</p>
                        <span class="price text-primary fw-bold">25,00 € - 500 R-Coins</span>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card p-3 shadow-sm">
                        <img src="books/lista_juez.jpg" alt="La lista del juez" class="img-fluid">
                        <h5 class="mt-3">La lista del juez</h5>
                        <p class="text">John Grisham</p>
                        <span class="price text-primary fw-bold">19,99 € - 400 R-Coins</span>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card p-3 shadow-sm">
                        <img src="books/alquimista.jpg" alt="El Alquimista" class="img-fluid">
                        <h5 class="mt-3">El Alquimista</h5>
                        <p class="text">Paulo Coelho</p>
                        <span class="price text-primary fw-bold">17,50 € - 350 R-Coins</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const productSwiper = new Swiper('.product-swiper', {
    loop: true,
    navigation: {
        nextEl: '.featured-books-button-next', // Botón único
        prevEl: '.featured-books-button-prev', // Botón único
    },
});

const testimonialSwiper = new Swiper('.testimonial-swiper', {
    loop: true,
    autoplay: {
        delay: 5000,
    },
    navigation: {
        nextEl: '.testimonial-button-next', // Botón único
        prevEl: '.testimonial-button-prev', // Botón único
    },
});

    </script>
</body>

</html>
@endsection
