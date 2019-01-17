<?php

require 'vendor/autoload.php';
require 'lib/globals.php';


class LambdaTestSetup extends PHPUnit\Framework\TestCase
{
    protected static $driver;

    public static function setUpBeforeClass()
    {        
        
		$url = "https://". $GLOBALS['LT_USERNAME'] .":" . $GLOBALS['LT_APPKEY'] ."@hub.lambdatest.com/wd/hub";
		$task_id = 0;     

		$desired_capabilities = new DesiredCapabilities();
		$desired_capabilities->setCapability('browserName',$GLOBALS['LT_BROWSER']);
		$desired_capabilities->setCapability('version', $GLOBALS['LT_BROWSER_VERSION']);
		$desired_capabilities->setCapability('platform', $GLOBALS['LT_OPERATING_SYSTEM']);
		$desired_capabilities->setCapability('name', "PHPUnitTestSample");
		$desired_capabilities->setCapability('build', "LambdaTestSampleApp");
		$desired_capabilities->setCapability('network', true);
		$desired_capabilities->setCapability('visual', true);		
		
		self::$driver = RemoteWebDriver::create($url, $desired_capabilities); 		
		
    }
	
	public static function tearDownAfterClass(){
		self::$driver->quit();
	}
}
?>
