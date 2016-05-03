<?php
session_start();

require_once("lib/nusoap.php");
$client = new 
nusoap_client ("http://topwebservice.azurewebsites.net/PHPMailer/examples/service.php?wsdl",true);

$setaddParams = array(
	'a'=>$_POST["location"],
    'b'=>$_POST["party"],
    'c'=>$_POST["dress"],
    'd'=>$_POST["other"]
	);
$getAdd = $client->call("add",$setaddParams);

$_SESSION["sum"] = $getAdd;

?>
<META HTTP-EQUIV="Refresh" CONTENT="0;URL= main.php">