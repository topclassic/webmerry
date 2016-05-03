<?php

//$getEmail = $_POST["email"];
//$getPass = $_POST["password"];
//$getConfirm = $_POST["confirmpassword"];
//$getKey = $_POST["email"];
//$getPrice = $_POST["password"];

$getSpousalname = $_POST["spousalname"];
$getPass = $_POST["password"];
$getPass2 = $_POST["password2"];


require_once("lib/nusoap.php");
$client = new 
nusoap_client ("http://topwebservice.azurewebsites.net/PHPMailer/examples/service.php?wsdl",true);

$setkeyParams = array(
	'length'=>5
	);
$getKey = $client->call("setkey",$setkeyParams);

$checktextParams = array(
	'strFirst'=>$_POST["password"],
    'strSecond'=>$_POST["password2"]
	);
$getText = $client->call("checktext",$checktextParams);

if($getText == 2){
     echo "<meta http-equiv='refresh' content='0; url=createfail.php?action=success'>" ;
}else{

    include("connection.php");

    $query = "INSERT INTO `webmarry`(`spousalname`, `password`,`key`) VALUES ('$getSpousalname','$getPass','$getKey');";
    $result = mysql_query($query);

    if($result){
        mysql_query("COMMIT");
        echo "<meta http-equiv='refresh' content='0; url=index.php?action=success'>" ;
        //echo "(=Y";
    } else {
        mysql_query("ROLLBACK");
        echo "<meta http-equiv='refresh' content='0; url=index.php?action=error'>" ;
        //echo "(=N";
    }
}
?>
