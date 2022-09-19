<?php

namespace Tests\Unit\Billing;

use Tests\TestCase;

class UpdateBillingCommandTest extends TestCase
{
    /**
     * @test
     */
    public function update_billing_return_success()
    {
        $this
            ->artisan('billing:update-billing')
            ->assertExitCode(0);
    }
}
