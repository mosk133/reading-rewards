@extends('layouts.master')

@section('content')
<div class="container custom-profile-mt-5">
    <div class="row justify-content-center">
        <!-- Barra de navegación lateral -->
        <div class="col-md-3">
            <div class="custom-profile-card custom-bootstrap-card shadow-sm">
                <div class="card-body">
                    <ul class="list-group custom-profile-list-group">
                        <li class="list-group-item custom-profile-list-item"><a href="/profile" class="custom-profile-link">Perfil</a></li>
                        <li class="list-group-item custom-profile-list-item"><a href="/library" class="custom-profile-link">Mis Libros</a></li>
                        <li class="list-group-item custom-profile-list-item"><a href="/wallet" class="custom-profile-link">Cartera R-Coins</a></li>
                        <li class="list-group-item custom-profile-list-item"><a href="#" class="custom-profile-link">Recompensas</a></li>
                        <li class="list-group-item custom-profile-list-item"><a href="#" class="custom-profile-link">Desafíos de Lectura</a></li>
                        <li class="list-group-item custom-profile-list-item"><a href="#" class="custom-profile-link">Notificaciones</a></li>
                        <li class="list-group-item custom-profile-list-item"><a href="#" class="custom-profile-link">Contactos</a></li>
                        <li class="list-group-item custom-profile-list-item"><a href="#" class="custom-profile-link">Ayuda y Soporte</a></li>
                        <li class="list-group-item custom-profile-list-item"><a href="#" class="custom-profile-link">Configuración</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Cartera R-Coins -->
        <div class="col-md-7">
            <div class="custom-wallet-container">
                <div class="custom-wallet-card">
                    <h2 class="custom-wallet-title">Wallet R-Coins</h2>
                    <div class="custom-wallet-balance">
                        <p>Saldo actual:</p>
                        <h3>500 <img src="{{ asset('img/r-coin.png') }}" alt="R-Coins" class="custom-wallet-coin-icon"></h3>
                    </div>
                    <div class="custom-wallet-section">
                        <h4>Recargar R-Coins</h4>
                        <input type="number" placeholder="Cantidad" class="custom-wallet-input">
                        <button class="custom-wallet-button">Recargar</button>
                    </div>
                    <div class="custom-wallet-section">
                        <h4>Enviar R-Coins</h4>
                        <input type="email" placeholder="Correo del destinatario" class="custom-wallet-input">
                        <input type="number" placeholder="Cantidad" class="custom-wallet-input">
                        <button class="custom-wallet-button">Enviar</button>
                    </div>
                    <div class="custom-wallet-section">
                        <h4>Recibir R-Coins</h4>
                        <p>Comparte tu correo para recibir R-Coins: <strong>test@gmail.com</strong></p>
                    </div>
                    <div class="custom-wallet-section custom-wallet-pending">
                        <h4>Transacciones Pendientes</h4>
                        <ul class="custom-wallet-list">
                            <li>+100 R-Coins de juan@gmail.com (Pendiente)</li>
                            <li>+50 R-Coins de maria@gmail.com (Pendiente)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
