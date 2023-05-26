<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

Route::get('/', [BookController::class, 'index']);

Route::get('/book/{id}', [BookController::class, 'show']);

Route::get('/author/{id}', [BookController::class, 'showAuthor']);

Route::get('/publish/{id}', [BookController::class, 'showPublishHouses']);

Route::get('/addBook', [BookController::class, 'addBook']);
Route::post('/postBook', [BookController::class, 'store']);
