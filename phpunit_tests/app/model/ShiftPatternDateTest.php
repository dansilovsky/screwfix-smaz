<?php

namespace Screwfix;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-06-30 at 12:09:48.
 */
class ShiftPatternDateTest extends \UnitTestCase {

	/**
	 * @var ShiftPatternDate
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new ShiftPatternDate;
		$this->object->setDate(1970, 1, 27); // tuesday, 4th week from beginnig, 0th week in shift pattern
	}

	/**
	 * @covers Screwfix\ShiftPatternDate::day
	 */
	public function testDay()
	{
		$this->assertSame(1, $this->object->day());
	}

	/**
	 * @covers Screwfix\ShiftPatternDate::week
	 */
	public function testWeek()
	{
		$this->assertSame(2, $this->object->week(3));
	}

	/**
	 * @covers Screwfix\ShiftPatternDate::week
	 * @expectedException Screwfix\ShiftPatternDateException
	 */
	public function testWeekTooEarlyDate()
	{
		$object = new ShiftPatternDate('1932-01-01');
		
		$object->week(3);
	}
	
	

	/**
	 * @covers Screwfix\ShiftPatternDate::set
	 * @expectedException \InvalidArgumentException
	 */
	public function testSetWithTooEarlyDatetime()
	{
		$this->object->set('1932-06-17');
	}

	/**
	 * @covers Screwfix\ShiftPatternDate::modify
	 * @expectedException \InvalidArgumentException
	 */
	public function testModifyTooEarlyDatetime()
	{
		$this->object->modify('1932-06-17');
	}

}