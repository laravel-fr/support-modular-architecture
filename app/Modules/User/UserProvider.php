<?php

namespace App\Modules\User;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class UserProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');

        $this->loadJsonTranslationsFrom(__DIR__ . '/langs', 'user');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config.php', 'user',
        );
    }
}
