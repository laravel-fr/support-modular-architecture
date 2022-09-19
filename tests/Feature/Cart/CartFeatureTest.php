<?php

namespace Tests\Feature\Cart;

use Tests\TestCase;

class CartFeature extends TestCase
{
    /**
     * @test
     */
    public function guest_can_access_cart()
    {
        $response = $this->get('cart');

        $response->assertSuccessful();
    }
}
