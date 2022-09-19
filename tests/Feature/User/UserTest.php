<?php

namespace Tests\Feature\User;

use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * @test
     */
    public function guest_can_access_user()
    {
        $response = $this->get('user/home');

        $response->assertSuccessful();
    }
}
