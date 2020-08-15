<?php 
require_once 'konfiguracija.php';

if(!isset($_POST['user']) || !isset($_POST['password'])){
    header('location: index.php?p=1');
    exit;
}

// ovdje neće doći u koliko ključevi nisu postavljeni

if(trim($_POST['user'])==='' ||  trim($_POST['password'])===''){
    header('location: index.php?p=2'); 
    exit;
}

// sada sam siguran kako su kljucevi postavljeni i kako postoje vrijednosti

if($_POST['user']!=='edunova' || $_POST['password']!=='edunova'){
    if($_POST['user']!=='edunova2' || $_POST['password']!=='edunova2'){
    // korisnicko ime i lozinka ne odgovaraju
    header('location: index.php?p=3');
    exit; 
    }
}


// tu sam siguran da se korisnik uspješno autorizirao i radim što treba

$_SESSION['autoriziran']=$_POST['user'];
header('location: privatno.php');