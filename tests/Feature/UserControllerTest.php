<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase; // Use database transactions for testing

    /**
     * Test showing a user.
     *
     * @return void
     */
    public function testShowUser()
    {
        // Create a user
        $user = User::factory()->create();

        // Hit the show endpoint for the user
        $response = $this->get(route('users.show', ['user' => $user->id]));

        // Assert that the response is successful (status code 200)
        $response->assertStatus(200);

        // Assert that the response contains the user's name

    }
}
