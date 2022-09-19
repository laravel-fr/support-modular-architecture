<?php

namespace Tests\Unit\User;

use Tests\TestCase;
use App\Modules\User\Services\UserService;

class UserServiceTest extends TestCase
{
    /**
     * @test
     */
    public function foo_always_return_true()
    {
        $userService = app(UserService::class);

        $this->assertTrue($userService->foo());
    }
}
