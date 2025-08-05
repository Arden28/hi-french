<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/course', [HomeController::class, 'course'])->name('course.index');
Route::get('/course/{slug}', [HomeController::class, 'courseDetail'])->name('course.show');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog.index');
Route::get('/blog/{slug}', [HomeController::class, 'blogDetail'])->name('blog.detail');
Route::get('/library', [HomeController::class, 'library'])->name('library.index');

// Route::get('/cart', [HomeController::class, 'cart'])->name('cart');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/thank-you', [HomeController::class, 'thankYou'])->name('thank-you');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/my-account', [HomeController::class, 'myAccount'])->name('dashboard');
});

require __DIR__.'/auth.php';
