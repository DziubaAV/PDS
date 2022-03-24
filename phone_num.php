<?php
$dblocation="localhost";
$dbuser="root";
$dbpasswd="";
$dbname="pds";
$dbcnx = mysqli_connect($dblocation,$dbuser,$dbpasswd, $dbname);
if(!$dbcnx)
  exit("<P>Error connect</P>" );
$query = "INSERT INTO  num_tel VALUES (NULL,'".$_POST['phone_num']."')";
$adr = mysqli_query($dbcnx,$query);
if(!$adr){
    exit("$query");
}

header("location: /");