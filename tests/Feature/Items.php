<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Items extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_items(): void
    {
        $response = $this->get('/items');

        $response->assertStatus(200);
    }

}
