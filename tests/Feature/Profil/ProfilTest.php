<?php

namespace Tests\Feature\Profil;

use Tests\TestCase;

class ProfilTest extends TestCase
{
    /**
     * @test
     */
    public function guest_can_access_profil()
    {
        $response = $this->get('profil');

        $response->assertSuccessful();
    }

    /**
     * @test
     */
    public function guest_cant_post_profil()
    {
        $response = $this->post('profil');

        $response->assertForbidden();
    }
}
