<?php
namespace Tests\Unit;

use \PHPUnit\Framework\TestCase as PHPUnitTest;

class RequestTest extends PHPUnitTest {
	public function testCamelCase() {
    $request = new \Model\Request();
		$this->assertEquals('RequestUri',$request->toCamelCase('REQUEST_URI'));
	}

  public function testcamelCaseMultiple() {
    $request = new \Model\Request();
    $this->assertEquals('RequestUriTest123',$request->toCamelCase('REQUEST_URI_TEST_123'));

  }
}
