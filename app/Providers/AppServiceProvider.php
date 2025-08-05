<?php

namespace App\Providers;

use App\Services\CartService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $cartService = app(CartService::class);
            $view->with('cartItems', $cartService->all());
            $view->with('cartCount', $cartService->count());
            $view->with('cartTotal', $cartService->total());
        });
    }
}
