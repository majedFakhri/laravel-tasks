<?php
use App\Models\Product;

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get(
    '/',
    function () {
        return view('product.home');
    }

);


Route::get(
    'addproduct',
    [ProductController::class, 'create']
);


Route::get(
    'showall',
    [ProductController::class, 'index']
);

Route::post(
    'store',
    [ProductController::class, 'store']
)->name('store');