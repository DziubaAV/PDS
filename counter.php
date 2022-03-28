<?php 
$file = file("counter.txt");
$count = implode("", $file);
$count++;
$myfile = fopen("counter.txt","w");
fputs($myfile,$count);
fclose($myfile);
?>
<span>Просмотров: <?=$count ?></span> // вывод счетчика