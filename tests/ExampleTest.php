<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    public function testExample()
    {
        sleep(5);
        $this->assertEquals(2, 1+1);
    }

    public function test1Example()
    {
        sleep(5);
        $this->assertEquals(2, 1 + 1);
    }

    public function test2Example()
    {
        sleep(5);
        $this->assertEquals(2, 1 + 1);
    }

    public function test3Example()
    {
        sleep(5);
        $this->assertEquals(2, 1 + 1);
    }

    public function test4Example()
    {
        sleep(5);
        $this->assertEquals(2, 1 + 1);
    }

    public function test5Example()
    {
        sleep(5);
        $this->assertEquals(2, 1 + 1);
    }

    public function test6Example()
    {
        sleep(5);
        $this->assertEquals(2, 1 + 1);
    }

    public function testTrue()
    {
        sleep(5);
        $this->assertTrue(!false);
    }
}
