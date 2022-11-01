<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'show'])->name('product.show');
Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/products/create', [ProductController::class, 'store'])->name('product.store');
Route::get('/products/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
Route::patch('/products/edit/{product}', [ProductController::class, 'update'])->name('product.update');
Route::get('/products/delete/{product}', [ProductController::class, 'delete'])->name('product.delete');
