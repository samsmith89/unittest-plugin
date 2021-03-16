<?php

/**
 * Class SampleTest
 *
 * @package Tester
 */

//require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR .'autoload.php';

use PHPUnit\Framework\TestCase;
use Test\Add;
/**
 * Sample test case.
 */
class AddTest extends TestCase {

	/**
	 * A single example test.
	 */
	public function testAdd() {
		// Replace this with some actual testing code.
		$this->assertEquals(
			15,
			Add::total([0,2,5,8]),
			'When summing the total should equal 15'
		);
	}
}
