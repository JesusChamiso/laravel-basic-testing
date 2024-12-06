<?php

namespace Tests\Feature\Models;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase {
    use RefreshDatabase;
    public function test_user(): void {
        User::factory()->create([
            'email' => 'j@admin.com',
        ]);
        $this->assertDatabaseHas('users', [
            'email' => 'j@admin.com',
        ]);
    }
}
