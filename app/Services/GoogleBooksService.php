<?php

namespace App\Services;

// importa la fachada Http de Laravel, que permite hacer solicitudes HTTP de manera sencilla (en este caso, para obtener datos de la API de Google Books).
use Illuminate\Support\Facades\Http;

class GoogleBooksService
{
    // Aquí se declara una propiedad protegida $apiKey que almacenará la clave de la API de Google
    protected $apiKey;

    public function __construct()
    {
        // se asigna a la propiedad $apiKey el valor de la clave API configurada en el archivo config/services.php
        $this->apiKey = config('services.google_books.api_key');
    }

    // $query: Este es el término de búsqueda que el usuario ingresa (puede ser el título de un libro, el autor, etc.).
    public function searchBooks($query, $maxResults = 40)
    {
        // Aqui se construye la URL para hacer la solicitud GET a la API de Google Books
        // urlencode($query): Codifica para manejar espacios o caracteres especiales (concatena con cantidad de resultados y le pasa la api key)
        /* url final sera algo como esto:
        https://www.googleapis.com/books/v1/volumes?q=harry+potter&maxResults=10&key=nuestra_api */
        $url = "https://www.googleapis.com/books/v1/volumes?q=" . urlencode($query) . "&maxResults={$maxResults}&key={$this->apiKey}";

        // realiza la solicitud
        $response = Http::get($url);

        // Retornar los Datos en Formato JSON
        return $response->json();
    }
}
