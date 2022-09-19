<?php

namespace App\Modules\Cart;

use Illuminate\Support\ServiceProvider;

class CartProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config.php', 'cart',
        );
    }
}
