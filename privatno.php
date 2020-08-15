<?php 
require_once 'konfiguracija.php';
if(!isset($_SESSION['autoriziran'])){
    header('location:index.php');
}
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spisak radnika</title>
    <link rel="stylesheet" href="assets/css/foundation.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <script type="text/javascript">
<!--
    function showImage(){
        document.getElementById('loadingImage').style.visibility="visible";
    }
    -->
    </script>
<body background-color:red;>
<div  class="card-user-button">
    <a style="position: fixed;" href="novi.php" class="hollow button">Dodaj radnika</a><br><br>
    <a style="position: fixed;" href="https://raw.githubusercontent.com/iivansic/hellopp21/master/era.jpg" target="_blank" class="hollow button">Era dijagram</a><br><br>
    <a style="position: fixed;" href="logout.php" class="hollow button">Logout</a><br><br>
</div>

<?php
// READ IZ CRUD
$izraz=$veza->prepare('select * from radnik');
$izraz->execute();
$rezultati=$izraz->fetchAll();
//elog($rezultati)
?>


<!-- User card example #1 -->
<div class="card-user-container">
  <?php
    foreach($rezultati as $red):

  ?>
  <!--card's image-->
  <div class="card-user-avatar">
    <img src=<?='"', $red->slika,'"'; ?> alt="" class="user-image">
  </div>
  <!--user info name, bio and location-->
  <div class="card-user-bio">
    <h4>Ime: <?=$red->ime; ?></h4>
    <h4>Prezime: <?=$red->prezime; ?></h4>
    <p>Radno mjesto: <?=$red->radnomjesto; ?></p>
    <p>Datum unosa radnika: <?=$red->datum; ?></p>
    <span class="location"><span class="location-icon fa fa-map-marker"></span><span class="location-text">Opis radnog mjesta: <?=$red->komentar; ?></span></span>
  </div>
  <!--card's follow button-->
  <div class="card-user-button">
    <a onclick="return  confirm('Dali ste sigurni da želite promjenit radnika? ')" class="hollow button" href="promjena.php?id=<?php echo $red->id ?>">Promjena</a>
    <a onclick="return  confirm('Dali ste sigurni da želite obrisat radnika?')" class="hollow button" href="brisanje.php?id=<?php echo $red->id ?>">Brisanje</a>
  </div>
  <?php
      endforeach
  ?>
</div>






<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>
