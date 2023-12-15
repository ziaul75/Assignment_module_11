<?php

// routes/web.php

use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/dashboard', [ProductController::class, 'dashboard']);
Route::get('/transactions', [ProductController::class, 'transactions']);

