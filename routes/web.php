<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\ProductController as ClientProductController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::middleware('auth')->group(function() {
    Route::get('/roles', [RoleController::class, 'index'])->name('admin.roles.index');

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
});

Route::get('/', [ClientProductController::class, 'index'])->name('client.products.index');

Route::get('product-detail/{id}', [ClientProductController::class, 'show'])->name('client.product.show');

Route::group(['prefix'=>'cart'], function(){
    Route::get('show-cart', [CartController::class, 'showCart'])->name('client.cart.showCart');
    Route::post('add-cart/{id}', [CartController::class, 'addCart'])->name('client.cart.addCart');
    Route::get('delete-cart/{id}', [CartController::class, 'deleteCart'])->name('client.cart.deleteCart');
    Route::post('buy-now/{id}', [CartController::class, 'buyNow'])->name('client.cart.buyNow');
});