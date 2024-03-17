<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\http\Controllers\CartController;
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

Route::get('/Admin', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('addproductview',[ProductsController::class,'create']);
Route::post('add-product',[ProductsController::class,'store']);
Route::get('products',[ProductsController::class,'index']);
Route::get('/',[ProductsController::class,'show']);
Route::get('editproduct/{product}',[ProductsController::class,'edit']);
Route::post('update/{product}',[ProductsController::class,'update']);
Route::get('deleteproduct/{product}',[ProductsController::class,'destroy']);

Route::get('cart-index',[CartController::class,'show']);
Route::get('addtocart/{productid}',[CartController::class,'store']);
Route::get('delteitem/{productid}',[CartController::class,'destroy']);
Route::get('increase_Q/{productid}',[CartController::class,'increase_Quantity']);
Route::get('decrease_Q/{productid}',[CartController::class,'decrease_Quantity']);
Route::get('clear-cart/',[CartController::class,'clear']);
