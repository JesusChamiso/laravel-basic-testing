<?php

namespace Tests\Unit\Helpers;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase {
    public function testEmail(): void {
        $result = Email::validate('j@admin.com');
        $this->assertTrue($result);
    }
}
