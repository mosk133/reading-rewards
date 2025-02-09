@extends('layouts.master')

@section('content')
<section id="best-selling-items" class="position-relative padding-medium">
    <div class="container">
        <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
            <h3 class="d-flex align-items-center">Resultados</h3>
            <div id="message-container"></div>
        </div>

        <div class="row">
                @if(isset($books['items']) && count($books['items']) > 0)
                    @foreach($books['items'] as $book)
                    <div class="col-12 col-sm-6 col-md-4 col-lg book-grid-item mb-4">
                        <div class="card book-card p-4 border rounded-3 h-100">
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
                                <div class="card-concern position-absolute start-0 end-0 d-flex flex-column align-items-center">
                                    {{-- El ID unico #descriptionModal-{{ $book['id'] }} es dinamico para que cada libro tenga su propio modal.
                                    La clase modal fade indica que el modal usara una animación de fundido.
                                    aria-hidden="true" significa que el modal está oculto hasta que se active. --}}
                                    <button class="btn btn-brown" data-bs-toggle="modal" data-bs-target="#descriptionModal-{{ $book['id'] }}">
                                        <span>
                                            <svg class="view">
                                                <use xlink:href="#eye"></use>
                                            </svg>
                                        </span>
                                    </button>
                                    <div class="d-flex gap-2">
                                        <form id="add-to-cart-form-{{ $book['id'] }}" action="{{ route('cart.add', ['id' => $book['id']]) }}" method="POST">
                                            @csrf
                                            <button type="button" class="btn btn-brown add-to-cart" data-book-id="{{ $book['id'] }}">
                                                <span>
                                                    <svg class="cart">
                                                        <use xlink:href="#cart"></use>
                                                    </svg>
                                                </span>
                                            </button>
                                        </form>
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
                        <div class="modal fade" id="descriptionModal-{{ $book['id'] }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ $book['volumeInfo']['title'] ?? 'Título no disponible' }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ Str::limit($book['volumeInfo']['description'] ?? 'Descripción no disponible', 350, '...') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                @else
                    <p class="text-center">No se encontraron libros</p>
                @endif
            </div>
    </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.add-to-cart').click(function() {
        var bookId = $(this).data('book-id'); // Obtener el ID del libro desde el atributo data-book-id
        var form = $('#add-to-cart-form-' + bookId);

        $.ajax({
            url: form.attr('action'),  // usar la action del formulario (la URL de la ruta)
            method: 'POST',
            data: form.serialize(),    // serializar el formulario (incluye el CSRF token)
            success: function(response) {
                // Si todo OK, mostrar el mensaje:
                if (response.success) {
                    $('#message-container').html('<div class="alert alert-success">' + response.success + '</div>');
                }
            },
            error: function(xhr) {
                // mensaje de error
                $('#message-container').html('<div class="alert alert-danger">Ocurrió un error. Por favor, intenta de nuevo.</div>');
            }
        });
    });
});
</script>
</section>
@endsection
