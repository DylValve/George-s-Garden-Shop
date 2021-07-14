<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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
Route::middleware(['auth:sanctum', 'verified'])->group( function() {
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
});


Route::get('/', function () {
    return redirect('/main');
});

Route::get('/main', function () {

    $categories = Category::all();
    return view('main', compact('categories'));
})->name('main');

Route::get('/store', function () {

    $products = Product::all();
    $categories = Category::all();
    return view('products', compact('products', 'categories'));
})->name('store');

Route::get('/order', function () {

    $products = Product::all();
    $categories = Category::all();
    return view('order', compact('products', 'categories'));
})->name('order');

Route::get('/about', function () {

    $categories = Category::all();
    return view('about', compact('categories'));
})->name('about');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

