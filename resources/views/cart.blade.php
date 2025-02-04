@extends('layouts.master')
@section('content')
<div class="container-cart">
    <table class="cart-table">
        <thead>
            <tr>
                <th>Libro</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
                <!-- Aquí se llenará dinámicamente -->
        </tbody>
    </table>
    <button class="btn">Finalizar compra</button>
</div>
@endsection
