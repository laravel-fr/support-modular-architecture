<?php

namespace App\Modules\Profil;

use App\Modules\Profil\Models\Profil;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Auth\Access\Gate;
use App\Modules\Profil\Policies\ProfilPolicy;

class ProfilProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }

    public function register()
    {
        $this->registerPolicies();
    }

    protected function registerPolicies(): void
    {
        app(Gate::class)
            ->policy(Profil::class, ProfilPolicy::class);
    }
}
