<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('/create', [ProductController::class, 'create'])->name('products.create');
route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
route::get('/products/edit', [ProductController::class, 'edit'])->name('products.edit');
route::patch('/products/update', [ProductController::class, 'edit'])->name('products.update');
