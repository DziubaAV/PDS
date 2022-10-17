<?php
    session_start();//  вся процедура работает на сессиях.
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} } //если он пустой, то уничтожаем переменную
    
    if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }

    $login = stripslashes($login); // Удаляет экранирование символов
    $login = htmlspecialchars($login); // Преобразует специальные символы в HTML-сущности
    $password = stripslashes($password); // Удаляет экранирование символов
    $password = htmlspecialchars($password); // Преобразует специальные символы в HTML-сущности
    
    $login = trim($login); // Удаляет пробелы (или другие символы) из начала и конца строки
    $password = trim($password); // Удаляет пробелы (или другие символы) из начала и конца строки

    include ("registr\bd.php"); // Подключаемся к БД
 
    $result = mysqli_query($db, "SELECT * FROM users WHERE login='$login'"); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysqli_fetch_array($result);
    
    if (empty($myrow['password']))
    { exit ("Извините, введённый вами login или пароль неверный.");} //если пользователя с введенным логином не существует
    
    //если существует, то сверяем пароли
    else { 
    if ($myrow['password']==$password) { //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];
    echo "Вы успешно вошли на сайт!";
    }
    else { //если пароли не сошлись
    exit ("Извините, введённый вами Логин или пароль неверный.");
    }
    }

?>