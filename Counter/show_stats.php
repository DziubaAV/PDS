<?php

// Указываем кодировку, в которой будет получена информация из базы
@mysqli_query ($dbcnx, 'set character_set_results = "utf8"');

// Извлекаем статистику по текущей дате (переменная date попадает сюда из файла count.php, который, в свою очередь, подключается в каждом из 4 обычных файлов)
$res = mysqli_query($dbcnx, "SELECT `views`, `hosts` FROM `visits` WHERE `date`='$date'");
$row = mysqli_fetch_assoc($res);

echo '<p>Уникальных посетителей: ' . $row['hosts'] . '<br />';
echo 'Просмотров: ' . $row['views'] . '</p>';