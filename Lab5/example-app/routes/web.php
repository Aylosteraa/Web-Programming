<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
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

Route::get('/user', function () {
    return 'Welcome';
});
Route::get('/user/{name}', function ($name) {
    return "Welcome " .$name;
});

//controller
Route::get('/welcome', [MyController::class, 'index']);
Route::get('/welcome/{name}', [MyController::class, 'show']);

//post and views
Route::get('/userform', [MyController::class, 'show_form']);
Route::post('/feedback', [MyController::class, 'store']);


//models
Route::get('/product', [ProductController::class, 'index']);
Route::post('/showproduct', [ProductController::class, 'store']);


//work with views
Route::get('/views', function () {
    return view('base_view');
});
Route::get('/views/colors', function () {
    $colors = ['pink', 'blue', 'red', 'green', 'black'];
    return view('example', compact('colors'));
});
Route::get('/views/images', function () {
    return view('images');
});
