<?php require_once("template/top.php");?>

<!-- VIDEO -->

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="content"> 
      <div id="gallery">
        <div class="albumtop">
          <div id="videoPlayer">
            <video id="video" src="/layout/video/1.mp4"></video>
            <div id="controls">
              <div class="video-track">
                  <div class="timeline"></div>
              </div>
              <div class="buttons">
                  <button class="play">Играть</button>
                  <button class="pause">Пауза</button>
                  <button class="rewind">Назад</button>
                  <button class="forward">Вперед</button>
              </div>
          </div>
             </div>
              </div>
<script src="/layout/js/videoJS.js"></script>

      </div>
    </div>
  </main>
</div>

<?php require_once("template/top.php");?>
<?php require_once("template/bottom.php");?>