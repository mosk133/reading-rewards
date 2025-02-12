@extends('layouts.master')
@section('content')
<div class="container-cart">
    @if(session('success'))
    <div class="alert alert-success mt-5">
        {{ session('success') }}
    </div>
    @endif
    <table class="cart-table">
        <thead>
            <th> </th>
            <th>Titulo</th>
            <th>Cantidad</th>
            <th>Precio</th>
            @if(isset($books) && count($books) > 0)
                    @foreach($books as $index => $book) <!-- Aqui obtenemos el índice del libro con $index -->
                <tr>
                    <th><img src="{{ $book['volumeInfo']['imageLinks']['thumbnail'] ?? asset('images/default-book.jpg') }}"
                        class="img-fluid shadow-sm"
                        alt="Portada del libro"></th>
                    <th>{{ $book['volumeInfo']['title'] ?? 'Título no disponible' }}</th>
                    <th>
                        <form action="{{ route('cart.update') }}" method="POST" class="quantity-form" data-index="{{ $index }}">
                            @csrf
                            <!-- ID del libro -->
                            <input type="hidden" name="book_id" value="{{ $book['id'] }}">

                            <!-- Indicar si la cantidad sube o baja -->
                            <input type="hidden" name="action" value="">

                            <!-- Input de cantidad -->
                            <input type="number" name="quantity" value="{{ $quantity[$index] ?? 0 }}" class="quantity-input" data-index="{{ $index }}" />

                            {{-- <button type="button" class="quantity-btn increment" data-index="{{ $index }}" aria-label="Incrementar">+</button>
                            <button type="button" class="quantity-btn decrement" data-index="{{ $index }}" aria-label="Decrementar">-</button> --}}

                            <button type="submit" class="submit-btn">Actualizar</button>
                        </form>
                    </th>
                    <th>{!! nl2br(isset($book['saleInfo']['listPrice']['amount']) ? $book['saleInfo']['listPrice']['amount'] . ' €' . "\n" : 'Precio no disponible') !!}
                        {!! nl2br(isset($book['saleInfo']['listPrice']['amount']) ? $book['saleInfo']['listPrice']['amount'] * 4 . '  R-Coins' : '') !!}
                    </th>
                </tr>
        @endforeach
    @endif
            <tr>
                <th></th>
                <th></th>
                <th> </th>
                <th>Total</th>
                <th> </th>
                <th>
                    {!! nl2br($totalEuros ? $totalEuros . ' €' . "\n" : 'Total no disponible') !!}
                    {!! $totalRCoins > 0 ? $totalRCoins . ' R-Coins' : '' !!}
                </th>
            </tr>
        </thead>
    </table>
    <button class="btn cart-button">Finalizar compra</button>
</div>
@endsection
