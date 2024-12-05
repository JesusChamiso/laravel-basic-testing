<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase {

    public function test_email(): void {
        $result = validate_email('j@admin.com');
        $this->assertTrue($result);
    }
}
