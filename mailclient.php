<?php

$getEmail = "email";

		require_once("lib/nusoap.php");
		$client = new 
		nusoap_client ("http://topwebservice.azurewebsites.net/PHPMailer/examples/service.php?wsdl",true);

		
        $setDesmail = array(
	       'desmail' => "topz.classic@gmail.com"
	    );

        $mail = $client->call("sendmail",setDesmail);

?>
<META HTTP-EQUIV="Refresh" CONTENT="0;URL=main.php">