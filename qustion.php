<?php
require_once("config/config.php");
if(!$dbcnx)
  exit("<P>Error connect</P>" );
$query = "INSERT INTO  qustions VALUES (NULL,'".$_POST['name']."', '".$_POST['email']."', '".$_POST['qustion']."','new')";
$adr = mysqli_query($dbcnx,$query);
if(!$adr){
    exit("$query");
}

header("location: /");