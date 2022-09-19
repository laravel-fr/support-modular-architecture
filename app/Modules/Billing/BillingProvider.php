<?php

namespace App\Modules\Billing;

use Illuminate\Support\ServiceProvider;
use Illuminate\Console\Scheduling\Schedule;
use App\Modules\Billing\Commands\UpdateBillingCommand;

class BillingProvider extends ServiceProvider
{
    public function boot()
    {
        $this->bootCommands();
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config.php', 'command',
        );
    }

    protected function bootCommands(): void
    {
        $this->commands([
            UpdateBillingCommand::class,
        ]);

        $this->callAfterResolving(Schedule::class, function (Schedule $schedule) {
            $schedule
                ->command(UpdateBillingCommand::class)
                ->everyMinute();
        });
    }
}
