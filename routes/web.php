<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpendingController;
use App\Http\Controllers\Auth\RegisterUserController;

Route::get('/', [SpendingController::class, 'index'])->name('index');
Route::get('/register', [RegisterUserController::class, 'index'])->name('index');
Route::post('/register', [RegisterUserController::class, 'store'])->name('register');
Route::get('/search', [SpendingController::class, 'search'])->name('search');
Route::post('/store', [SpendingController::class, 'store'])->name('store');
Route::get('/{filter}', [SpendingController::class, 'sort'])->name('sort');
Route::delete('/{id}/delete', [SpendingController::class, 'delete'])->name('delete');

