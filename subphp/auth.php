<?php

$getUser = $_POST["username"];
$getPass = $_POST["password"];

echo $getUser." ".$getPass;

?>


<input type = "text" name="data" value="<?php echo $getUser; ?>" >

<META HTTP-EQUIV="Refresh" CONTENT="0;URL=http://localhost:8888/webmerry/main.php">
