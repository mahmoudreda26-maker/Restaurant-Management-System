<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'login'])
    ->name('login');

Route::get('/login', [AuthController::class, 'login'])
    ->name('login');

Route::post('/login', [AuthController::class, 'submitLogin'])
    ->name('login.submit');

Route::middleware('auth')->group(function () {

    Route::view('/dashboard/admin', 'pages.dashboards.admin')
        ->name('pages.dashboard.admin');

    Route::view('/dashboard/waiter', 'pages.dashboards.waiter')
        ->name('pages.dashboard.waiter');

    Route::view('/dashboard/cashier', 'pages.dashboards.cashier')
        ->name('pages.dashboard.cashier');

    Route::view('/dashboard/kitchen', 'pages.dashboards.kitchen')
        ->name('pages.dashboard.kitchen');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');
});