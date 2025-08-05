<?php
// app/Services/CartService.php
namespace App\Services;

use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartService
{
    protected $sessionKey = 'guest_cart';

    public function add($purchasable, $quantity = 1)
    {
        if (Auth::check()) {
            CartItem::updateOrCreate(
                [
                    'user_id' => Auth::id(),
                    'purchasable_type' => get_class($purchasable),
                    'purchasable_id' => $purchasable->id,
                ],
                [
                    'price' => $purchasable->price,
                    'quantity' => DB::raw('quantity + ' . $quantity),
                ]
            );
        } else {
            $cart = Session::get($this->sessionKey, []);
            $key = get_class($purchasable) . ':' . $purchasable->id;

            if (isset($cart[$key])) {
                $cart[$key]['quantity'] += $quantity;
            } else {
                $cart[$key] = [
                    'purchasable_type' => get_class($purchasable),
                    'purchasable_id' => $purchasable->id,
                    'title' => $purchasable->title ?? $purchasable->name,
                    'price' => $purchasable->price,
                    'quantity' => $quantity,
                    'subtotal' => ($purchasable->price * $quantity)
                ];
            }

            Session::put($this->sessionKey, $cart);
        }
    }

    public function all()
    {
        if (Auth::check()) {
            return CartItem::where('user_id', Auth::id())->with('purchasable')->get();
        }

        return collect(Session::get($this->sessionKey, []));
    }

    public function count()
    {
        return $this->all()->sum(fn($item) => $item['quantity'] ?? $item->quantity);
    }

    public function total()
    {
        return $this->all()->sum(fn($item) => ($item['price'] ?? $item->price) * ($item['quantity'] ?? $item->quantity));
    }

    public function remove($key)
    {
        if (Auth::check()) {
            CartItem::where('user_id', Auth::id())->where('id', $key)->delete();
        } else {
            $cart = Session::get($this->sessionKey, []);
            unset($cart[$key]);
            Session::put($this->sessionKey, $cart);
        }
    }

    public function clear()
    {
        if (Auth::check()) {
            CartItem::where('user_id', Auth::id())->delete();
        } else {
            Session::forget($this->sessionKey);
        }
    }

    public function merge()
    {
        if (!Auth::check()) return;

        $cart = Session::get($this->sessionKey, []);
        foreach ($cart as $item) {
            $model = ($item['purchasable_type'])::find($item['purchasable_id']);
            if ($model) {
                $this->add($model, $item['quantity']);
            }
        }

        Session::forget($this->sessionKey);
    }
}
