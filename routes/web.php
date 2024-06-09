<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpendingController;

Route::get('/', [SpendingController::class, 'index'])->name('index');
Route::get('/search', [SpendingController::class, 'search'])->name('search');
Route::post('/store', [SpendingController::class, 'store'])->name('store');
Route::get('/{filter}', [SpendingController::class, 'sort'])->name('sort');
Route::get('/{id}/delete', [SpendingController::class, 'delete'])->name('delete');
