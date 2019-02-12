<?php 

require'vendor/autoload.php';
require 'lib/globals.php';

class LambdaTestParallel extends PHPUnit\Framework\TestCase {

protected static $driver;
public static $status='failed';

public function setupLambdatest($bName, $VName, $osName)
        {        
		$url = "https://". $GLOBALS['LT_USERNAME'] .":" . $GLOBALS['LT_APPKEY'] ."@hub.lambdatest.com/wd/hub";
		$task_id = 0; 
                $CONFIG = $GLOBALS['CONFIG'];
		$desired_capabilities = new DesiredCapabilities();
		$desired_capabilities->setCapability('browserName',$bName);
		$desired_capabilities->setCapability('version', $VName);
		$desired_capabilities->setCapability('platform', $osName);
		$desired_capabilities->setCapability('name', "PHPUnitParallelTestSample");
		$desired_capabilities->setCapability('build', "ParallelTest-LambdaTestSampleApp");
		$desired_capabilities->setCapability('network', true);
		$desired_capabilities->setCapability('visual', true);
		$desired_capabilities->setCapability('screenshot', true);
 		$desired_capabilities->setCapability('console', true);		
		
		self::$driver = RemoteWebDriver::create($url, $desired_capabilities); 		
		
       }	



	public function additionProvider()
	    {
		return [
		    ['chrome', '61.0', 'WIN10'],
                    ['firefox', '56.0', 'WIN7'],
		    ['Chrome', '56.0', 'macOS High Sierra'],
		    ['MicrosoftEdge', '18.0', 'Windows 10'],
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
		echo "Error Message: ".$e->errorMessage();
		self::$driver->executeScript("lambda-status=failed");
		}
	}

	public static function tearDownAfterClass(){		
		self::$driver->quit();
		}

	}

?>

