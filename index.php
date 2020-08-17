<?php 
require_once 'konfiguracija.php';
?>
<!doctype html>
<html class="no-js" lang="en">
<html prefix="og: https://ogp.me/ns#">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moj app</title>
    <link rel="stylesheet" href="assets/css/foundation.css">
    <link rel="stylesheet" href="style.css">

<meta property="og:title" content="Moj app" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https:/http://polaznik04.edunova.hr/index.php" />


<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

  </head>
<body class="koky">
<div class="translucent-form-overlay" >
  <form action="autoriziraj.php" method="POST">
    <h3>Prijavite se na Moj app</h3>
    <div class="row columns">
      <label>Korisničko ime
        <input type="text" id="user" name="user" >
      </label>
    </div>
    <div class="row columns">
      <label>Lozinka
        <input type="password" id="password" name="password">
      </label>
    <button type="submit" class="primary button expanded search-button">
      Prijava
    </button>
    <div class="row columns">
      <a href="https://github.com/iivansic/polaznik04.edunova.hr">Github link</a>
    </div>
    
 </form>
</div>

<?php
$p=isset($_GET['p']) ? (int)$_GET['p'] : 0;
switch ($p) {
  case 1:
    echo 'Greška ulaznih parametara';
  break;
  case 2:
    echo '<div class="callout warning">';
    echo '<h5>Molim Vas unesite podatke u prazna polja</h5>';
    echo '</div>';
  break;
  case 3:
    echo '<div class="callout warning">';
    echo '<h5>Ne ispravna kombinacija korisničkog imena i lozinke</h5>';
    echo '</div>';
  break;
 default:
    echo '<div class="callout warning">';
    echo '<h5>Molim Vas autorizirajte se</h5>';
    echo '</div>';
  break;
}
?>



<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
</body>
</html>
