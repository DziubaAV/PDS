<?php require_once("template/top.php");?>
<!-- Таблица, оставить звонок -->
      <div class="wrapper bgded">
        <div id="pageintro" class="hoc clear"> 
          <article>
            <div class="overlay inspace-30 btmspace-30">
              <h2 class="heading">SIN TYAO</h2>
              <p>Старейший клуб восточных единоборств в Беларуси Sin Tyao.</p>
            </div>
            <footer>
              <ul class="nospace inline pushright">
                <li><a id="myBtn" class="btn" href="#">Оставить звонок</a></li>
              </ul>
            </footer>
          </article>
        </div>
      </div>

<!-- Начало модального окна!!! -->
<div id="myModal" class="registr_modal">
<span onclick="document.getElementById('myModal').style.display='none'" class="registr_close" title="Close Modal">×</span>

<form class="registr_modal-content" method="post" action="phone_num.php">
  <div class="registr_container">
    <h1>Оставьте номер телефона и мы Вам перезвоним:</h1>
    <p>Пожалуйста, заполните эту форму, чтобы оставить номер телефона.</p>
    <hr>

    <label for="phone"><h2>Введите Ваш номер телефона:</h2></label>
    <input type="tel" id="phone" name="phone_num" placeholder="375 29 1234567" pattern="[0-9]{3} [0-9]{2} [0-9]{7}" required>

      <div class="registr_clearfix">
        <button type="button" onclick="document.getElementById('myModal').style.display='none'" class="registr_cancelbtn">Отмена</button>
        <button type="submit" class="registr_signupbtn">ОК</button>
      </div>

  </div>
</form>
</div>

<script src="layout/js/ModalWindow.js"></script>
<!-- Конец модального окна!!! -->

<?php require_once("template/top.php");?>
<?php require_once("template/bottom.php");?>
