<?php

class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(1+1,2);
  	}
	public function testTwoPlusTwo() {
		$this->assertEquals(2+2,4);
  	}
	public function testThreePlusThree() {
		$this->assertEquals(3+3,5);
  	}
}

?>
