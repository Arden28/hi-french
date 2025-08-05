<?php
// app/Http/Controllers/CartController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CartService;
use App\Models\Book;
use App\Models\Course;
use App\Models\LibraryArticle;

class CartController extends Controller
{
    public function index(CartService $cart)
    {
        return view('cart.index', [
            'items' => $cart->all(),
            'total' => $cart->total()
        ]);
    }

    public function add(Request $request, CartService $cart)
    {
        $type = $request->input('item_type'); // 'book' or 'course'
        $id = $request->input('item_id');

        $model = match ($type) {
            'book' => LibraryArticle::findOrFail($id),
            'course' => Course::findOrFail($id),
        };

        $cart->add($model, $request->input('quantity', 1));

        return redirect()->back()->with('success', 'Added to cart!');
    }

    public function removeFromCart(Request $request, CartService $cartService)
    {
        $key = $request->input('key');

        $cartService->remove($key);

        return redirect()->back()->with('success', 'Item removed from cart.');
    }

}
