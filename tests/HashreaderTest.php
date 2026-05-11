<?php
/**
 * Tests for HashReader
 */

use PHPUnit\Framework\TestCase;
use Hashreader\Hashreader;

class HashreaderTest extends TestCase {
    private Hashreader $instance;

    protected function setUp(): void {
        $this->instance = new Hashreader(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Hashreader::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
