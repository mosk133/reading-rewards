<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* Importa el servicio GoogleBooksService definido en services.
Este servicio es responsable de hacer solicitudes a la API de Google Books
para obtener la información de los libros. */
use App\Services\GoogleBooksService;

class BookController extends Controller
{
    /* aqui declaramos una propiedad $googleBooksService, que almacenara
    una instancia del servicio GoogleBooksService
    para usarlo más tarde en los metodos del controlador. */
    protected $googleBooksService;

    /* Laravel inyecta automaticamente una instancia
    de GoogleBooksService en el constructor.
    inyeccion de dependencias. */
    public function __construct(GoogleBooksService $googleBooksService)
    {
        /* La instancia de GoogleBooksService que Laravel proporciona
        se asigna a la propiedad $googleBooksService. Esto te permitirá
        usar ese servicio en otros métodos del controlador. */
        $this->googleBooksService = $googleBooksService;
    }

    // Este método se encarga de manejar la solicitud de búsqueda de libros y devolver la vista con los resultados
    public function search(Request $request)
    {
        // obtiene el valor del parámetro query que el usuario envía a través de la solicitud HTTP (el search en la vista que lleva el name="query")
        $query = $request->input('query');

        /* Llamar al Servicio GoogleBooksService.
        Llama al metodo searchBooks() del servicio GoogleBooksService.
        Este metodo realiza la solicitud a la API de Google Books para obtener los libros que coinciden
        con el término de búsqueda $query.

        el servicio GoogleBooksService construye la URL para la API de Google Books,
        hace la solicitud GET, y luego devuelve los resultados en formato JSON,
        que son almacenados en la variable $books.*/
        $books = $this->googleBooksService->searchBooks($query);

        // Pasa la variable $books a la vista books. compact('books') crea un array asociativo con la clave 'books' y el valor de la variable $books, para acceder dentro a los datos en la vista.
        return view('books', compact('books'));
    }

    public function show($id){

        $bookinfo = $this->googleBooksService->getBookId($id);

        return view('book-info', ['bookinfo' => $bookinfo]);
    }

    public function showShopBooks(){
        $recentBooks = $this->googleBooksService->getRecentBooks();

        $suspenseBooks = $this->googleBooksService->getSuspenseBooks();

        return view('shop', compact('recentBooks', 'suspenseBooks'));
    }
}

/* Cuando en tu controlador haces esto:

public function __construct(GoogleBooksService $googleBooksService)

Laravel automáticamente crea una nueva instancia de la clase GoogleBooksService
y la inyecta dentro de la propiedad $googleBooksService cuando se instancia el controlador.

¿Cómo lo hace Laravel?

Laravel utiliza el servicio de contenedor (service container), que es una herramienta
que gestiona la creación y resolución de clases y sus dependencias.
Laravel sabe que el controlador BookController necesita un GoogleBooksService porque
lo has indicado en el constructor.
Cuando Laravel crea una instancia de tu controlador, busca qué clase necesita el
constructor (GoogleBooksService) y la proporciona automáticamente.


Diferencia con la Creación Manual

Si no estuvieras usando la inyección de dependencias, tendrías que crear manualmente
una instancia de GoogleBooksService dentro del controlador. Sería algo como esto:

public function __construct()
{
    $this->googleBooksService = new GoogleBooksService();
}

Aquí estás creando manualmente la instancia de la clase
con new GoogleBooksService(). Esto funciona, pero no es la forma
recomendada en Laravel, ya que pierdes la flexibilidad que
te da el contenedor de servicios, como la posibilidad de
aplicar configuraciones, compartir instancias,
y manejar dependencias complejas de forma automática.*/




/* class Persona
    {
        public $nombre;

        public function __construct($nombre)
        {
            $this->nombre = $nombre;
        }

        public function saludar()
        {
            echo "Hola, soy " . $this->nombre;
        }


class MiClase
{
    public static $valor = 10;

    public static function mostrarValor()
    {
        // No se puede usar $this en un método estático
        echo $this->$valor; // Error
    }
}

Para acceder a propiedades o métodos estáticos dentro de un método estático, se usa self:::

class MiClase
{
    public static $valor = 10;

    public static function mostrarValor()
    {
        echo self::$valor; // Correcto
    }
} */
