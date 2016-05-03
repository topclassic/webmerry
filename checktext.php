<?php
session_start();

require_once("lib/nusoap.php");
$client = new 
nusoap_client ("http://topwebservice.azurewebsites.net/PHPMailer/examples/service.php?wsdl",true);

$checktextParams = array(
	'strFirst'=>"123455",
    'strSecond'=>"1234"
	);
$getText = $client->call("checktext",$checktextParams);

echo $getText;

$_SESSION["checktext"] = $getAdd;


?>
<!--<META HTTP-EQUIV="Refresh" CONTENT="0;URL= main.php">