<?php

use App\Modules\Cart\Controllers\CartController;

Route::prefix('cart')
    ->as('cart::')
    ->group(function () {
        Route::get('/', CartController::class)->name('home');
    });
