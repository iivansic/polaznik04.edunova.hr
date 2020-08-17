<?php 
require_once 'konfiguracija.php';
if(!isset($_SESSION['autoriziran'])){
    header('location:index.php');
}

if(isset($_POST['ime'])){
  require_once 'konfiguracija.php';
  $izraz=$veza->prepare('insert into radnik (ime,prezime,radnomjesto,slika,komentar) values (:ime,:prezime,:radnomjesto,:slika,:komentar)');
  $izraz->execute($_POST);
  header('location:privatno.php');
}
?>
<!doctype html>
<html class="no-js" lang="en">
<html prefix="og: https://ogp.me/ns#">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodavanje novog radnika</title>
    
    <link rel="stylesheet" href="assets/css/foundation.css">
    <link rel="stylesheet" href="style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta property="og:title" content="Moj app" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https:/http://polaznik04.edunova.hr/novi.php" />

  </head>
<body class="koky">
<div  class="card-user-button">
    <a style="position: fixed;" href="privatno.php" class="hollow button">Povratak</a><br><br>
    <a style="position: fixed;" float: right;  href="logout.php" class="hollow button">Logout</a>
</div>
<div class="translucent-form-overlay" >
  <form method="POST">
    <h3>Dodajte novog radnika</h3>
    <div class="row columns">
      <label>Ime
        <input type="text" id="ime" name="ime" required >
      </label>
    </div>
    <div class="row columns">
      <label>Prezime
        <input type="text" id="prezime" name="prezime" required>
      </label>
      </div>
      <div class="row columns">
      <label>Radno mjesto
        <input type="text" id="radnomjesto" name="radnomjesto" required>
      </label>
      </div>
      <div class="row columns">
      <label>URL slike
        <input type="text" id="slika" name="slika">
      </label>
      </div>
      <div class="row columns">
      <label>Komentar
        <textarea cols="30" rows="10" type="text" id="komentar" name="komentar"></textarea>
      </label>
    <input onclick="return  confirm('Dodaj novog radnika')" type="submit" class="button expanded" value="Dodaj novog radnika"> 
    </input>
 </form>
</div>




<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>
