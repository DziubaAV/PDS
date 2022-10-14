<?php

// Указываем кодировку, в которой будет получена информация из базы
@mysqli_query ($dbcnx, 'set character_set_results = "utf8"');

$res = mysqli_query($dbcnx, "SELECT `views`, `hosts` FROM `visits` WHERE `date`='$date'");
$row = mysqli_fetch_assoc($res);

echo '<p>Уникальных посетителей: ' . $row['hosts'] . '<br />';
echo 'Просмотров: ' . $row['views'] . '</p>';