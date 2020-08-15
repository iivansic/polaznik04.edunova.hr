<?php

if(isset($_GET['id'])){
    header('location: index.php');
}

require_once 'konfiguracija.php';

$izraz=$veza->prepare('delete from radnik where id=:id');
$izraz->execute($_GET);
header('location: privatno.php');