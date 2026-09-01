<?php
/**
 * Tests for SolidityVaultMax
 */

use PHPUnit\Framework\TestCase;
use Solidityvaultmax\Solidityvaultmax;

class SolidityvaultmaxTest extends TestCase {
    private Solidityvaultmax $instance;

    protected function setUp(): void {
        $this->instance = new Solidityvaultmax(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solidityvaultmax::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
