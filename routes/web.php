<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpendingController;

Route::get('/', [SpendingController::class, 'index'])->name('index');
Route::get('/search', [SpendingController::class, 'search'])->name('search');;
Route::post('/store', [SpendingController::class, 'store'])->name('store');;
Route::get('/{id}', [SpendingController::class, 'costSort'])->name('costSort');;
Route::get('/{id}/delete', [SpendingController::class, 'delete'])->name('delete');;
