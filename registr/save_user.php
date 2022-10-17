<?php
   if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } // если он пустой, то уничтожаем переменную
   if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} } // если он пустой, то уничтожаем переменную
   if (empty($login) or empty($password)) // Проверяет, пуста ли переменная
    
   {exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");}

   $login = stripslashes($login); // Удаляет экранирование символов
   $login = htmlspecialchars($login); // Преобразует специальные символы в HTML-сущности
   $password = stripslashes($password); // Удаляет экранирование символов
   $password = htmlspecialchars($password); // Преобразует специальные символы в HTML-сущности

   $login = trim($login); // Удаляет пробелы (или другие символы) из начала и конца строки
   $password = trim($password); // Удаляет пробелы (или другие символы) из начала и конца строки
   
   $password = md5($password); // Возвращает MD5-хеш строки


   include ("bd.php"); // Подключаемся к БД
   $result = mysqli_query ($db, "SELECT id FROM users WHERE login='$login'");

   $myrow = mysqli_fetch_array($result);
   if (!empty($myrow['id'])) {
   exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");}

   $result2 = mysqli_query ($db, "INSERT INTO users (login,password) VALUES('$login','$password')"); // Проверяем, есть ли ошибки
   if ($result2=='TRUE') {
   echo "Вы успешно зарегистрированы! Теперь вы можете оставить свой вопрос.";
   }
   else { echo "Ошибка! Вы не зарегистрированы.";}
?>