<?php

use App\Http\Controllers\ProductsController;
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

Route::get('/', function () {
    return view('pages/product/index');
});

Route::get('product',[ProductsController::class,'index'])->name('product');


Route::get('order',[ProductsController::class,'create'])->name('order-index');
Route::get('order-create',[ProductsController::class,'store'])->name('order-create');
Route::post('order-store',[ProductsController::class,'store'])->name('order-store');

