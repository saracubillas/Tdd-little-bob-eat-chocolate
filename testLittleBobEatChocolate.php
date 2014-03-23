<?php


include 'littleBobEatChocolate.php';


use TDDKata\littleBobEatChocolate;

class littleBobeatChocolateTest extends \PHPUnit_Framework_TestCase
{

	private $chocolate;


	public function setUp()
	{
		$this->chocolate = new littleBobEatChocolate();
	}

	
	public function testlittleBobHasNoMoney()
	{
		$this->assertSame(0, $this->chocolate->getNumberofChocolates(0,8,1));
	}

	public function testlittleBobHasNoEnoughtMoney()
	{
		$this->assertSame(0, $this->chocolate->getNumberofChocolates(3,8,2));	
	}

	public function testLittleBobcanBuy()
	{
		$this->assertSame(1, $this->chocolate->getNumberofChocolates(8, 8,3));	
	}

	public function testGetFreeChocolatesWithWrappers()
	{
		$this->assertSame(6, $this->chocolate->getNumberofChocolates(10, 2, 5));
	}

	public function testGetFreeChocolatesWithFreeChocolatesWrappers()
	{
		$this->assertSame(5, $this->chocolate->getNumberofChocolates(6, 2, 2));
	}


} 


