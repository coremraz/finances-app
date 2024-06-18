<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpendingController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\LoginUserController;


//Auth
Route::get('/register', [RegisterUserController::class, 'index'])->name('register');
Route::post('/register', [RegisterUserController::class, 'store'])->name('register');
Route::get('/login', [LoginUserController::class, 'index'])->name('login');
Route::post('/login', [LoginUserController::class, 'store'])->name('login');
Route::get('/logout', [LoginUserController::class, 'destroy'])->name('logout');

Route::group(['middleware' => 'auth', 'can:update-spending, spending'], function () {
    Route::get('/', [SpendingController::class, 'index'])->name('index');
    //Spendings
    Route::post('/store', [SpendingController::class, 'store'])->name('store');
    Route::delete('/{spending}/delete', [SpendingController::class, 'delete'])->name('delete');
    Route::get('/search', [SpendingController::class, 'search'])->name('search');
    Route::get('/sort', [SpendingController::class, 'sort'])->name('sort');
});


