<?php

namespace Tests\Feature\User;

use Tests\TestCase;

class UpdateUserTest extends TestCase
{
    /**
     * @test
     */
    public function guest_can_update_user()
    {
        $response = $this->post('user/update');

        $response->assertSuccessful();
    }
}
