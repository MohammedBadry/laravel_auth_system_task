<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserManagementTest extends TestCase
{
    //use WithoutMiddleware;
    public function test_admin_can_add_user()
    {
        $admin = User::where('id', 1)->first();
        $usersCount = count(User::all());
        $response = $this->actingAs($admin)->post('/users', [
            'name' => "FExpress",
            'first_name' => "Ahmed",
            'last_name' => "Badry",
            'email' => "abcdef@yahoo.com",
            'role' => "2",
            'password' => "123456789",
            'password_confirmation' => "123456789",
        ]);
        //$response->assertOk();
        $this->assertCount($usersCount+1, User::all());
    }
}
