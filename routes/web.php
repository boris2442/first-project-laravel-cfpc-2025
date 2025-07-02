<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/excel', [ProductController::class, 'excel'])->name('excel');
Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('/create', [ProductController::class, 'create'])->name('products.create');
route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
route::get(
    '/products/edit/{id}',
    [ProductController::class, 'edit']
)->name('products.edit');
route::patch('/products/update{id}', [ProductController::class, 'update'])->name('products.update');
route::delete('/products/delete/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/{any}', function () {
    return view('notFoundPage');
})->where('any', '.*');
