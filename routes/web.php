<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Models\Transaction;
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
    Route::post("/checkout", [UserController::class, "checkout"])->name('product.checkout');
    Route::post("/point", [MemberController::class], 'usepoint')->name('usepoint');
    Route::get("/product-page", [ProductController::class, "index"]);
    Route::get("/transaction", [TransactionController::class, "index"]);
    Route::get("/transaction/detail/{transactionid}", [TransactionController::class, "detail"])->name('public.detailtransaction');
    Route::get("/staff/brand", [BrandController::class, "index"]);
    Route::get('/owner/member', [UserController::class, "displayMember"]);
});

