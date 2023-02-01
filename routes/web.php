<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [HomeController::class, 'shop']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/auth/check', function () {return (auth()->check()); });

Route::get('/detail/{id}', [DetailController::class, 'detail']);

Route::middleware(['auth', 'can:is_admin'])->prefix('/admin')->group(function () {
    Route::get('', [AdminController::class, 'admin']);
    Route::get('categories', [AdminController::class, 'admin_categories']);
    Route::get('products', [AdminController::class, 'admin_products']);
    Route::get('users', [AdminController::class, 'admin_users']);
    Route::get('orders', [AdminController::class, 'admin_orders']);
    // <---------------------------------------------------------------------------->
    Route::get('categories/create', [CategoriesController::class, 'create']);
    Route::post('categories', [CategoriesController::class, 'store']);
    Route::get('categories/{id}/edit', [CategoriesController::class, 'edit']);
    Route::put('categories/{id}', [CategoriesController::class, 'update']);
    Route::delete('categories/{id}', [CategoriesController::class, 'destroy']);
    // <---------------------------------------------------------------------------->
    Route::get('products/create', [ProductsController::class, 'create']);
    Route::post('products', [ProductsController::class, 'store']);
    Route::get('products/{id}/edit', [ProductsController::class, 'edit']);
    Route::put('products/{id}', [ProductsController::class, 'update']);
    Route::delete('products/{id}', [ProductsController::class, 'destroy']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/cart', [CartController::class, 'cart']);
    Route::get('/add-productID', [CartController::class, 'addproductID']);
    Route::get('/add-productID-Wishlist', [CartController::class, 'addproductIDToWishList']);
    Route::get('/removeProduct', [CartController::class, 'removeProduct']);
    Route::get('/increaseProductQuantity', [CartController::class, 'increaseProductQuantity']);
    Route::get('/decreaseProductQuantity', [CartController::class, 'decreaseProductQuantity']);
    Route::get('/checkout', [CheckoutController::class, 'checkout']);
    Route::post('/addOrder', [CheckoutController::class, 'addOrder']);
    Route::post('/addRating', [DetailController::class, 'rating']);
});

require __DIR__.'/auth.php';
