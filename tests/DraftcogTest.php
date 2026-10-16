<?php
/**
 * Tests for DraftCog
 */

use PHPUnit\Framework\TestCase;
use Draftcog\Draftcog;

class DraftcogTest extends TestCase {
    private Draftcog $instance;

    protected function setUp(): void {
        $this->instance = new Draftcog(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Draftcog::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
