@extends('layouts.master')

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-read.css">
    <style>
        .reading-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 30px;
        }

        body{
            background: #D5d5d5 !important;
        }

        .reading-text {
            width: 45%;
            height: 1000px;
            overflow-y: auto;
            padding: 65px;
            background-color: #f4f4f4;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
            margin-top: 31px;
            position: relative;
        }

        .top-bar {
            display: flex;
            justify-content: end;
            gap: 20px;
            width: 45%;
            z-index: 100;
        }

        .time-counter,
        .rcoins-container {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 10px;
            border-radius: 10px;
            font-size: 18px;
        }

        .rcoin-logo {
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }

        .next-page-btn {
            position: absolute;
            bottom: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: brown;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        .next-page-btn:hover {
            background-color: black;
        }

        .chapter-title {
    font-size: 2rem;
    font-weight: bold;
    color: #3e4a57;
    margin-top: 20px;
    margin-bottom: 25px;
    border-bottom: 2px solid #3e4a57;
    padding-bottom: 5px;
    text-align: center;
}

#book-text {
    font-size: 1.2rem;
    color: #333;
    margin-bottom: 50px;
    text-align: justify; /* Justificado para mejorar la lectura */

}

    </style>
</head>

@section('content')
    <!-- Página de lectura -->
    <div class="reading-container">
        <!-- Barra superior con el contador de tiempo y R-Coins -->
        <div class="top-bar">
            <div class="time-counter">
                Tiempo: <span id="time">00:00</span>
            </div>
            <div class="rcoins-container">
                <img src="/img/r-coin.png" alt="R-Coins" class="rcoin-logo"> <span id="rcoins">0</span> R-Coins
            </div>
        </div>

        <!-- Contenedor de texto -->
        <div class="reading-text">
            <!-- Título y prólogo del libro -->
            <h2 class="chapter-title">Prólogo</h2>
            <p id="book-text">
                En el corazón de la selva tropical de América del Sur, donde los ríos se entrelazan como venas de vida,
                y los árboles se elevan hacia el cielo cubiertos por un manto de vegetación, nació una historia que se
                contaría durante generaciones. La historia de un joven aventurero y su encuentro con la naturaleza
                salvaje, los misterios ancestrales y las culturas que florecieron a la sombra de los laurales de Indias.
            </p>

            <h2 class="chapter-title">Capítulo 1: El Encuentro</h2>
            <p id="book-text">
                El sol se desvanecía lentamente sobre el horizonte, bañando el río Amazonas en una luz dorada que
                reflejaba la magnificencia del entorno. Martín, con su mochila llena de sueños y expectativas, avanzaba
                por el sendero que se desdibujaba entre la jungla. Había llegado a este lugar buscando respuestas,
                pero lo que encontraría iría más allá de lo que había imaginado.
            </p>
            <p id="book-text">
                En un pequeño rincón del Caribe, donde las olas del mar acarician la orilla y la brisa trae consigo ecos de antiguas leyendas, se erige un laurel de Indias que, para algunos, es mucho más que un árbol. Es un símbolo de resistencia, un testigo de tiempos pasados, y en él descansan secretos que han sobrevivido a las generaciones.
        </p>
        <p id="book-text">
        La presencia del laurel de Indias en el corazón de la isla era algo que todos conocían...
    </p>
        <!-- Botón para pasar de página dentro del reading-text -->
            <button class="next-page-btn" onclick="nextPage()">Siguiente Página</button>
        </div>


    <script>
        // Variables para el contador de tiempo y R-Coins
        let time = 0; // Tiempo en segundos
        let rcoins = 0; // R-Coins acumulados
        let readingInterval;
        let rcoinInterval;

        // Función para iniciar el contador de tiempo
        function startTimer() {
            readingInterval = setInterval(function() {
                time++;
                document.getElementById("time").innerText = formatTime(time);
            }, 1000);
        }

        // Función para formatear el tiempo en minutos y segundos
        function formatTime(seconds) {
            const minutes = Math.floor(seconds / 60);
            const remainingSeconds = seconds % 60;
            return `${minutes < 10 ? '0' : ''}${minutes}:${remainingSeconds < 10 ? '0' : ''}${remainingSeconds}`;
        }

        // Función para sumar R-Coins
        function startRcoins() {
            rcoinInterval = setInterval(function() {
                rcoins++;
                document.getElementById("rcoins").innerText = rcoins;
            }, 5000); // Añade 1 R-Coin cada 5 segundos
        }

        // Iniciar todo al cargar la página
        window.onload = function() {
            startTimer();
            startRcoins();
        };

        // Detener todo cuando se abandona la página (puedes implementarlo según sea necesario)
        window.onbeforeunload = function() {
            clearInterval(readingInterval);
            clearInterval(rcoinInterval);
        };

        // Función para pasar de página
        function nextPage() {
            // Aquí puedes redirigir a otra página o cargar más contenido
            alert('Pasando a la siguiente página...');
            // Redirigir a la siguiente página (ejemplo)
            window.location.href = '/next-page';
        }
    </script>
@endsection
