<?php
$server_name = "ap-cdbr-azure-southeast-b.cloudapp.net";
$user_name = "bcb9f048770522";
$password = "10cc678b";
$con = mysql_connect($server_name, $user_name, $password)
or die ('Server Error: ' . mysql_error());
//select database for use
$database_name = 'webmarry';
mysql_select_db($database_name) or die ('DB Error: Unable to select db');
mysql_query("SET NAMES 'utf8'");

?>