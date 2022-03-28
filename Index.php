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
<form  method="post" action="/phone_num.php">
<div id="myModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h1>Оставьте номер телефона и мы Вам перезвоним:</h1>
    </div>
    <div class="modal-body">
      <form action="#">
        <label for="phone" class='color'><h2>Введите Ваш номер телефона:</h2></label>
        <input type="tel" id="phone" name="phone_num" placeholder="375 29 1234567" pattern="[0-9]{3} [0-9]{2} [0-9]{7}"><br><br>
             <div class="row">
          <input type="submit" value="Отправить">
        </div>
      </form>
    </div>
  </div>
</div>
</form>
<script src="layout/js/ModalWindow.js"></script>
<!-- Конец модального окна!!! -->

<?php require_once("template/top.php");?>
<?php require_once("template/bottom.php");?>
