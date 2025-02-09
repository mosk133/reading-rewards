<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use App\Services\GoogleBooksService;

class CartController extends Controller
{
    protected $googleBooksService;

    public function __construct(GoogleBooksService $googleBooksService)
    {
        $this->googleBooksService = $googleBooksService;
    }

    public function showCart(){
        // pluck('book_id'): Obtiene una colección de los book_id asociados al usuario. pluck es útil cuando quieres obtener solo una columna específica.
        // Si prefieres trabajar con un array en lugar de una colección, puedes convertir la colección a un array usando ->toArray() y luego acceder al primer valor usando el índice [0]
        $id = CartItem::where('user_id', Auth::id())->pluck('book_id')->toArray();
        $quantity = CartItem::where('user_id', Auth::id())->pluck('quantity');
        // where('user_id', Auth::id()): Filtra los registros donde el user_id sea el ID del usuario autenticado.
        // 'user_id = Auth::id())'
        $idBooks = $this->googleBooksService->getBooksCart($id);
        // dd($quantity);
        return view ('cart', ['books' => $idBooks, 'quantity' => $quantity]);
    }

    public function addToCart($bookId){
        // if (!Auth::check()) {
        //     return response()->json(['error' => 'No estás autenticado'], 401);
        // }

        CartItem::create([
            'book_id' => $bookId,
            'user_id' => Auth::id(),
        ]);

        return response()->json(['success' => 'Libro añadido al carrito']);
        // return redirect()->route('cart.show')->with('success', 'Libro agregado al carrito.');
    }

    public function updateCart(Request $request){
        $bookId = $request->input('book_id');
        $quantity = $request->input('quantity');

        CartItem::where('book_id', $bookId)
        // aseguramos que solo actualizamos si la cantidad es mayor a 0
        ->where('quantity', '>', 0)
        ->update(['quantity' => $quantity]);

        //eliminar los articulos que tengan quantity 0
        CartItem::where('book_id', $bookId)
        ->where('quantity', '=', 0)
        ->delete();

        return redirect()->route('cart.show')->with('success', 'Cantidad actualizada');
    }
}
