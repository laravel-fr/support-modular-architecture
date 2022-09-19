<?php

use App\Modules\Profil\Controllers\ProfilController;

Route::as('profil::')
    ->resource('profil', ProfilController::class)
    ->only('index', 'store');
