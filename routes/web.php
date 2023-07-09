<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/product-page/addcart/{product}', [ProductController::class, "addcart"]);
Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [UserController::class, "cart"]);
    Route::post("/checkout", [TransactionController::class, "checkout"]);
});
Route::get("/product-page", [ProductController::class, "index"]);
