<?php 
require_once 'konfiguracija.php';
if(!isset($_SESSION['autoriziran'])){
    header('location:index.php');
}
?>

<?php 
require_once 'konfiguracija.php';
if(isset($_POST['ime'])){

  $izraz=$veza->prepare('update radnik set 
  ime=:ime,
  prezime=:prezime,
  radnomjesto=:radnomjesto,
  slika=:slika,
  komentar=:komentar
  where id=:id');

  $izraz->execute($_POST);
  header('location: privatno.php');
}

if(isset($_GET['id'])){
  $izraz=$veza->prepare('select * from radnik where id=:id');
  $izraz->execute($_GET);
  $radnik=$izraz->fetch();
}
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izmjena podataka radnika</title>
    <link rel="stylesheet" href="assets/css/foundation.css">
    <link rel="stylesheet" href="style.css">
  </head>
<body class="koky">
<div  class="card-user-button">
    <a style="position: fixed;" href="privatno.php" class="hollow button">Povratak</a><br><br>
    <a style="position: fixed;" float: right;  href="logout.php" class="hollow button">Logout</a>
</div>
<div class="translucent-form-overlay" >
  <form method="POST">
    <h3>Izmjeni podatke o radniku</h3>
    <div class="row columns">
      <label>Ime
        <input type="text" id="ime" name="ime" value="<?php echo $radnik->ime ?>" >
      </label>
    </div>
    <div class="row columns">
      <label>Prezime
        <input type="text" id="prezime" name="prezime" value="<?php echo $radnik->prezime ?>">
      </label>
      </div>
      <div class="row columns">
      <label>Radno mjesto
        <input type="text" id="radnomjesto" name="radnomjesto" value="<?php echo $radnik->radnomjesto ?>">
      </label>
      </div>
      <div class="row columns">
      <label>URL slike
        <input type="text" id="slika" name="slika" value="<?php echo $radnik->slika ?>">
      </label>
      </div>
      <div class="row columns">
      <label>Komentar
        <textarea cols="30" rows="10" type="text" id="komentar" name="komentar"><?php echo $radnik->komentar ?>" </textarea>
      </label>
    <input type="hidden" name='id' value="<?php echo $radnik->id ?>">
    <button onclick="return  confirm('Izmeni radnika')" type="submit" class="button expanded">
      Izmjeni podatke
    </button>
 </form>
</div>




<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>
