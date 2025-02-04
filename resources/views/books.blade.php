@extends('layouts.master')

@section('content')
<section id="best-selling-items" class="position-relative padding-medium">
    <div class="container">
        <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
            <h3 class="d-flex align-items-center">Libros más leídos</h3>
            <a href="index.html" class="btn">Ver más</a>
        </div>

        <!-- Botones de navegación -->
        <div class="position-absolute top-50 end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next product-slider-button-next">
            <svg class="chevron-forward-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
                <use xlink:href="#alt-arrow-right-outline"></use>
            </svg>
        </div>
        <div class="position-absolute top-50 start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev product-slider-button-prev">
            <svg class="chevron-back-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
                <use xlink:href="#alt-arrow-left-outline"></use>
            </svg>
        </div>

        <!-- SwiperJS -->
        <div class="swiper product-swiper">
            <div class="swiper-wrapper">
                @if(isset($books['items']) && count($books['items']) > 0)
                    @foreach($books['items'] as $book)
                        <div class="swiper-slide">
                            <div class="card position-relative p-4 border rounded-3">
                                @if(isset($book['saleInfo']['listPrice']))
                                    <div class="position-absolute">
                                        <p class="bg-primary py-1 px-3 fs-6 text-white rounded-2">
                                            Oferta {{ $book['saleInfo']['listPrice']['amount'] }}€
                                        </p>
                                    </div>
                                @endif
                                <img src="{{ $book['volumeInfo']['imageLinks']['thumbnail'] ?? asset('images/default-book.jpg') }}"
                                    class="img-fluid shadow-sm"
                                    alt="Portada del libro">

                                <h6 class="mt-4 mb-0 fw-bold">
                                    <a href="{{ route('books.show', $book['id'] ?? '#') }}">
                                        {{ $book['volumeInfo']['title'] ?? 'Título no disponible' }}
                                    </a>
                                </h6>

                                <div class="review-content d-flex">
                                    <p class="my-2 me-2 fs-6 text-black-50">
                                        {{ $book['volumeInfo']['authors'][0] ?? 'Autor desconocido' }}
                                    </p>
                                    <div class="rating text-warning d-flex align-items-center">
                                        @for($i = 0; $i < 5; $i++)
                                            <svg class="star star-fill">
                                                <use xlink:href="#star-fill"></use>
                                            </svg>
                                        @endfor
                                    </div>
                                </div>

                                <span class="price text-primary fw-bold mb-2 fs-5">
                                    {!! nl2br(isset($book['saleInfo']['listPrice']['amount']) ? $book['saleInfo']['listPrice']['amount'] . ' €' . "\n" : 'Precio no disponible') !!}
                                    {!! nl2br(isset($book['saleInfo']['listPrice']['amount']) ? $book['saleInfo']['listPrice']['amount'] * 4 . '  R-Coins' : '') !!}


                                </span>

                                <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                    {{-- <a href="{{ route('cart.add', $book['id'] ?? '#') }}" class="btn btn-brown"> --}}
                                        <a href="/cart" class="btn btn-brown">
                                        <span>
                                            <svg class="cart">
                                                <use xlink:href="#cart"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="#" class="btn btn-brown">
                                        <span>
                                            <svg class="wishlist">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-center">No se encontraron libros</p>
                @endif
            </div>
        </div>
    </div>
</section>
<script>
    //slider
    document.addEventListener("DOMContentLoaded", function () {
        var swiper = new Swiper(".product-swiper", {
            slidesPerView: 5, // cards
            spaceBetween: 20,
            navigation: {
                nextEl: ".product-slider-button-next",
                prevEl: ".product-slider-button-prev",
            },
            loop: true
        });
    });
</script>
@endsection
