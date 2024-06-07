<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpendingController;

Route::get('/', [SpendingController::class, 'index']);
Route::post('/store', [SpendingController::class, 'store']);
Route::get('/search', [SpendingController::class, 'search']);
Route::get('/{id}', [SpendingController::class, 'costSort']);
Route::get('/{id}/delete', [SpendingController::class, 'delete']);
