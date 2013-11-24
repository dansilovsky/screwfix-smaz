<?php

namespace Screwfix;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-07-11 at 23:02:59.
 */
class SysNoteFilterTest extends \UnitTestCase {

	/**
	 * @var NoteFilter
	 */
	protected $object;


	protected $array = array (
		'2012-02-14' => array (
			0 => 'Note 1',
		),
		'2012-04-02' => array (
			0 => 'Note 2',
			1 => 'Note 3',
		),
	);

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{

		$this->object = new SysNoteFilter($this->array);
	}

	/**
	 * @covers Screwfix\NoteFilter::day
	 */
	public function testDayNoteFound()
	{
		$this->assertSame( array (0 => 'Note 2', 1 => 'Note 3'), $this->object->day('2012-04-02'));
	}

	/**
	 * @covers Screwfix\NoteFilter::day
	 */
	public function testDayNoteNotFound()
	{
		$this->assertSame( null, $this->object->day('2012-07-06'));
	}

}
