<html>
<head>
<title>Web Service Test</title>
</head>

<body>

<?php

$getEmail = "email";
$getPass = "password";
$getKey = "SFSF";
$getPrice = "1555";

		require_once("lib/nusoap.php");
		$client = new 
		nusoap_client ("http://topwebservice.azurewebsites.net/webservice.php?wsdl",true);



		$params = array(
			'strName'=>"Chotipat Poowongthanarat",
			'strEmail'=>"topz.classic@gmail.com"
			);
		$data = $client->call("show",$params);
		echo $data;



//include("connection.php");

$query = "INSERT INTO `webmarry`(`email`, `password`,`key`, `price`) VALUES ('$getEmail','$getPass','$getKey','$getPrice');";
$result = mysql_query($query); //or die (mysql_error());

$resultAddStudent = mysql_query($query);


?>
</body>
</html>