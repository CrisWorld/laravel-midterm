<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [PagesController::class, 'getHome']);
Route::get('/home', [PagesController::class, 'getHome']);
Route::get('/cart', [PagesController::class, 'getCart']);

Route::get('/product/{id}', [ProductController::class, 'show'])->name('pages.productdetail');
Route::get('/search', [ProductController::class, 'search'])->name('pages.search');

