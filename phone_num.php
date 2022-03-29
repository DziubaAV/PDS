<?php
require_once('BD\BDcnx.php');
if(!$dbcnx)
  exit("<P>Error connect</P>" );
$query = "INSERT INTO  num_tel VALUES (NULL,'".$_POST['phone_num']."')";
$adr = mysqli_query($dbcnx,$query);
if(!$adr){
    exit("$query");
}

header("location: /");