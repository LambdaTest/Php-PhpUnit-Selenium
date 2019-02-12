<?php 

$config_file = getenv('CONFIG_FILE');
if(!$config_file) $config_file = 'config/single.conf.json';


$json_string= "[ { \"operatingSystem\" : \"win10\", \"browserName\" : \"Chrome\", \"browserVersion\" : \"64.0\", \"resolution\" : \"1024x768\" },{ \"operatingSystem\" : \"win10\", \"browserName\" : \"Chrome\", \"browserVersion\" : \"64.0\", \"resolution\" : \"1024x768\" }, { \"operatingSystem\" : \"win7\", \"browserName\" : \"Chrome\", \"browserVersion\" : \"59.0\", \"resolution\" : \"1024x768\" } ]";

$json_array  = json_decode($json_string, true);
$elementCount  = count($json_array);
//print($json_array);
print($elementCount);
?>
