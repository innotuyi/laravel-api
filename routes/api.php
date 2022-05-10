<?php

use App\Http\Controllers\BuyerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('buyers', BuyerController::class, ['only'=>['index', 'show']]);
Route::resource('categories', CategoryController::class, ['except'=>['create', 'edit']]);
Route::resource('products', ProductController::class, ['only'=>['index', 'show']]);
Route::resource('sellers', SellerController::class, ['only'=>['index', 'show']]);
Route::resource('transactions', TransactionController::class, ['only'=>['index', 'show']]);
Route::resource('users', UserController::class, ['except'=>['create', 'edit']]);
