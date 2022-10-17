<!-- Подключение к базе данных -->
<?php
$dblocation="localhost";
$dbuser="root";
$dbpasswd="";
$dbname="pds";

$db = mysqli_connect($dblocation,$dbuser,$dbpasswd, $dbname) or die ("Невозможно подключиться к БД");