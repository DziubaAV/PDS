<?php require_once("Counter\сounter.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout\css\framework.css">
    <link rel="stylesheet" href="layout\css\layout.css">
    <link rel="stylesheet" href="layout\css\windows_modal.css">
    <link rel="stylesheet" href="layout\fontawesome-4.5.0.min.css">
    
    <title>SIN TYAO</title>

</head>
<body id="top">

<!-- Ряд 0, регистрация и авторизация -->
<div class="wrapper row0">
      <div id="topbar" class="hoc clear"> 
        
              <div class="fl_left">
          <ul class="nospace inline pushright">
            <li><i class="fa fa-phone"></i> +375 (29) 187-55-26</li>
            <li><i class="fa fa-envelope-o"></i> dz.artsiomi@gmail.com</li>
          </ul>
        </div>
        <div class="fl_right">
          <ul class="nospace inline pushright">
            <li><i class="fa fa-sign-in"></i> <a onclick="document.getElementById('login').style.display='block'" style="width:auto;" href="#">Aвторизоваться</a></li>
            <li><i class="fa fa-user"></i>    <a onclick="document.getElementById('registr').style.display='block'" style="width:auto;" href="#">Регистрация</a></li>
          </ul>
        </div>

      </div>
    </div>



    
<!-- Модальное окно авторизации -->
<div id="login" class="modal_modal">
<span onclick="document.getElementById('login').style.display='none'" class="modal_close" title="Close Modal">×</span>
 
<form class="modal_content" method="post" action="#">
  <div class="modal_container">
      <h1>Авторизаваться</h1>
      <p>Пожалуйста, заполните эту форму, чтобы войти в учетную запись.</p>
      <hr>

      <label><b>Имя</b></label>
      <input type="text" placeholder="Введите имя" name="login" required>

      <label><b>Пароль</b></label>
      <input type="password" placeholder="Введите пароль" name="password" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Запомнить меня
      </label>

      <div class="modal_clearfix">
        <button type="button" onclick="document.getElementById('login').style.display='none'" class="modal_cancelbtn">Отмена</button>
        <button type="submit" class="modal_signupbtn">Авторизоваться</button>
      </div>

    </div>
  </form>
</div>
    
<!-- Модальное окно регистрации -->

<div id="registr" class="modal_modal">
<span onclick="document.getElementById('registr').style.display='none'" class="modal_close" title="Close Modal">×</span>
  
<form class="modal_content" method="post" action="#">
  <div class="modal_container">
      <h1>Зарегистрироваться</h1>
      <p>Пожалуйста, заполните эту форму, чтобы создать учетную запись.</p>
      <hr>

      <label><b>Имя</b></label>
      <input type="text" placeholder="Введите имя" name="login" required>

      <label><b>Пароль</b></label>
      <input type="password" placeholder="Введите пароль" name="password" required>

      <!-- <label><b>Повторить пароль</b></label>
      <input type="password" placeholder="Повторить пароль" name="password" required>
       -->
      <div class="modal_clearfix">
        <button type="button" onclick="document.getElementById('registr').style.display='none'" class="modal_cancelbtn">Отмена</button>
        <button type="submit" class="modal_signupbtn">Зарегистрироваться</button>
      </div>

    </div>
  </form>
</div>

<!-- ______________________________________________________________________________________ -->
           <div class="wrapper row1">
        <header id="header" class="hoc clear">

          <!-- ЛОГО -->
          <div id="logo" class="fl_left">
            <h1><a href="/Index.php">SIN TYAO</a></h1>
          </div>

          <!-- Поиск -->
          <!-- <div id="search" class="fl_right">
            <form class="clear" method="post" action="#">
                <input type="search" value="" placeholder="Искать тут &hellip;">
                <button class="fa fa-search" type="submit" title="Поиск"></button>
            </form>
          </div> -->
          
        </header>
      </div>

      <!-- НАВИГАЦИЯ -->

      <div class="wrapper row2">
        <nav id="mainav" class="hoc clear"> 
          <ul class="clear">
            <li class="active"><a href="/Index.php">Главная</a></li>
            <li><a class="drop" href="#">Журнал</a>
              <ul>
                <li><a href="/gallery.php">Фотогалерея</a></li>
                <li><a href="/video.php">Видеогалерея</a></li>
                <!-- <li><a href="#">Разное 1</a></li>
                <li><a href="#">Разное 2</a></li>
                <li><a href="#">Разное 3</a></li> -->
              </ul>
            </li>
            <li><a class="drop" href="#">О нас</a>
              <ul>
                <li><a href="/history.php">История</a></li>
                <li><a href="/trainer.php">Тренерский состав</a>
                  <!-- <ul>
                    <li><a href="#">Тренер 1</a></li>
                    <li><a href="#">Тренер 2</a></li>
                    <li><a href="#">Тренер 3</a></li>
                  </ul> -->
                </li>
                <!-- <li><a href="#">Контакты</a></li> -->
              </ul>
            </li>
            <!-- <li><a class="drop" href="#">Услуги</a>
              <ul>
                <li><a href="#">Инд. тренировки</a></li>
                <li><a href="#">Груп. тренировки</a></li>
                <li><a href="#">Дополнительные услуги</a></li>
              </ul> -->
            <li><a href="/contact.php">Контакты</a></li>
            <li><a onclick="document.getElementById('subject').style.display='block'" style="width:auto;" href="#">Вопрос/ответ</a></li>
            <!-- <li><a href="admin\index.php">Статистика</a></li>
            <li><a href="#">Текст 4</a></li> -->
          </ul>
        </nav>
      </div>


      <!-- Вопрос/ответ -->

      <div id="subject" class="modal_modal">
  <span onclick="document.getElementById('subject').style.display='none'" class="modal_close" title="Close Modal">×</span>
  <form class="modal_content" method="post" action="qustion.php">
    <div class="modal_container">
      <h2>Задайте нам вопрос и мы обязательно на него ответим!</h2>
      <p>Пожалуйста, заполните эту форму, чтобы задать нам вопрос.</p>
      <hr>

      <label>Имя</label>
      <input type="text" name="name" placeholder="Введите имя" required>
              
      <label">Email</label>
      <input type="text" name="email" placeholder="Введите Email" required>
    
      <label><h2>Введите Ваш вопрос:</h2></label>
      <textarea name="qustion" placeholder="Введите вопрос" style="height:200px"></textarea>
      
      <div class="modal_clearfix">
        <button type="button" onclick="document.getElementById('subject').style.display='none'" class="modal_cancelbtn">Отмена</button>
        <button type="submit" class="modal_signupbtn">Отправить</button>
      </div>

    </div>
  </form>
</div>