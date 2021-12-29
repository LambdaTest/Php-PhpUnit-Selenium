<?php 

require 'lib/globals.php';
require_once('vendor/autoload.php');

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
use PHPUnit\Framework\Assert;

class LambdaTestParallel extends PHPUnit\Framework\TestCase {

protected static $driver;
public static $status='failed';

public function setupLambdatest($bName, $VName, $osName)
        {        
		$url = "https://". $GLOBALS['LT_USERNAME'] .":" . $GLOBALS['LT_ACCESS_KEY'] ."@hub.lambdatest.com/wd/hub";
        
        $capabilities = array(
		"build" => "Sample PHPUnit Build",
		"name" => $bName."-".$VName."-".$osName,
		"platform" => $osName,
		"browserName" => $bName,
		"version" => $VName
     );	
		
		self::$driver = RemoteWebDriver::create($url, $capabilities); 		
		
       }	

	public function additionProvider()
	    {
		return [
		    ['Chrome', 'latest', 'Windows 10'],
            ['Firefox', 'latest-2', 'Windows 7'],
		    ['Chrome', 'latest-1', 'macOS High Sierra'],
		    ['MicrosoftEdge', 'latest', 'Windows 10'],
		];
	    }


	/**
         * @dataProvider additionProvider
     	*/
	public function testAdd($browser, $version, $os) {
		$this->setupLambdatest($browser, $version, $os);
		$itemName = 'Yey, Lets add it to list';
		try{
			self::$driver->get("https://lambdatest.github.io/sample-todo-app/");
			$element1 = self::$driver->findElement(WebDriverBy::name("li1"));
			$element1->click();
			
		    
			$element2 = self::$driver->findElement(WebDriverBy::name("li2"));
			$element2->click();
			
			$element3 = self::$driver->findElement(WebDriverBy::id("sampletodotext"));
			$element3->sendKeys($itemName);
			
			$element4 = self::$driver->findElement(WebDriverBy::id("addbutton"));			
			$element4->click();
			
			self::$driver->wait(10, 500)->until(function($driver) {
		   	$elements = $driver->findElements(WebDriverBy::cssSelector("[class='list-unstyled'] li:nth-child(6) span"));
		   	return count($elements) > 0;
			});
			$element5 = self::$driver->findElement(WebDriverBy::cssSelector("[class='list-unstyled'] li:nth-child(6) span"));
			$this->assertEquals($itemName, $element5->getText());
			self::$driver->executeScript("lambda-status=passed");	
       		}
	    
		catch(Exception $e){
		echo "ErrorIN ".$e->getTraceAsString();
		echo "Message: " .$e->getMessage();
		self::$driver->executeScript("lambda-status=failed");
		}
	}

	public function tearDown(): void{		
		self::$driver->quit();
		}

	}

?>

