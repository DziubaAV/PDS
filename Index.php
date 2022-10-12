<?php require_once("template/top.php");?>
<!-- Таблица, оставить звонок -->
      <div class="wrapper bgded">
        <div id="pageintro" class="hoc clear"> 
          <article>
            <div class="overlay inspace-30 btmspace-30">
              <h2 class="heading">SIN TYAO</h2>
              <p>Старейший клуб восточных единоборств в Беларуси Sin Tyao.</p>
            </div>
            
            <div>
            <ul class="nospace inline pushright">
              <li><a id="myBtn" class="btn" onclick="document.getElementById('myModal').style.display='block'" style="width:auto;" href="#">Оставить звонок</a></li>
              </ul>
            </div>
              
          </article>
        </div>
      </div>

<!-- Начало модального окна!!! -->
<div id="myModal" class="modal_modal">
<span onclick="document.getElementById('myModal').style.display='none'" class="modal_close" title="Close Modal">×</span>

<form class="modal_content" method="post" action="phone_num.php">
  <div class="modal_container">
    <h1>Оставьте номер телефона и мы Вам перезвоним:</h1>
    <p>Пожалуйста, заполните эту форму, чтобы оставить номер телефона.</p>
    <hr>

    <label for="phone"><h2>Введите Ваш номер телефона:</h2></label>
    <input type="tel" id="phone" name="phone_num" placeholder="375 29 1234567" pattern="[0-9]{3} [0-9]{2} [0-9]{7}" required>

      <div class="modal_clearfix">
        <button type="button" onclick="document.getElementById('myModal').style.display='none'" class="modal_cancelbtn">Отмена</button>
        <button type="submit" class="modal_signupbtn">Отправить</button>
      </div>

  </div>
</form>
</div>

<!-- Конец модального окна!!! -->

<?php require_once("template/top.php");?>
<?php require_once("template/bottom.php");?>
