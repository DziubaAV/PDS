<?php require_once("template/top.php");?>
<!-- ФОТОГАЛЕРЕЯ -->

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="content"> 
      <div id="gallery">

      <?php
        include "BD/BDcnx.php";
        $result = mysqli_query($dbcnx,"SELECT * FROM `catalogs`");
        
        while($myrow = mysqli_fetch_assoc($result))
        {
          echo $myrow['name'];
          echo "<br>";
        }
        
        ?>




        <figure>  
     
          <div class="albumtop">
          <header class="heading">Клуб тайландского бокса Sin Tyao Gym (Альбом 1)</header>
          <a target="_blank" href="/layout/img/1.jpg">
            <img src="/layout/img/1.jpg" alt="Картинка">
          </a>
          <a target="_blank" href="/layout/img/1.jpg">
            <img src="/layout/img/1.jpg" alt="Картинка">
          </a>
          <a target="_blank" href="/layout/img/1.jpg">
            <img src="/layout/img/1.jpg" alt="Картинка">
          </a>
          <a target="_blank" href="/layout/img/1.jpg">
            <img src="/layout/img/1.jpg" alt="Картинка">
          </a>
          <a target="_blank" href="/layout/img/1.jpg">
            <img src="/layout/img/1.jpg" alt="Картинка">
          </a>
          </div>

          <div class="albumtop">
          <header class="heading">Клуб тайландского бокса Sin Tyao Gym (Альбом 2)</header>
          <a target="_blank" href="/layout/img/2.jpg">
            <img src="/layout/img/2.jpg" alt="Картинка">
          </a>
          <a target="_blank" href="/layout/img/2.jpg">
            <img src="/layout/img/2.jpg" alt="Картинка">
          </a>
          <a target="_blank" href="/layout/img/2.jpg">
            <img src="/layout/img/2.jpg" alt="Картинка">
          </a>
          <a target="_blank" href="/layout/img/2.jpg">
            <img src="/layout/img/2.jpg" alt="Картинка">
          </a>
          <a target="_blank" href="/layout/img/2.jpg">
            <img src="/layout/img/2.jpg" alt="Картинка">
          </a>
          </div>

        </figure>
      </div>
    </div>
  </main>
</div>


<?php require_once("template/top.php");?>
<?php require_once("template/bottom.php");?>