<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionDetailController;

Route::get('/', function () {
    return view('welcome');
});

// Product
Route::get('/products', [ProductController::class, 'index']);
Route::get('/create-product', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);

// Supplier
Route::get('/suppliers', [SupplierController::class, 'index']);
Route::post('/suppliers', [SupplierController::class, 'store']);
Route::get('/suppliers/{id}', [SupplierController::class, 'show']);
Route::put('/suppliers/{id}', [SupplierController::class, 'update']);
Route::delete('/suppliers/{id}', [SupplierController::class, 'destroy']);

// Transaction
Route::get('/transaction', [TransactionController::class, 'index']);
Route::get('/create-transaction', [TransactionController::class, 'create']);
Route::post('/transaction', [TransactionController::class, 'store']);
Route::get('/transaction/{id}', [TransactionController::class, 'show']);
Route::get('/edit-transaction/{id}', [TransactionController::class, 'edit']);
Route::put('/transaction/{id}', [TransactionController::class, 'update']);
Route::delete('/transaction/{id}', [TransactionController::class, 'destroy']);

// Transaction Detail
Route::get('/transaction-detail', [TransactionDetailController::class, 'index']);
Route::get('/create-transaction-detail', [TransactionDetailController::class, 'create']);
Route::post('/transaction-detail', [TransactionDetailController::class, 'store']);
Route::get('/transaction-detail/{id}', [TransactionDetailController::class, 'show']);
Route::get('/edit-transaction-detail/{id}', [TransactionDetailController::class, 'edit']);
Route::put('/transaction-detail/{id}', [TransactionDetailController::class, 'update']);
Route::delete('/transaction-detail/{id}', [TransactionDetailController::class, 'destroy']);