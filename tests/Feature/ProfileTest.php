<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ProfileTest extends TestCase {
    public function test_Upload(): void {
        Storage::fake('local');
        $response = $this->post('profile', [
            'photo' => $photo = UploadedFile::fake()->image('avatar.jpg')
        ]);
        Storage::disk('local')->assertExists("profiles/{$photo->hashName()}");
        $response->assertRedirect('profile');
    }
}
