<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;

class UserManagementTest extends TestCase
{
    use WithFaker;

    public function test_admin_can_add_user()
    {
        $admin = User::where('id', 1)->first();
        $usersCount = count(User::all());

        $response = $this->actingAs($admin)->post('/users', [
            'name'                           => Str::random(10),
            'first_name'                     => $this->faker->firstname,
            'last_name'                      => $this->faker->lastname,
            'email'                          => $this->faker->email,
            'role'                           => "2",
            'password'                       => 'password',
            'password_confirmation'          => 'password',
            'activated'                      => true,
            'remember_token'                 => Str::random(10),
            ]);
        $this->assertCount($usersCount+1, User::all());
    }
}
