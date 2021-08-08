<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactControlerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testformView()
    {
        $response = $this->get('/contacts');

        $response->assertStatus(200);
    }
}
