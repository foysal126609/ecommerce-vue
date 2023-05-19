<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ColorController;
Use App\Http\Controllers\SizeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/details/{id}',[HomeController::class,'productDetails'])->name('details');
Route::post('/add-to-cart',[CartController::class,'addToCart'])->name('add-to-cart');
Route::get('/cart',[CartController::class,'showCart'])->name('cart');
Route::get('/cart-delete/{id}',[CartController::class,'cartDelete'])->name('cart-delete');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::group(['prefix' => 'admin'], function() {
        //    category controller
        Route::resource('/category', CategoryController::class,['names' => 'admin.category']);
        //    sub-category controller
        Route::resource('/sub-category', SubCategoryController::class,['names' => 'admin.sub-category']);
        //    Brand controller
        Route::resource('/brand', BrandController::class,['names' => 'admin.brand']);
        //    supplier controller
        Route::resource('/supplier', SupplierController::class,['names' => 'admin.supplier']);
        //    color controller
        Route::resource('/color', ColorController::class,['names' => 'admin.color']);
        //    size controller
        Route::resource('/size', SizeController::class,['names' => 'admin.size']);
        //    Product controller
        Route::resource('/product',ProductController::class,['names'=>'admin.product']);
    });

});
