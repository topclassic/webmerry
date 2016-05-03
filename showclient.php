<?php

session_start();
$getUser = $_POST["username"];

require_once("lib/nusoap.php");
$client = new 
nusoap_client ("http://localhost:8888/PHPMailer/examples/testsendmail.php?wsdl",true);

$servername = "ap-cdbr-azure-southeast-b.cloudapp.net";
$username = "bcb9f048770522";
$password = "10cc678b";
$dbname = "webmarry";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM webmarry WHERE spousalname = '$getUser' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       echo $_SESSION["key"] = $row["key"];
    }
} else {
    echo "0 results";
}

$_SESSION["user"] = $getUser;
//echo $_SESSION["key"];
mysqli_close($conn);

?>
<META HTTP-EQUIV="Refresh" CONTENT="0;URL= main.php">
