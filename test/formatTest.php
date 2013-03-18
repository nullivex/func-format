<?php
require_once(dirname(__DIR__).'/test_common.php');
ld('/func/format');

class FuncFormatTest extends PHPUNIT_Framework_TestCase {

	public function testFormatBytes(){
		$this->assertEquals('1,000KB',format_bytes(1000000));
	}

	public function testFormatIP(){
		$this->assertEquals('001.002.003.004',format_ip('1.2.3.4',0,false));
	}

}
