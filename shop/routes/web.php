<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
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

Route::get('/', [AboutController::class, 'index']);

Route::get('/catalog', [FlowerController::class, 'index']);
Route::get('/catalog/{id}', [CategoryController::class, 'show']);

Route::get('/product/{id}', [FlowerController::class, 'show']);

Route::get('/{id}/review_form', [ReviewController::class, 'index']);

Route::post('/review', [ReviewController::class, 'store']);

Route::get('/search', [SearchController::class, 'find']);

Route::get('/filter', [FilterController::class, 'find']);

Route::get('/cart', [CartController::class, 'index']);
Route::post('/addToCart', [CartController::class, 'store']);
Route::post('/removeFromCart', [CartController::class, 'delete']);

Route::post('/order', [OrderController::class, 'index']);
Route::post('/createOrder', [OrderController::class, 'store']);

Route::get('/info', function () {
    return view('inform_page');
});
