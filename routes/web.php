<?php

use App\Http\Controllers\Sublime\HomeController;
use App\Http\Controllers\Sublime\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/{cat}', [ProductController::class, 'category'])->name('cat');
Route::get('/{cat}/{product_id}', [ProductController::class, 'getProduct'])->name('product');
