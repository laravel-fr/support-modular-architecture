<?php

use App\Modules\User\Controllers\ {
    UserController,
    UpdateUserController,
};

Route::prefix('user')
    ->as('user::')
    ->group(function () {
        Route::get('home', UserController::class)->name('home');
        Route::post('update', UpdateUserController::class)->name('update');
    });
