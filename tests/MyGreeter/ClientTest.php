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
        // \Rezzza\TimeTraveler::enable();
        // \Rezzza\TimeTraveler::moveTo('2011-06-10 11:00:00');
        Timecop::freeze(new DateTime("2017-01-01 00:00:00"));
        $this->assertTrue(
            $this->greeter->getGreeting() == "Good morning"
        );

        Timecop::freeze(new DateTime("2017-01-01 11:59:59"));
        $this->assertTrue(
            $this->greeter->getGreeting() == "Good morning"
        );

        Timecop::freeze(new DateTime("2017-01-01 12:00:00"));
        $this->assertTrue(
            $this->greeter->getGreeting() == "Good afternoon"
        );

        Timecop::freeze(new DateTime("2017-01-01 18:00:00"));
        $this->assertTrue(
            $this->greeter->getGreeting() == "Good evening"
        );

        Timecop::freeze(new DateTime("2017-01-01 23:59:59"));
        $this->assertTrue(
            $this->greeter->getGreeting() == "Good evening"
        );
    }
}