<?php

use App\Http\Controllers\BuyerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('buyers', BuyerController::class, ['only'=>['index', 'show']]);
Route::resource('categories', BuyerController::class, ['except'=>['create', 'edit']]);
Route::resource('products', BuyerController::class, ['only'=>['index', 'show']]);
Route::resource('sellers', BuyerController::class, ['only'=>['index', 'show']]);
Route::resource('transactions', BuyerController::class, ['only'=>['index', 'show']]);
Route::resource('users', BuyerController::class, ['except'=>['create', 'edit']]);
