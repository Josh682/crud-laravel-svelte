<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('customers',[CustomerController::class, 'index']);
Route::get('/customers/create',[CustomerController::class, 'create']);
Route::post('customers', [CustomerController::class,'store']);  