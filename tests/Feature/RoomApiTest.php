<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoomApiTest extends TestCase
{

    use RefreshDatabase;

    /**
     * Test to check if the rooms API returns a 200 status code.
     */
    public function test_rooms_api_returns_200(): void
    {
        $response = $this->get('/api/rooms');

        $response->assertStatus(200);
    }

    /**
     * Test to check if the rooms API returns a JSON response.
     */
    public function test_rooms_api_returns_json(): void
    {
        $response = $this->get('/api/rooms');

        $response->assertHeader('Content-Type', 'application/json');
    }

}
