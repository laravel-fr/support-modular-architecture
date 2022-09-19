<?php

namespace App\Modules\Billing\Commands;

use Illuminate\Console\Command;

class UpdateBillingCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'billing:update-billing';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update billing.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //

        return Command::SUCCESS;
    }
}
