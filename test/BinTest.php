<?php
require_once 'PHPUnit/Framework.php';
class BinTest extends PHPUnit_Framework_TestCase {
	function setUp() {
		
	}
	function testIfCakeFileExists() {
		$this->assertFileExists('../bin/cake');
	}
	function testIfCanCreateAWelcomeController() {
		echo exec('php ../bin/cake controller welcome');
		$this->assertFileExists('../system/application/controllers/WelcomeController.php');
	}
	function tearDown() {
		rm_recursive(BASEPATH .'system/');
	}
}
?>