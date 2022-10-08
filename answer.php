<?php require_once("template/top.php");?>

<!-- Контакты -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
     <div class="tcontent"> 
      <div class="otstup">
        <h2>Задайте нам вопрос и мы обязательно на него ответим!</h2>

            <div class="container">
              <form  method="post" action="qustion.php">
                <div class="row">
                  <div class="col-25">
                    <label for="fname">Имя</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="fname" name="name" placeholder="Имя..">
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="email">Почтовый адрес</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="lname" name="email" placeholder="Почта..">
                  </div>
                </div>
                  <div class="row">
                  <div class="col-25">
                    <label for="subject">Вопрос</label>
                  </div>
                  <div class="col-75">
                    <textarea id="subject" name="qustion" placeholder="Напишите что-нибудь.." style="height:200px"></textarea>
                  </div>
                </div>
                <div class="row">
                  <input type="submit" value="Отправить">
                </div>
              </form>
            </div>

          </div>
            </div>
              </main>
                </div>

<?php require_once("template/top.php");?>
<?php require_once("template/bottom.php");?>