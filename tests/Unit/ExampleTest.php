<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
        // $this->assertSee('A title');
    }

    public function testSomeValueIsFalse()
    {
		$this->assertFalse(false);
    }

    public function testUserFullNameIsDannyAvery()
    {
    	$fulName = "Danny Avery";
    	$this->assertEquals("Danny Avery", $fulName);
    }
}
