@extends('layouts.master')

@section('content')
<section id="best-selling-items" class="position-relative padding-medium">
    <div class="book-section-container">
        <div class="book-carousel-container">
                <div class="book-description-card">
                    <div class="card-info">
                        <div class="card custom-height position-relative p-4 border rounded-3">
                            @if(isset($bookinfo['saleInfo']['listPrice']))
                                <div class="position-absolute">
                                    <p class="bg-primary py-1 px-3 fs-6 text-white rounded-2">
                                        Oferta {{ $bookinfo['saleInfo']['listPrice']['amount'] }}€
                                    </p>
                                </div>
                            @endif
                            <img class="info-img" src="{{ $bookinfo['volumeInfo']['imageLinks']['thumbnail'] ?? asset('images/default-book.jpg') }}"
                                class="img-fluid shadow-sm" alt="Portada del libro">
                            <h6 class="mt-4 mb-0 fw-bold">
                                <a href="{{ route('books.show', $bookinfo['id'] ?? '#') }}">
                                    {{ $bookinfo['volumeInfo']['title'] ?? 'Título no disponible' }}
                                </a>
                            </h6>
                            <div class="review-content d-flex">
                                <p class="my-2 me-2 fs-6 text-black-50">
                                    {{ $bookinfo['volumeInfo']['authors'][0] ?? 'Autor desconocido' }}
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
                                {!! nl2br(isset($bookinfo['saleInfo']['listPrice']['amount']) ? $bookinfo['saleInfo']['listPrice']['amount'] . ' €' . "\n" : 'Precio no disponible') !!}
                                {!! nl2br(isset($bookinfo['saleInfo']['listPrice']['amount']) ? $bookinfo['saleInfo']['listPrice']['amount'] * 4 . '  R-Coins' : '') !!}
                            </span>

                            <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
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
                </div>
        </div>
        <div class="book-description">
            <div class="book-description-container">
                {{-- Blade previene que se haga XSS, desactivar con {!! !!} --}}
                <p>{!! $bookinfo['volumeInfo']['description'] ?? 'Descripción no disponible' !!}</p>
            </div>
        </div>
    </div>
</section>
@endsection
