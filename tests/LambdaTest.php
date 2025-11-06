<?php
    
require_once('vendor/autoload.php');

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
use PHPUnit\Framework\Assert;

    class LambdaTest extends LambdaTestSetup {

	public function testAdd() {
	try{		
		$itemName = 'Yey, Lets add it to list';
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
		   $elements = $driver->findElements(WebDriverBy::cssSelector("li:nth-child(6) span"));
		   return count($elements) > 0;
		});
			$element5 = self::$driver->findElement(WebDriverBy::cssSelector("li:nth-child(6) span"));
		$this->assertEquals($itemName, $element5->getText());
	       self::$driver->executeScript("lambda-status=passed");	
	}

	catch (Exception $e){
	self::$driver->executeScript("lambda-status=failed");
	}
       }
			
    }

?>

