<?php
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function setUp()
    {
        $this->greeter = new \MyGreeter\Client();
    }

    public function test_getInstance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }

    public function test_getGreeting()
    {
        \Rezzza\TimeTraveler::enable();
        \Rezzza\TimeTraveler::moveTo('2011-06-10 11:00:00');
        var_dump($this->greeter->getGreeting());
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
    }
}