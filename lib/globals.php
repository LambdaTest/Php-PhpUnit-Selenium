<?php 

$config_file = getenv('CONFIG_FILE');
if(!$config_file) $config_file = 'config/single.conf.json';
$GLOBALS['CONFIG'] = json_decode(file_get_contents($config_file), true);

$GLOBALS['LT_USERNAME'] = getenv('LT_USERNAME');
if(!$GLOBALS['LT_USERNAME']) $GLOBALS['LT_USERNAME'] = "YOUR LAMBDATEST USERNAME";

$GLOBALS['LT_APPKEY'] = getenv('LT_APPKEY');
if(!$GLOBALS['LT_APPKEY']) $GLOBALS['LT_APPKEY'] = "YOUR LAMBDATEST ACCESSKEY";

$GLOBALS['LT_BROWSER'] = getenv('LT_BROWSER');
if(!$GLOBALS['LT_BROWSER']) $GLOBALS['LT_BROWSER'] = $GLOBALS['CONFIG']['environments']["browserName"];

$GLOBALS['LT_BROWSER_VERSION'] = getenv('LT_BROWSER_VERSION');
if(!$GLOBALS['LT_BROWSER_VERSION']) $GLOBALS['LT_BROWSER_VERSION'] = $GLOBALS['CONFIG']['environments']["version"];

$GLOBALS['LT_OPERATING_SYSTEM'] = getenv('LT_OPERATING_SYSTEM');
if(!$GLOBALS['LT_OPERATING_SYSTEM']) $GLOBALS['LT_OPERATING_SYSTEM'] = $GLOBALS['CONFIG']['environments']["platform"];


?>
