<?php
/**
 * Tests for BytecodeLayer
 */

use PHPUnit\Framework\TestCase;
use Bytecodelayer\Bytecodelayer;

class BytecodelayerTest extends TestCase {
    private Bytecodelayer $instance;

    protected function setUp(): void {
        $this->instance = new Bytecodelayer(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Bytecodelayer::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
