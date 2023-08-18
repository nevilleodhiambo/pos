<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\PurchaseController;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::middleware('auth')->group( function() {
    Route::get('/home', [App\Http\Controllers\RecordController::class, 'index'])->name('index');
    Route::resource('records', RecordController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('sales', SaleController::class);
    Route::resource('stock', StockController::class);
    Route::resource('purchase', PurchaseController::class);
});

