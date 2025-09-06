
<?php
date_default_timezone_set('Pacific/Auckland');
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {
    public function testGreet() {
        $this->assertEquals("Hello, Alice!", greet("Alice"));
    }
}
