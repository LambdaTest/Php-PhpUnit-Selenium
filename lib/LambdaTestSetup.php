<?php

require 'lib/globals.php';
require_once('vendor/autoload.php');

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
use PHPUnit\Framework\Assert;

class LambdaTestSetup extends PHPUnit\Framework\TestCase{
    protected static $driver;

    public function setUp(): void
    {        
        
		$url = "https://". $GLOBALS['LT_USERNAME'] .":" . $GLOBALS['LT_ACCESS_KEY'] ."@hub.lambdatest.com/wd/hub";

	$capabilities = array(
		"build" => "Sample PHPUnit Build",
		"name" => "Sample PHPUnit Test",
		"platform" => "Windows 10",
		"browserName" => "Chrome",
		"version" => "latest"
     );	
		
		self::$driver = RemoteWebDriver::create($url, $capabilities); 		
		
    }
	
	public  function tearDown(): void{
		self::$driver->quit();
	}
}
?>
