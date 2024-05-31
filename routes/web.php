<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpendingController;

Route::get('/', [SpendingController::class, 'index']);
Route::post('/store', [SpendingController::class, 'store']);
