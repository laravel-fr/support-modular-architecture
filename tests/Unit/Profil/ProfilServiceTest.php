<?php

namespace Tests\Unit\Profil;

use Tests\TestCase;
use App\Modules\Profil\Services\ProfilService;

class ProfilServiceTest extends TestCase
{
    /**
     * @test
     */
    public function bar_always_return_true()
    {
        $profilService = app(ProfilService::class);

        $this->assertFalse($profilService->bar());
    }
}
