<?php
// tests/GreetingTest.php
use PHPUnit\Framework\TestCase;
use App\Greeting;

class GreetingTest extends TestCase {
    public function testGenerateDefaultGreeting() {
        $this->assertEquals("Hello, World!", Greeting::generate());
    }

    public function testGenerateSpecificGreeting() {
        $this->assertEquals("Hello, Gemini!", Greeting::generate('Gemini'));
    }

    public function testHandlesEmptyInput() {
        $this->assertEquals("Hello, World!", Greeting::generate(''));
    }
}