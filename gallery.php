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
?>
        <div class="albumtop"> 
        <header class="heading"><?php echo $myrow['name'];?></header>
        </div>
<?php
        
        $resultpic = mysqli_query($dbcnx,"SELECT * FROM `images` WHERE catalog_id=".$myrow['id']);
        while($mypic = mysqli_fetch_assoc($resultpic))
        {
?>
        <a target="_blank" href="/layout/img/<?php echo $mypic['image'];?>">
        <img src="/layout/img/<?php echo $mypic['image'];?>" alt="<?php echo $mypic['name'];?>"></a>
<?php
         }
        }?>



</div>
      </div>
    </div>
  </main>
</div>


<?php require_once("template/top.php");?>
<?php require_once("template/bottom.php");?>